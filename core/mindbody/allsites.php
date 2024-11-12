<?php

function get_mindbody_all_sites_ids($api_key){
    $url = 'https://api.mindbodyonline.com/public/v6/site/sites';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json',
        'Api-Key: ' . $api_key
    ]);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
        curl_close($ch);
        return null;
    }

    curl_close($ch);
    $data = json_decode($response, true);
    $sites = $data['Sites'];
    $site_ids = [];
    foreach ($sites as $site) {
        if ($site['Id'] !== -99) {
            $site_ids[] = $site['Id'];
        }
    }

    return $site_ids;
}
