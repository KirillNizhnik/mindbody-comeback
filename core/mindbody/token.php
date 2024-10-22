<?php

function get_mindbody_token() {
    $url = 'https://api.mindbodyonline.com/public/v6/usertoken/issue';

    $api_key = get_field('mindbody_api_key', 'option');
    $username = get_field('mindbody_staff_name', 'option');
    $password = get_field('mindbody_staff_password', 'option');

    $data = [
        'Username' => $username,
        'Password' => $password
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => [
            'Accept: application/json',
            'Content-Type: application/json',
            'Api-Key: ' . $api_key,
            'siteId: ' . get_field('mindbody_site_id', 'option'),
        ],
    ]);

    $response = curl_exec($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if ($response === false) {
        $error = curl_error($curl);
        curl_close($curl);
        return "Error: " . $error;
    }

    curl_close($curl);

    if ($httpcode == 200) {
        $responseData = json_decode($response, true);
        return $responseData;
    } else {
        return "Error: " . $response;
    }
}

