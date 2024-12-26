<?php

function get_appointment_session_types($locationId, $siteId): ?array
{
    $url = 'https://api.mindbodyonline.com/public/v6/site/sessiontypes';
    $api_key = get_field('mindbody_api_key', 'option');
    $postId = get_post_id_by_mindbody_location_id_and_site_id($locationId, $siteId);
    $staff_password = get_field('stuff_password', $postId);
    $staff_login = get_field('stuff_login', $postId);
    $staff_token = generate_mindbody_stuff_token($staff_login, $staff_password, $api_key, $siteId);

    $params = [
        'limit' => 100,
        'offset' => 0,
    ];
    $queryString = http_build_query($params);
    $fullUrl = $url . '?' . $queryString;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $fullUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Api-Key: ' . $api_key,
        'siteId: ' . $siteId,
        'Authorization: Bearer ' . $staff_token,
        'Content-Type: application/json'
    ]);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        error_log("Error cURL: $error_msg");
        curl_close($ch);
        return null;
    }

    curl_close($ch);

    $data = json_decode($response, true);
    $sessionTypes = $data['SessionTypes'];
    $buttons = [];
    foreach ($sessionTypes as $sessionType) {
        if ($sessionType['Type'] === 'Appointment') {
            if (strpos($sessionType['Name'], 'In Person') || strpos($sessionType['Name'], 'Virtual')) {
                if (strpos($sessionType['Name'], 'In Person')) {
                    $sessionType['Name'] = 'In Person';
                } else {
                    $sessionType['Name'] = 'Virtual';
                }
                $buttons[] = [
                    'id' => $sessionType['Id'],
                    'title' => $sessionType['Name'],
                    'type' => $sessionType['Type'],
                    'class' => 'appointment-type-button',
                ];
            }
        }
    }
    return $buttons;
}

