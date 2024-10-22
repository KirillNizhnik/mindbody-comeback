<?php



function check_acf_pro_active(): void {
    if ( ! class_exists('acf_pro') && current_user_can('activate_plugins') ) {
        add_action('admin_notices', 'acf_pro_missing_notice');

        if (is_admin()) {
            deactivate_plugins(plugin_basename(MINDBODY_PLUGIN_FILE));
        }
    }
}
add_action('admin_init', 'check_acf_pro_active');

function acf_pro_missing_notice(): void {
    ?>
    <div class="notice notice-error">
        <p><?php _e('Mindbody Integration: This plugin requires Advanced Custom Fields Pro to be installed and active.', 'mindbody'); ?></p>
    </div>
    <?php
}