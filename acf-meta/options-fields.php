<?php

function register_acf_fields_for_mindbody(): void
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_mindbody_settings',
            'title' => 'Mindbody Settings',
            'fields' => array(
                array(
                    'key' => 'field_mindbody_api_key',
                    'label' => 'Mindbody API Key',
                    'name' => 'mindbody_api_key',
                    'type' => 'text',
                    'instructions' => 'Enter your Mindbody API key.',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_mindbody_source_name',
                    'label' => 'Mindbody Source Name',
                    'name' => 'mindbody_source_name',
                    'type' => 'text',
                    'instructions' => 'Enter the Source Name for Mindbody.',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_mindbody_site_id',
                    'label' => 'Mindbody Site ID',
                    'name' => 'mindbody_site_id',
                    'type' => 'text',
                    'instructions' => 'Enter the Site ID for Mindbody.',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_mindbody_staff_name',
                    'label' => 'Mindbody Staff Name',
                    'name' => 'mindbody_staff_name',
                    'type' => 'text',
                    'instructions' => 'Enter the Staff Name for Mindbody.',
                    'required' => 1,
                ),
                array(
                    'key' => 'field_mindbody_staff_password',
                    'label' => 'Mindbody Staff Password',
                    'name' => 'mindbody_staff_password',
                    'type' => 'text',
                    'instructions' => 'Enter the Staff Password for Mindbody.',
                    'required' => 1,
                ),

                array(
                    'key' => 'field_mindbody_service_id_payment',
                    'label' => 'Mindbody Service Id Payment',
                    'name' => 'mindbody_service_id_payment',
                    'type' => 'text',
                    'instructions' => 'Enter Service ID for Mindbody.(One sessions)',
                    'required' => 1,
                ),

                array(
                    'key' => 'field_mindbody_service_id_free',
                    'label' => 'Mindbody Service Id Free',
                    'name' => 'mindbody_service_id_free',
                    'type' => 'text',
                    'instructions' => 'Enter Service ID for Mindbody.(One sessions free)',
                    'required' => 1,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'mindbody-settings',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
        ));
    }
}

add_action('acf/init', 'register_acf_fields_for_mindbody');


function register_acf_fields_for_store_rocket() : void {

    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_store_rocket_settings',
            'title' => 'Store Rocket Map Settings',
            'fields' => array(
                array(
                    'key' => 'field_store_rocket_enabled',
                    'label' => 'Enable Store Rocket Map',
                    'name' => 'store_rocket_enabled',
                    'type' => 'true_false',
                    'instructions' => 'Toggle this switch to enable or disable the Store Rocket map.',
                    'required' => 0,
                    'ui' => 1,
                    'default_value' => 0,
                ),
                array(
                    'key' => 'field_store_rocket_api_key',
                    'label' => 'Store Rocket API Key',
                    'name' => 'store_rocket_api_key',
                    'type' => 'text',
                    'instructions' => 'Enter the Store Rocket API key to enable map generation.',
                    'required' => 1,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_store_rocket_enabled',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
                array(
                    'key' => 'map_unique_id',
                    'label' => 'Map Unique ID',
                    'name' => 'map_unique_id',
                    'type' => 'text',
                    'instructions' => 'Enter the unique ID for the map. ROCKET STORE',
                    'required' => 1,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_store_rocket_enabled',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'mindbody-settings',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
        ));
    }
}

add_action('acf/init', 'register_acf_fields_for_store_rocket');


function register_acf_fields_for_custom_page_assignment()
{
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_mindbody_custom_pages',
            'title' => 'Mindbody Page Assignments',
            'fields' => array(
                array(
                    'key' => 'field_mindbody_map_page',
                    'label' => 'Locations Page',
                    'name' => 'mindbody_locations_page',
                    'type' => 'page_link',
                    'instructions' => 'Select the page that will display the locations.',
                    'required' => 1,
                    'post_type' => array('page'),
                    'allow_null' => 0,
                    'multiple' => 0,
                ),
                array(
                    'key' => 'field_mindbody_form_page',
                    'label' => 'Form Page',
                    'name' => 'mindbody_form_page',
                    'type' => 'page_link',
                    'instructions' => 'Select the page that will display the form.',
                    'required' => 1,
                    'post_type' => array('page'),
                    'allow_null' => 0,
                    'multiple' => 0,
                ),
                array(
                    'key' => 'field_mindbody_сalendar_page',
                    'label' => 'Calendar Page',
                    'name' => 'mindbody_calendar_page',
                    'type' => 'page_link',
                    'instructions' => 'Select the page that will display the calendar.',
                    'required' => 1,
                    'post_type' => array('page'),
                    'allow_null' => 0,
                    'multiple' => 0,
                ),
                array(
                    'key' => 'field_mindbody_payment_page',
                    'label' => 'Payment Page',
                    'name' => 'mindbody_payment_page',
                    'type' => 'page_link',
                    'instructions' => 'Select the page that will handle payment.',
                    'required' => 1,
                    'post_type' => array('page'),
                    'allow_null' => 0,
                    'multiple' => 0,
                ),
                array(
                    'key' => 'field_mindbody_success_page',
                    'label' => 'Success Page',
                    'name' => 'mindbody_success_page',
                    'type' => 'page_link',
                    'instructions' => 'Select the page to show after successful payment.',
                    'required' => 1,
                    'post_type' => array('page'),
                    'allow_null' => 0,
                    'multiple' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'mindbody-settings',
                    ),
                ),
            ),
        ));
    }
}

add_action('acf/init', 'register_acf_fields_for_custom_page_assignment');
