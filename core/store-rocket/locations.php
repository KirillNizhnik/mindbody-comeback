<?php

function delete_all_store_locations_from_api($store_rocket_api, $store_rocket_project_id): void{


    if (empty($store_rocket_api) || empty($store_rocket_project_id)) {
        error_log('StoreRocket API key or Project ID is missing.');
        return;
    }
    $args = array(
        'post_type'      => 'locations',
        'post_status'    => 'any',
        'numberposts'    => -1,
    );

    $location_posts = get_posts($args);

    if (empty($location_posts)) {
        error_log('No location posts found to delete.');
        return;
    }

    foreach ($location_posts as $post) {
        $location_id = get_post_meta($post->ID, 'store_rocket_location_id', true);
        if (!empty($location_id)) {
            $delete_url = "https://storerocket.io/api/v2/projects/{$store_rocket_project_id}/locations/{$location_id}";

            $response = wp_remote_request($delete_url, array(
                'method'    => 'DELETE',
                'headers'   => array(
                    'Authorization' => 'Bearer ' . $store_rocket_api,
                    'Accept'        => 'application/json',
                ),
            ));

            if (is_wp_error($response)) {
                error_log('Failed to delete location via API for location ID ' . $location_id);
            } else {
                wp_delete_post($post->ID, true);
                error_log('Successfully deleted location post and API entry for location ID ' . $location_id);
            }
        } else {
            error_log('No location ID found for post ID ' . $post->ID);
        }
    }
}

function generateLocationForStoreRocket(
    $location_id,
    $location_name,
    $location_address,
    $location_city,
    $location_state,
    $location_postal_code,
    $location_phone,
    $location_latitude,
    $location_longitude,
    $map_link,
    $store_rocket_map,
    $store_rocket_api
) {
    $url = 'https://storerocket.io/api/v2/projects/' . $store_rocket_map . '/locations';

    $payload = array(
        'country' => 'US',
        'marker_id' => 7062
    );

    if (!empty($location_name)) {
        $payload['name'] = $location_name;
    }

    if (!empty($location_address)) {
        $payload['address_line_1'] = $location_address;
        $payload['visible'] = true;
    } else {
        $payload['visible'] = false;
    }

    if (!empty($location_city)) {
        $payload['city'] = $location_city;
    }

    if (!empty($location_state)) {
        $payload['state'] = $location_state;
    }

    if (!empty($location_postal_code)) {
        $payload['postcode'] = $location_postal_code;
    }

    if (!empty($location_latitude)) {
        $payload['lat'] = $location_latitude;
    }

    if (!empty($location_longitude)) {
        $payload['lng'] = $location_longitude;
    }

    if (!empty($location_phone)) {
        $payload['phone'] = $location_phone;
    }

    if (!empty($map_link)) {
        $payload['callsToAction'] = array(
            'SIGN UP OF TRAINING' => $map_link
        );
    }

    $response = wp_remote_post($url, array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $store_rocket_api,
            'Content-Type'  => 'application/json',
            'Accept'        => 'application/json'
        ),
        'body' => json_encode($payload)
    ));


    if (is_wp_error($response)) {
        error_log('StoreRocket API error: ' . $response->get_error_message());
        return false;
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (!empty($data['data']['id'])) {
        return $data['data']['id'];
    } else {
        error_log('Failed to add location to StoreRocket: ' . $location_name);
        return false;
    }
}