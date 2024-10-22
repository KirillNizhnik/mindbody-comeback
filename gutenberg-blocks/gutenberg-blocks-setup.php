<?php

function mindbody_block_category( $categories, $post ): array
{
    return array_merge(
        $categories,
        array(
            array(
                'slug'  => 'mindbody-blocks',
                'title' => __( 'Mindbody Blocks', 'mindbody' ),
                'icon'  => 'admin-site-alt3',
            ),


        )
    );
}
add_filter( 'block_categories_all', 'mindbody_block_category', 10, 2 );

if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
        'name'              => 'map_block',
        'title'             => __('Mind Body Locations'),
        'description'       => __('A custom block for displaying a map with locations.'),
        'render_template'   => plugin_dir_path(__FILE__) . 'template-parts/locations.php',
        'category'          => 'mindbody-blocks',
        'icon'              => 'location-alt',
        'keywords'          => array( 'map', 'location' ),
    ));
    acf_register_block_type(array(
        'name'              => 'form_block',
        'title'             => __('Mind Body Form'),
        'description'       => __('A custom block for displaying a form.'),
        'render_template'   => plugin_dir_path(__FILE__) . 'template-parts/form.php',
        'category'          => 'mindbody-blocks',
        'icon'              => 'feedback',
        'keywords'          => array('form', 'contact'),
    ));

    acf_register_block_type(array(
        'name'              => 'calendar_block',
        'title'             => __('Mind Body Calendar'),
        'description'       => __('A custom block for displaying a calendar.'),
        'render_template'   => plugin_dir_path(__FILE__) . 'template-parts/calendar.php',
        'category'          => 'mindbody-blocks',
        'icon'              => 'calendar-alt',
        'keywords'          => array('calendar', 'schedule'),
    ));

    acf_register_block_type(array(
        'name'              => 'payment_block',
        'title'             => __('Mind Body Payment'),
        'description'       => __('A custom block for handling payments.'),
        'render_template'   => plugin_dir_path(__FILE__) . 'template-parts/payment.php',
        'category'          => 'mindbody-blocks',
        'icon'              => 'money',
        'keywords'          => array('payment', 'checkout'),
    ));

    acf_register_block_type(array(
        'name'              => 'success_block',
        'title'             => __('Mind Body Success'),
        'description'       => __('A custom block for displaying a success message after payment.'),
        'render_template'   => plugin_dir_path(__FILE__) . 'template-parts/success.php',
        'category'          => 'mindbody-blocks',
        'icon'              => 'smiley',
        'keywords'          => array('success', 'confirmation'),
    ));
}
