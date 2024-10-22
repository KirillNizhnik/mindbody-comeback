<?php

function register_acf_options_pages(): void {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => 'Mindbody Settings',
            'menu_title'    => 'Mindbody Settings',
            'menu_slug'     => 'mindbody-settings',
            'capability'    => 'manage_options',
            'redirect'      => false,
            'icon_url'      => 'dashicons-admin-settings',
            'position'      => 58
        ));
    }
}

add_action('acf/init', 'register_acf_options_pages');





