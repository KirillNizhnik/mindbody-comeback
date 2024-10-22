<?php
/**
 * Plugin Name: Mindbody Integration
 * Description: A plugin to integrate Mindbody API with WordPress. By ComeBack
 * Version: 1.0.0
 * Author: COME BACK AGENCY
 * License: COME BACK AGENCY
 *
 */

if (!defined('ABSPATH')) {
    exit;
}
if ( ! defined( 'MINDBODY_PLUGIN_FILE' ) ) {
    define( 'MINDBODY_PLUGIN_FILE', __FILE__ );
}

require_once plugin_dir_path(__FILE__) . '/post-types/locations.php';
require_once plugin_dir_path(__FILE__) . '/validation-activate/acf-validation.php';


require_once plugin_dir_path(__FILE__) . '/acf-meta/options-pages.php';
require_once plugin_dir_path(__FILE__) . '/acf-meta/options-fields.php';
require_once plugin_dir_path(__FILE__) . '/acf-meta/location-fields.php';

require_once plugin_dir_path(__FILE__) . '/gutenberg-blocks/gutenberg-blocks-setup.php';

require_once plugin_dir_path(__FILE__) . '/wp-meta/options-pages.php';
require_once plugin_dir_path(__FILE__) . '/wp-meta/options-render.php';


//core
require_once plugin_dir_path(__FILE__) . '/core/util.php';
require_once plugin_dir_path(__FILE__) . '/core/ajax.php';
require_once plugin_dir_path(__FILE__) . '/core/mindbody/locations.php';
require_once plugin_dir_path(__FILE__) . '/core/mindbody/classes.php';
require_once plugin_dir_path(__FILE__) . '/core/mindbody/token.php';
require_once plugin_dir_path(__FILE__) . '/core/mindbody/user.php';
require_once plugin_dir_path(__FILE__) . '/core/mindbody/service.php';

require_once plugin_dir_path(__FILE__) . '/core/store-rocket/locations.php';
require_once plugin_dir_path(__FILE__) . '/core/locations-post-type/locations-post-type.php';



function mindbody_register_template($post_templates, $wp_theme, $post, $post_type) {
    $post_templates['mindbody-template.php'] = __('Mindbody Template', 'mindbody');
    return $post_templates;
}
add_filter('theme_page_templates', 'mindbody_register_template', 10, 4);
function mindbody_load_template($template) {
    if (get_page_template_slug() == 'mindbody-template.php') {
        $plugin_template = plugin_dir_path(__FILE__) . 'templates/mindbody-template.php';
        if (file_exists($plugin_template)) {
            return $plugin_template;
        }
    }
    return $template;
}

add_filter('template_include', 'mindbody_load_template');






