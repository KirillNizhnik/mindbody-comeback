<?php
function mindbody_get_site_ids(): void
{
    $minbody_api_key = get_field('mindbody_api_key', 'option');
    if (!$minbody_api_key){
        wp_send_json_error('Mindbody API Key is missing');
    }
    $sites_ids = get_mindbody_all_sites_ids($minbody_api_key);

    wp_send_json_success($sites_ids);
}
add_action('wp_ajax_mindbody_get_site_ids', 'mindbody_get_site_ids');



add_action('wp_ajax_mindbody_update_location', 'mindbody_update_location');
function mindbody_update_location(): void
{
    $site_id = sanitize_text_field($_POST['site_id']);
    $api_key = get_field('store_rocket_api_key', 'option');
    $unique_id = get_field('map_unique_id', 'option');
    $minbody_api_key = get_field('mindbody_api_key', 'option');

    try {
        $locations = get_mindbody_locations($site_id);
        process_and_create_location_posts($locations, $site_id);
    } catch (Exception $e) {
        wp_send_json_error('Failed to retrieve locations: ' . $e->getMessage());
    }


    wp_send_json_success('Locations updated successfully.');
}

function get_calendar_classes_by_date(): void
{

    if (isset($_POST['date']) && isset($_POST['location_id'])) {

        $date = sanitize_text_field($_POST['date']);
        $location_id = sanitize_text_field($_POST['location_id']);
        $site_id = sanitize_text_field($_POST['site_id']);

        $start_date = $date . 'T00:00:00';
        $end_date = $date . 'T23:59:59';
        $api_key = get_field('mindbody_api_key', 'option');

        $classes = get_mindbody_classes_by_location($api_key, $site_id, $location_id, $start_date, $end_date);
        if (!empty($classes) && is_array($classes)) {
            $html = '<div class="mindbody-calendar-time">';
            $is_first = true;
            $available_count = 0;

            foreach ($classes as $class) {
                $start_time = date('g:i A', strtotime($class['StartDateTime']));
                $start_datetime = $class['StartDateTime'];
                $end_datetime = $class['EndDateTime'];
                if (isset($class['ClassDescription']['Id']) && isset($class['ClassDescription']['Name'])) {
                    $class_description = $class['ClassDescription']['Id'];
                    $class_name = $class['ClassDescription']['Name'];
                } else {
                    continue;
                }
                if (isset($class['ClassScheduleId'])){
                    $scheduleId = $class['ClassScheduleId'];
                } else{
                    continue;
                }
                if (!$class['IsAvailable']) {
                    continue;
                }
                $active_class = ($is_first) ? 'active' : '';

                $html .= '<div class="time-item ' . $active_class . '" ' .
                    'data-class-id="' . $scheduleId . '" ' .
                    'data-class-schedule-id="' . $class['Id'] . '"' .
                    'data-description-id="' . $class_description . '" ' .
                    'data-class-name="' . htmlspecialchars($class_name, ENT_QUOTES, 'UTF-8') . '" ' .
                    'data-start-datetime="' . htmlspecialchars($start_datetime, ENT_QUOTES, 'UTF-8') . '" ' .
                    'data-end-datetime="' . htmlspecialchars($end_datetime, ENT_QUOTES, 'UTF-8') . '">' .
                    $start_time . ' </div>';

                $is_first = false;
                $available_count++;
            }

            if ($available_count === 0) {
                wp_send_json_error('No classes available for the selected date.');
            }

            $html .= '</div>';
            wp_send_json_success($html);
        } else {
            wp_send_json_error('No classes available for the selected date.');
        }
    } else {
        wp_send_json_error('Invalid request');
    }
}

add_action('wp_ajax_get_calendar_classes_by_date', 'get_calendar_classes_by_date');
add_action('wp_ajax_nopriv_get_calendar_classes_by_date', 'get_calendar_classes_by_date');


add_action('wp_ajax_free_payment', 'handle_free_payment');
add_action('wp_ajax_nopriv_free_payment', 'handle_free_payment');

add_action('wp_ajax_single_payment', 'handle_single_payment');
add_action('wp_ajax_nopriv_single_payment', 'handle_single_payment');

function handle_free_payment()
{
    $user_id = isset($_POST['user_id']) ? intval($_POST['user_id']) : 0;
    $training_id = isset($_POST['training_id']) ? intval($_POST['training_id']) : 0;
    $class_id = isset($_POST['class_id']) ? intval($_POST['class_id']) : 0;
    $location_id = isset($_POST['location_id']) ? intval($_POST['location_id']) : 0;
    $site_id = isset($_POST['site_id']) ? intval($_POST['site_id']) : 0;
    $api_key = get_field('mindbody_api_key', 'option');

    $id = get_post_id_by_mindbody_location_id_and_site_id($location_id, $site_id);
    $login = get_field('stuff_login', $id);
    $password = get_field('stuff_password', $id);
    $staff_token = generate_mindbody_stuff_token($login, $password, $api_key, $site_id);
    if (!$user_id) {
        wp_send_json_error(['message' => 'Sorry, you must be logged in to make a booking.']);
    }
    $response = mindbody_add_client_to_class($user_id, $training_id, $staff_token, $api_key, $site_id);
    if ($response['Error']){
        wp_send_json_error('Sorry we could not process your booking. Please try again later.');
    }
    $data_response = [
        'start_time' => $response['Visit']['StartDateTime'],
        'end_time' => $response['Visit']['EndDateTime'],
        'class_name' => $response['Visit']['Name'],
        'redirectUrl' => get_field('mindbody_success_page', 'option')
    ];


    wp_send_json_success(['message' => 'Free payment processed successfully!', 'data' => $data_response]);
}

function handle_single_payment()
{
    $cc_number = sanitize_text_field($_POST['cc-number']);
    $cc_expiration = sanitize_text_field($_POST['cc-expiration']);
    $cc_cvv = sanitize_text_field($_POST['cc-cvv']);
    $cc_name = sanitize_text_field($_POST['cc-name']);
    $user_id = sanitize_text_field($_POST['user_id']);
    $training_id = sanitize_text_field($_POST['training_id']);
    $class_id = sanitize_text_field($_POST['class_id']);
    $location_id = sanitize_text_field($_POST['location_id']);


    $api_key = get_field('mindbody_api_key', 'option');
    $site_id = sanitize_text_field($_POST['site_id']);
    $app_name = get_field('mindbody_source_name', 'option');


    if (!preg_match('/^\d{16}$/', $cc_number)) {
        wp_send_json_error(['message' => 'Invalid credit card number.']);
    }
    if (!preg_match('/^\d{2}\/\d{2}$/', $cc_expiration)) {
        wp_send_json_error(['message' => 'Invalid expiration date.']);
    }
    if (!preg_match('/^\d{3,4}$/', $cc_cvv)) {
        wp_send_json_error(['message' => 'Invalid CVV.']);
    }
    if (!preg_match('/^[a-zA-Z\s]+$/', $cc_name)) {
        wp_send_json_error(['message' => 'Invalid name on the credit card.']);
    }
    $location_post_id = get_post_id_by_mindbody_location_id_and_site_id($location_id, $site_id);
    $service_id = get_field('package_dropdown', $location_post_id);
    $login = get_field('stuff_login', $location_post_id);
    $password = get_field('stuff_password', $location_post_id);
    $staff_token = generate_mindbody_stuff_token($login, $password, $api_key, $site_id);
    $services = get_mindbody_service($staff_token, $api_key, $site_id, $location_id, $service_id);
    $services_amount = $services['OnlinePrice'];
    $cc_expiration = sanitize_text_field($_POST['cc-expiration']);
    list($exp_month, $exp_year) = explode('/', $cc_expiration);
    $exp_year = '20' . $exp_year;
    $credit_card_info = [
        "number" => $cc_number,
        "exp_month" => $exp_month,
        "exp_year" => $exp_year,
        "cvv" => $cc_cvv,
        "billing_name" => $cc_name,
        "billing_address" => "",
        "billing_city" => "",
        "billing_state" => "",
        "billing_postal_code" => ""
    ];

    $response_check = checkout_shopping_cart($user_id, $location_id, $service_id,$services_amount, $credit_card_info, $staff_token , $api_key, $site_id, $app_name);
    if (!$response_check['Error']){
        $response = mindbody_add_client_to_class($user_id, $class_id, $staff_token, $api_key, $site_id);
        $data_response = [
            'start_time' => $response['Visit']['StartDateTime'],
            'end_time' => $response['Visit']['EndDateTime'],
            'class_name' => $response['Visit']['Name'],
        ];
        wp_send_json_success($data_response);
    }else{
        wp_send_json_error(['message' => 'Payment failed.']);
    }


}



function checkout_shopping_cart($client_id, $location_id, $service_id, $amount, $credit_card_info, $access_token, $api_key, $site_id, $app_name) {

    $url = 'https://api.mindbodyonline.com/public/v6/sale/checkoutshoppingcart';
    $body = [
        "ClientId" => $client_id,
        "Test" => false,
        "LocationId" => $location_id,
        "InStore" => true,
        "CalculateTax" => true,
        "Items" => [
            [
                "Item" => [
                    "Type" => "Service",
                    "Metadata" => [
                        "Id" => $service_id
                    ]
                ],
                "DiscountAmount" => 0,
                "Quantity" => 1
            ]
        ],
        "Payments" => [
            [
                "Type" => "CreditCard",
                "Metadata" => [
                    "Amount" => $amount,
                    "CreditCardNumber" => $credit_card_info['number'],
                    "ExpMonth" => $credit_card_info['exp_month'],
                    "ExpYear" => $credit_card_info['exp_year'],
                    "Cvv" => $credit_card_info['cvv'],
                    "BillingName" => $credit_card_info['billing_name'],
                    "BillingAddress" => $credit_card_info['billing_address'],
                    "BillingCity" => $credit_card_info['billing_city'],
                    "BillingState" => $credit_card_info['billing_state'],
                    "BillingPostalCode" => $credit_card_info['billing_postal_code'],
                    "SaveInfo" => true
                ]
            ]
        ]
    ];

    $response = wp_remote_post($url, [
        'headers' => [
            'Authorization' => 'Bearer ' . $access_token,
            'Api-Key' => $api_key,
            'Content-Type' => 'application/json',
            'SiteId' => $site_id,
            'User-Agent' => $app_name,
        ],
        'body' => json_encode($body),
    ]);

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    if (is_wp_error($response)) {
        return ['success' => false, 'message' => 'Request failed.'];
    }
    return $data;
}


add_action('wp_ajax_check_activity', 'checkActivity');
add_action('wp_ajax_nopriv_check_activity', 'checkActivity');

function checkActivity(){

    $api_key = get_field('mindbody_api_key', 'option');
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $location_id= $_POST['locationId'];
    $site_id = $_POST['siteId'];

    $id = get_post_id_by_mindbody_location_id_and_site_id($location_id, $site_id);
    $login = get_field('stuff_login', $id);
    $password = get_field('stuff_password', $id);


    $staff_token = generate_mindbody_stuff_token($login, $password, $api_key , $site_id);
    $user_info = get_mindbody_user_by_email($email, $staff_token, $api_key, $site_id);
    if ($user_info === 'User not found') {
        $user_info = register_mindbody_user($api_key, $staff_token, $site_id, $first_name, $last_name, $email, $phone);
        $user_id = $user_info["Client"]["UniqueId"];
    }else{
        $user_id = $user_info['Id'];
    }
    $has_user_activity = hasUserActivity($user_id, $staff_token, $api_key, $site_id);
    if ($has_user_activity) {
        wp_send_json_error(['message' => 'User has activity', 'user_id' => $user_id]);
    }else{
        wp_send_json_success(['message' => 'User has no activity', 'user_id' => $user_id]);
    }
}


