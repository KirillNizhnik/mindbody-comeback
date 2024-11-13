<?php

function get_mindbody_classes_by_location($api_key, $site_id, $location_id, $start_date = null, $end_date = null, $class_id = null, $classDescr =null, )
{
     $url = 'https://api.mindbodyonline.com/public/v6/class/classes';

    $params = array(
        'locationIds' => $location_id,
        'StartDateTime' => $start_date,
        'EndDateTime' => $end_date
    );
    if (!is_null($class_id)) {
        $params['classScheduleIds'] = [$class_id];
    }

    $url = add_query_arg($params, $url);

    $response = wp_remote_get($url, array(
        'headers' => array(
            'Content-Type' => 'application/json',
            'API-Key' => $api_key,
            'SiteId' => $site_id
        )
    ));

    if (is_wp_error($response)) {
        return 'Error request: ' . $response->get_error_message();
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (!empty($data['Classes'])) {
        return $data['Classes'];
    } else {
        return 'Error: No classes found for the given criteria.';
    }
}


function get_mindbody_class_by_id($classId) {
    $url = "https://api.mindbodyonline.com/public/v6/pickaspot/v1/class/" . $classId;

    $api_key = get_field('mindbody_api_key', 'option');
    $site_id = get_field('mindbody_site_id', 'option');

    if (!$api_key || !$site_id) {
        return 'Error: Missing API key or Site ID';
    }

    $headers = array(
        'Content-Type' => 'application/json',
        'Api-Key' => $api_key,
        'SiteId' => $site_id
    );

    $response = wp_remote_get($url, array(
        'headers' => $headers
    ));
    if (is_wp_error($response)) {
        return 'Error request: ' . $response->get_error_message();
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (!empty($data['Class'])) {
        return $data['Class'];
    } else {
        return 'Error: No class data found';
    }
}

function get_class_details_by_id($class_id) {
    $api_url = 'https://api.mindbodyonline.com/public/v6/class/classschedules';

    $api_key = get_field('mindbody_api_key', 'option');
    $site_id = get_field('mindbody_site_id', 'option');


    $params = array(
        'ClassScheduleIds' => $class_id,
        'siteId' => $site_id
    );

    $options = array(
        'http' => array(
            'header'  => "Content-Type: application/json\r\n" .
                "Api-Key: $api_key\r\n",
            'method'  => 'GET',
        )
    );

    $context = stream_context_create($options);

    $query_string = http_build_query($params);
    $full_url = $api_url . '?' . $query_string;

    $response = file_get_contents($full_url, false, $context);

    if ($response === FALSE) {
        return null;
    }

    $class_details = json_decode($response, true);

    if (!empty($class_details['ClassSchedules'])) {
        return $class_details['ClassSchedules'][0];
    }

    return null;
}


function get_class_description_by_id_and_location($classDescriptionId, $locationId) {
    $api_url = 'https://api.mindbodyonline.com/public/v6/class/classdescriptions';

    $query_params = array(
        'request.classDescriptionId' => $classDescriptionId,
        'request.locationId' => $locationId
    );

    $headers = array(
        'Accept: application/json',
        'siteId:' . get_field('mindbody_site_id', 'option'),
        'Api-Key:' . get_field('mindbody_api_key', 'option')// Замените на ваш реальный API-ключ
    );

    $ch = curl_init();

    $query_string = http_build_query($query_params);

    curl_setopt($ch, CURLOPT_URL, $api_url . '?' . $query_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); // Тайм-аут для запроса

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        $error_message = curl_error($ch);
        curl_close($ch);
        die('Ошибка запроса: ' . $error_message);
    }

    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);


    if ($http_code != 200) {
        die('Ошибка API: HTTP код ' . $http_code . ' - ' . $response);
    }

    $class_description = json_decode($response, true);

    return $class_description;
}

function mindbody_add_client_to_class($user_id, $class_id, $staff_token, $api_key, $site_id,): array
{

    $url = 'https://api.mindbodyonline.com/public/v6/class/addclienttoclass';
    $data = [
        'ClientId' => $user_id,
        'ClassId' => $class_id,
        'Test' => false,
    ];


    $response = wp_remote_post($url, [
        'headers' => [
            'Authorization' => 'Bearer ' . $staff_token,
            'Content-Type' => 'application/json',
            'SiteId' => $site_id,
            'Api-Key' => $api_key,
        ],
        'body' => json_encode($data),
    ]);

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    return $data;
}

