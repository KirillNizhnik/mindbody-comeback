<?php



function process_and_create_location_posts(array $locations, $site_id): void
{
    $formPage = get_field('mindbody_form_page', 'option');
    foreach ($locations as $location) {
        if ($location['Address'] !== 'No Address' && $location['City'] !== 'No City' && $location['Latitude'] && $location['Longitude'] ) {
            $location_name = $location['Name'] ?? 'No Name';
            $location_id = $location['LocationId'];
            $location_address = $location['Address'];
            $location_city = $location['City'] ?? 'No City';
            $location_state = $location['StateProvCode'] ?? 'No State';
            $location_postal_code = $location['PostalCode'] ?? 'No Postal Code';
            $location_phone = $location['Phone'] ?? 'No Phone';
            $location_latitude = $location['Latitude'];
            $location_longitude = $location['Longitude'];
            $post = get_post_id_by_mindbody_location_id_and_site_id($location['LocationId'], $site_id);
            $map_link = generateMapLink($location_id, $site_id, $formPage);
            $store_rocket_map = get_field('map_unique_id', 'option');
            $store_rocket_api = get_field('store_rocket_api_key', 'option');
            if ($post){
                $post_id = $post;
                $store_rocket_location_id = get_field('store_rocket_location_id', $post_id);
                updateLocationForStoreRocket(
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
                    $store_rocket_api,
                    $store_rocket_location_id);
            }else {
                $store_rocket_location_id = generateLocationForStoreRocket(
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
                    $store_rocket_api);
                $new_post = array(
                    'post_title' => wp_strip_all_tags($location_name),
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_type' => 'locations'
                );
                $post_id = wp_insert_post($new_post);
                update_field('store_rocket_location_id', $store_rocket_location_id, $post_id);

            }

                if (!is_wp_error($post_id)) {
                    update_field('site_id', $site_id, $post_id);
                    update_field('location_id', $location_id, $post_id);
                    update_field('location_name', $location_name, $post_id);
                    update_field('location_address', $location_address, $post_id);
                    update_field('location_city', $location_city, $post_id);
                    update_field('location_state', $location_state, $post_id);
                    update_field('location_postal_code', $location_postal_code, $post_id);
                    update_field('location_phone', $location_phone, $post_id);
                    update_field('location_latitude', $location_latitude, $post_id);
                    update_field('location_longitude', $location_longitude, $post_id);
                    update_field('map_link', $map_link, $post_id);
                    update_field('ads_url', $map_link . '&ads=true', $post_id);
                    error_log("Created post for location: {$location_name} (LocationId: {$location_id})");
                } else {
                    error_log("Failed to create post for location: {$location_name}");
                }
            }

    }
}

function generateMapLink($locationId, $siteId, $formPage): string
{
    return $formPage . '?location=' . $locationId . '&siteId=' . $siteId;
}

function findLocationByLocationId($locationId)
{


}

function does_post_exist_by_mindbody_location_id($location_id, $site_id): ?bool
{
    $args = array(
        'post_type' => 'locations',
        'meta_query' => array(
            array(
                'key' => 'location_id',
                'value' => $location_id,
                'compare' => '='
            ),
            array(
                'key'=> 'site_id',
                'value'=> $site_id,
                'compare' => '='
            )
        ),
        'posts_per_page' => 1
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $query->the_post();

        wp_reset_postdata();
        return get_the_ID();
    }

    wp_reset_postdata();
    return null;
}

function get_post_id_by_mindbody_location_id_and_site_id($location_id, $site_id): bool|int
{
    $args = array(
        'post_type' => 'locations',
        'meta_query' => array(
            array(
                'key' => 'location_id',
                'value' => $location_id,
                'compare' => '='
            ),
            array(
                'key' => 'site_id',
                'value' => $site_id,
                'compare' => '='
            ),
        ),
        'posts_per_page' => 1
    );

    $query = new WP_Query($args);

    wp_reset_postdata();

    if ($query->have_posts()) {
        $query->the_post();
        return get_the_ID();
    }

    return false;
}