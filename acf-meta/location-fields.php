<?php
function register_location_acf_fields(): void
{
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_location_fields',
            'title' => 'Location Fields',
            'fields' => array(
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
                    'choices' => array(
                        '102232' => '2 Sessions for $20',
                        '102233' => '7 Days for $14',
                    ),
                    'required' => 1,
                    'allow_null' => 1,
                    'default_value' => '',
                    'ui' => 1,
                    'return_format' => 'value',
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


