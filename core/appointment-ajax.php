<?php

function get_appointment_buttons(): void
{
    $site_id = $_POST['siteId'];
    $location_id = $_POST['locationId'];
    $buttons = get_appointment_session_types($location_id, $site_id);
    if ($buttons === null){
        wp_send_json_error('Sorry');
    }
    wp_send_json_success($buttons);
}
add_action('wp_ajax_get_appointment_buttons', 'get_appointment_buttons');
add_action('wp_ajax_nopriv_get_appointment_buttons', 'get_appointment_buttons');

/**
 * @throws Exception
 */
function get_appointment_times(): void
{
    $site_id = $_POST['siteId'];
    $location_id = $_POST['locationId'];
    $session_type_id = $_POST['sessionTypeId'];
    $date = $_POST['date'];
    $slots = get_appointment_slots_by_location($site_id, $location_id, $session_type_id, $date);
    if (!$slots){
        wp_send_json_error('No slots available, choose another date!');
    }else{
        wp_send_json_success($slots);
    }

}
add_action('wp_ajax_get_appointment_times', 'get_appointment_times');
add_action('wp_ajax_nopriv_get_appointment_times', 'get_appointment_times');


/**
 * @throws Exception
 */
function get_appointment_slots_by_location($site_id, $location_id, $session_type_id, $date)
{
    $post_id = get_post_id_by_mindbody_location_id_and_site_id($location_id, $site_id);
    $login = get_field('stuff_login', $post_id);
    $password = get_field('stuff_password', $post_id);
    $api_key = get_field('mindbody_api_key', 'option');
    $stuff_token = generate_mindbody_stuff_token($login, $password, $api_key, $site_id);
    $availabilities = get_location_worker_day_by_date($site_id, $location_id, $date, $stuff_token, $session_type_id, $api_key);
    if (!$availabilities){
        wp_send_json_error('No slots available, choose another date');
    }else{
        return generateFixedAppointmentSlots($availabilities, 30, 0);
    }
}

function get_location_worker_day_by_date($site_id, $location_id, $date, $stuff_token, $session_type_id, $api_key): array
{
    $limit         = 100;
    $offset        = 0;
    $dateObject = DateTime::createFromFormat('m-d-Y', $date);
    $mindbodyDate = $dateObject->format('m-d-Y');

    $baseUrl = "https://api.mindbodyonline.com/public/v6/appointment/bookableitems";
    $query   = [
        'limit'          => $limit,
        'offset'         => $offset,
        'sessionTypeIds' => $session_type_id,
        'locationIds'    => $location_id,
        'startDate'      => $mindbodyDate,
        'endDate'        => $mindbodyDate,
    ];
    $url = $baseUrl . '?' . http_build_query($query);

    $headers  = [
        "Content-Type: application/json",
        "Api-Key: $api_key",
        "Authorization: $stuff_token",
        "SiteId: $site_id",
    ];

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => $headers,
        CURLOPT_TIMEOUT        => 30,
    ]);

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        return [];
    }
    $data = json_decode($response, true);
    if (!isset($data['Availabilities']) || !is_array($data['Availabilities'])) {
        return [];
    }
    $data = $data['Availabilities'];
    $work_day = [];
    foreach ($data as $item){
        $work_day[] = [
            'worker' => $item['Staff']['Name'],
            'id' => $item['Staff']['Id'],
            'start' => $item['StartDateTime'],
            'end' => $item['EndDateTime'],
        ];
    }
    return [$work_day];
}

/**
 * @throws Exception
 */
function generateFixedAppointmentSlots(array $availabilities, int $session_length = 30, int $slot_interval = 0): array {
    $generatedSlots = [];
    $firstItem = array_shift($availabilities);
    foreach ($firstItem as $item) {
        $workerName = $item['worker'];
        $workerId = $item['id'];
        try {
            $startDateTime = new DateTime($item['start']);
            $endDateTime = new DateTime($item['end']);

            $currentStart = $startDateTime;
            while ($currentStart < $endDateTime) {
                $currentEnd = clone $currentStart;
                $currentEnd->modify("+{$session_length} minutes");

                if ($currentEnd > $endDateTime) {
                    break;
                }


                $generatedSlots[] = [
                    'workerName' =>$workerName,
                    'id' => $workerId,
                    'start' => $currentStart->format('H:i'),
                    'end'   => $currentEnd->format('H:i'),
                ];


                $currentStart->modify("+{$session_length} minutes");
            }


        } catch (Exception $e) {
            wp_send_json_error('Sorry, something went wrong');
        }
    }
    return getUniqueAndSortedSlots($generatedSlots);
}


function getUniqueAndSortedSlots(array $slots): array
{
    $uniqueSlots = getUniqueSlotsByTime($slots);

    usort($uniqueSlots, function ($a, $b) {
        return strcmp($a['start'], $b['start']);
    });

    return $uniqueSlots;
}
function getUniqueSlotsByTime(array $slots): array
{

    $uniqueSlotsMap = [];

    foreach ($slots as $slot) {
        if (!isset($slot['start'], $slot['end'])) {

            continue;
        }


        $timeSignature = $slot['start'] . '|' . $slot['end'];


        if (!array_key_exists($timeSignature, $uniqueSlotsMap)) {
            $uniqueSlotsMap[$timeSignature] = $slot;
        }
    }

    return array_values($uniqueSlotsMap);
}


function get_appointment_form(){
    $locationId = $_POST['locationId'];
    $siteId = $_POST['siteId'];
    $sessionTypeId = $_POST['sessionTypeId'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $worker_name = $_POST['workerName'];
    $worker_id = $_POST['workerId'];
    $user_id = $_POST['userId'];

    $appointment = recordAnAppointment($locationId, $siteId, $sessionTypeId, $date, $time, $worker_name, $worker_id, $user_id);
    if (!$appointment){
        wp_send_json_error('Sorry, something went wrong');
    }
    wp_send_json_success();
}
add_action('wp_ajax_get_appointment_form', 'get_appointment_form');
add_action('wp_ajax_nopriv_get_appointment_form', 'get_appointment_form');



function recordAnAppointment($locationId, $siteId, $sessionTypeId, $date, $time, $worker_name, $worker_id, $user_id){
    $post_id = get_post_id_by_mindbody_location_id_and_site_id($locationId, $siteId);
    $login = get_field('stuff_login', $post_id);
    $password = get_field('stuff_password', $post_id);
    $api_key = get_field('mindbody_api_key', 'option');
    $stuff_token = generate_mindbody_stuff_token($login, $password, $api_key, $siteId);
    $appointment = create_appointment($siteId, $locationId, $sessionTypeId, $date, $time, $worker_id, $user_id, $stuff_token, $api_key);
    if ($appointment){
        return $appointment;
    }
    return false;

}

function create_appointment($site_id, $location_id, $session_type_id, $date, $time, $worker_id, $user_id, $stuff_token, $api_key){
    $baseUrl = "https://api.mindbodyonline.com/public/v6/appointment/addappointment";
    $url = $baseUrl;

    $headers = [
        "Content-Type: application/json",
        "Api-Key: $api_key",
        "Authorization: $stuff_token",
        "SiteId: $site_id",
    ];

    $inputFormat = 'm-d-Y H:i';
    $dateTimeString = "$date $time";

    try {
        $startDateTime = DateTime::createFromFormat($inputFormat, $dateTimeString);
        $errors = DateTime::getLastErrors();
        if ($errors['warning_count'] > 0 || $errors['error_count'] > 0) {
            throw new Exception("Incorrect time format: $dateTimeString");
        }

        $endDateTime = clone $startDateTime;
        $endDateTime->modify('+30 minutes');
        $startDateTimeFormatted = $startDateTime->format('Y-m-d\TH:i');
        $endDateTimeFormatted = $endDateTime->format('Y-m-d\TH:i');
    } catch (Exception $e) {
        error_log("Error: create time " . $e->getMessage());
        return false;
    }

    $data = [
        "ApplyPayment" => false,
        'StartDateTime' => $startDateTimeFormatted,
        'EndDateTime' => $endDateTimeFormatted,
        'StaffId' => $worker_id,
        'ClientId' => $user_id,
        'LocationId' => $location_id,
        'SessionTypeId' => $session_type_id,
        'SendEmail' => true,
    ];

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_TIMEOUT => 30,
    ]);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        error_log("cURL error: " . $error_msg);
        return false;
    }

    curl_close($ch);

    $responseData = json_decode($response, true);
    if (!isset($responseData['Appointment'])) {
        error_log("Error: " . print_r($responseData, true));
        wp_send_json_error($responseData["Error"]["Message"]);
        return false;
    }else{
        wp_send_json_success($responseData['Appointment']['StartDateTime']);
    }

    return true;
}


