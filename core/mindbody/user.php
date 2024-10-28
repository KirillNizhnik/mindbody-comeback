<?php
function get_mindbody_user_by_email($email) {
    $url = 'https://api.mindbodyonline.com/public/v6/client/clients';

    $staff_token = get_mindbody_token();
    if (is_wp_error($staff_token)) {
        return 'Error: unable to get token';
    }

    $data = [
        'SearchText' => $email
    ];

    $api_key = get_field('mindbody_api_key', 'option');

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url . '?' . http_build_query($data),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $staff_token['AccessToken'],
            'Accept: application/json',
            'Api-Key: ' . $api_key,
            'siteId:' . get_field('mindbody_site_id', 'option'),
            'Content-Type: application/json',
        ],
    ]);

    $response = curl_exec($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    if ($httpcode == 200) {
        $responseData = json_decode($response, true);

        if (!empty($responseData['Clients'])) {
            return $responseData['Clients'][0];  // Можно вернуть весь массив, если нужно
        } else {
            return 'User not found';  // Клиент не найден
        }
    } else {
        return 'Error: ' . $response;  // Ошибка запроса
    }
}

function register_mindbody_user($first_name, $last_name, $email, $phone, $birthdate = '1990-01-01') {
    $url = 'https://api.mindbodyonline.com/public/v6/client/addclient';

    $data = [
        'FirstName' => $first_name,
        'LastName' => $last_name,
        'Email' => $email,
        'MobilePhone' => $phone,
        'BirthDate' => $birthdate,


    ];

    $staff_token = get_mindbody_token();
    if (is_wp_error($staff_token)) {
        return 'Error: Unable to get token';
    }

    $api_key = get_field('mindbody_api_key', 'option');
    if (!$api_key) {
        return 'Error: API key missing';
    }

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $staff_token['AccessToken'], // Токен для авторизации
            'api-key: ' . $api_key, // Добавляем API ключ в заголовок
            'Accept: application/json',
            'siteId:' . get_field('mindbody_site_id', 'option'),
            'Content-Type: application/json',
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

function get_mindbody_required_client_fields() {
    $url = 'https://api.mindbodyonline.com/public/v6/client/requiredclientfields';

    $staff_token = get_mindbody_token();
    if (is_wp_error($staff_token)) {
        return 'Error: Unable to get token';
    }

    $api_key = get_field('mindbody_api_key', 'option');
    if (!$api_key) {
        return 'Error: API key missing';
    }

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer ' . $staff_token['AccessToken'],
            'api-key: ' . $api_key,
            'Accept: application/json',
            'siteId:' . get_field('mindbody_site_id', 'option'),
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