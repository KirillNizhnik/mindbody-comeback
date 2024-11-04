<?php
function get_mindbody_services_with_filters( $class_schedule_id, $authorization_token, $location_id, $program_ids = [], $service_ids = [], $session_type_ids = [], $limit = 62, $offset = 100) {
    $url = 'https://api.mindbodyonline.com/public/v6/sale/services';

    $params = [
        'request.classScheduleId' => $class_schedule_id,
        'request.hideRelatedPrograms' => 'false',
        'request.includeDiscontinued' => 'false',
        'request.includeSaleInContractOnly' => 'false',
        'request.locationId' => $location_id,
        'request.sellOnline' => 'false',
    ];


    $curl = curl_init();
    $api_key = get_field('mindbody_api_key', 'option');
    $site_id = get_field('mindbody_site_id', 'option');

    curl_setopt_array($curl, [
        CURLOPT_URL => $url . '?' . http_build_query($params),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $authorization_token,
            'Api-Key: ' . $api_key,
            'Accept: application/json',
            'siteId:' . $site_id,
        ],
    ]);

    $response = curl_exec($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);


    if ($httpcode == 200) {
        return json_decode($response, true);
    } else {
        return 'Error: ' . $response;

    }
}

function get_mindbody_services($class_id, $staff_token, $service_id = null) {
    $url = 'https://api.mindbodyonline.com/public/v6/sale/services';

    $curl = curl_init();
    $params = [
        'classId' => $class_id,
    ];

    if ($service_id !== null) {
        $params['serviceIds'] = [$service_id];
    }

    curl_setopt_array($curl, [
        CURLOPT_URL => $url . '?' . http_build_query($params),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Api-Key: ' . get_field('mindbody_api_key', 'option'),
            'Authorization: Bearer ' . $staff_token,
            'SiteId: ' . get_field('mindbody_site_id', 'option'),
            'Accept: application/json',
        ],
    ]);


    $response = curl_exec($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    if ($httpcode == 200) {
        $responseData = json_decode($response, true);
        return $responseData;
    } else {
        return 'Error: ' . $response;
    }
}