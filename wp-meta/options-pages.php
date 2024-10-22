<?php

function mindbody_register_update_locations_page(): void
{
    add_menu_page(
        'Update Locations',
        'Update Locations',
        'manage_options',
        'update-locations',
        'mindbody_update_locations_page',
        'dashicons-update',
        60
    );
}
add_action('admin_menu', 'mindbody_register_update_locations_page');

