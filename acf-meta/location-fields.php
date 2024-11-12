<?php
function register_location_acf_fields(): void
{
    if (function_exists('acf_add_local_field_group')):

        $services_list = generate_services_list();
        acf_add_local_field_group(array(
            'key' => 'group_location_fields',
            'title' => 'Location Fields',
            'fields' => array(
                array(
                    'key' => 'field_site_id',
                    'label' => 'Location Site Id',
                    'name' => 'site_id',
                    'type' => 'text',
                    'instructions' => 'The unique site ID from Mindbody (filled during the import process).',
                    'required' => 1,
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_location_name',
                    'label' => 'Location Name',
                    'name' => 'location_name',
                    'type' => 'text',
                    'instructions' => 'The name of the location (filled during the import process).',
                    'required' => 1,
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_location_address',
                    'label' => 'Address',
                    'name' => 'location_address',
                    'type' => 'text',
                    'instructions' => 'The full address of the location (filled during the import process).',
                    'required' => 1,
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_location_city',
                    'label' => 'City',
                    'name' => 'location_city',
                    'type' => 'text',
                    'instructions' => 'The city where the location is situated (filled during the import process).',
                    'required' => 1,
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_location_state',
                    'label' => 'State',
                    'name' => 'location_state',
                    'type' => 'text',
                    'instructions' => 'The state/region of the location (filled during the import process).',
                    'required' => 1,
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_location_postal_code',
                    'label' => 'Postal Code',
                    'name' => 'location_postal_code',
                    'type' => 'text',
                    'instructions' => 'The postal code for the location (filled during the import process).',
                    'required' => 1,
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_location_phone',
                    'label' => 'Phone',
                    'name' => 'location_phone',
                    'type' => 'text',
                    'instructions' => 'The contact phone number for the location (filled during the import process).',
                    'required' => 1,
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_location_latitude',
                    'label' => 'Latitude',
                    'name' => 'location_latitude',
                    'type' => 'text',
                    'instructions' => 'Latitude of the location (filled during the import process).',
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_location_longitude',
                    'label' => 'Longitude',
                    'name' => 'location_longitude',
                    'type' => 'text',
                    'instructions' => 'Longitude of the location (filled during the import process).',
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_map_link',
                    'label' => 'Map Link',
                    'name' => 'map_link',
                    'type' => 'text',
                    'instructions' => 'Longitude of the location (filled during the import process)(coll to action).',
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_location_id',
                    'label' => 'Mindbody Location ID',
                    'name' => 'location_id',
                    'type' => 'text',
                    'instructions' => 'The unique location ID from Mindbody (filled during the import process).',
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_store_rocket_location_id',
                    'label' => 'Store Rocket Location ID',
                    'name' => 'store_rocket_location_id',
                    'type' => 'text',
                    'instructions' => 'The unique location ID from Store Rocket (filled during the import process).',
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_ads_url',
                    'label' => 'Ads Url',
                    'name' => 'ads_url',
                    'type' => 'text',
                    'instructions' => 'The URL for the ads (filled during the import process).',
                    'readonly' => 1,
                ),
                array(
                    'key' => 'field_package_dropdown',
                    'label' => 'Select Package',
                    'name' => 'package_dropdown',
                    'type' => 'select',
                    'instructions' => "Select a package from the list.",
                    'choices' => $services_list,
                    'required' => 0,
                    'allow_null' => 1,
                    'default_value' => '',
                    'ui' => 1,
                    'return_format' => 'value',
                ),
                array(
                    'key' => 'field_stuff_login',
                    'label' => 'Stuff Login',
                    'name' => 'stuff_login',
                    'type' => 'text',
                    'instructions' => 'Stuff Login',
                    'readonly' => 0,
                ),
                array(
                    'key' => 'field_stuff_password',
                    'label' => 'Stuff Password',
                    'name' => 'stuff_password',
                    'type' => 'password',
                    'instructions' => 'Stuff Password',
                    'readonly' => 0,
                ),


            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'locations',
                    ),
                ),
            ),
        ));

    endif;
}

add_action('acf/init', 'register_location_acf_fields');


function generate_services_list(): array
{
    if (isset($_GET['post'])) {
        $post = $_GET['post'];
        $login = get_field('stuff_login', $post);
        $password = get_field('stuff_password', $post);
        $site_id = get_field('site_id', $post);
        $api_key = get_field('mindbody_api_key', 'option');
        $location_id = get_field('location_id', $post);
        if ($login && $password && $api_key) {
            $stuff_token = generate_mindbody_stuff_token($login, $password, $api_key, $site_id);
            $services = get_all_mindbody_services($stuff_token, $api_key, $site_id, $location_id);
            $services_list = [];
            foreach ($services as $service) {
                $services_list[$service['Id']] = $service['Name'];
            }
            return $services_list;
        } else {
            return [];
        }
    } else {
        return [];
    }
}

