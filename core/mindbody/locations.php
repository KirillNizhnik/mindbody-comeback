<?php


/**
 * @throws Exception
 */
function get_mindbody_locations($site_id) : array
{
    $api_key = get_field('mindbody_api_key', 'option');
    $url = 'https://api.mindbodyonline.com/public/v6/site/locations';

    if (empty($api_key) || empty($site_id)) {
        throw new Exception('API Key or Site ID is missing');
    }

    $response = wp_remote_get($url, array(
        'headers' => array(
            'Content-Type' => 'application/json',
            'API-Key' => $api_key,
            'SiteId' => $site_id,

        )
    ));


    if (is_wp_error($response)) {
        throw new Exception('Error: ' . $response->get_error_message());
    }

    $body = wp_remote_retrieve_body($response);

    $data = json_decode($body, true);
    if (!empty($data['Locations'])) {
        $locations = [];
        foreach ($data['Locations'] as $location) {
            $locations[] = array(
                'LocationId'   => $location['Id'] ?? null,
                'Name'         => $location['Name'] ?? 'No Name',
                'Address'      => $location['Address'] ?? 'No Address',
                'City'         => $location['City'] ?? 'No City',
                'State'        => $location['StateProvCode'] ?? 'No State',
                'PostalCode'   => $location['PostalCode'] ?? 'No Postal Code',
                'Phone'        => $location['Phone'] ?? 'No Phone',
                'Latitude'     => $location['Latitude'] ?? null,
                'Longitude'    => $location['Longitude'] ?? null,
                'Amenities'    => $location['Amenities'] ?? [],
            );
        }
        return $locations;
    } else {
        throw new Exception('No locations found');
    }
}



function check_and_process_mindbody_location($location_id): bool
{
    $api_key = get_field('mindbody_api_key', 'option');
    $site_id = get_field('mindbody_site_id', 'option');

    $url = "https://api.mindbodyonline.com/public/v6/site/locations/{$location_id}";

    $response = wp_remote_get($url, array(
        'headers' => array(
            'Content-Type' => 'application/json',
            'API-Key' => $api_key,
            'SiteId' => $site_id,
        )
    ));

    if (is_wp_error($response)) {
        return false;
    }

    $body = wp_remote_retrieve_body($response);
    $location = json_decode($body, true);

    if (empty($location) || isset($location['Error'])) {
        return false;
    }

    $existing_post = get_posts(array(
        'post_type' => 'locations',
        'meta_key' => 'location_id',
        'meta_value' => $location_id,
        'posts_per_page' => 1
    ));

    if ($existing_post) {
        return true;
    } else {
        return false;
    }
}

