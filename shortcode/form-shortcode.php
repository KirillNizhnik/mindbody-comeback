<?php
function mindbody_form_shortcode($atts) {
    $atts = shortcode_atts(
        [
            'site_id' => '',
            'location_id' => ''
        ],
        $atts
    );

    $site_id = intval($atts['site_id']);
    $location_id = intval($atts['location_id']);

    if (empty($site_id) || empty($location_id)) {
        return '<p>Sorry, the free training is temporarily unavailable.</p>';
    }


    $id = get_post_id_by_mindbody_location_id_and_site_id($location_id, $site_id);
    if (!$id) {
        return '<p>Sorry, the free training is temporarily unavailable.</p>';
    }

    $login = get_field('stuff_login', $id);
    $password = get_field('stuff_password', $id);
    $api_key = get_field('mindbody_api_key', 'option');

    if (empty($login) || empty($password)) {
        return '<p>Sorry, the free training is temporarily unavailable.</p>';
    }

    $stuff_token = generate_mindbody_stuff_token($login, $password, $api_key, $site_id);
    if (!$stuff_token) {
        return '<p>Sorry, the free training is temporarily unavailable.</p>';
    }

    ob_start();
    ?>
    <div class="mindbody-form">
        <form
            data-site-id="<?= esc_attr($site_id); ?>"
            data-ajax-url="<?= esc_url(admin_url('admin-ajax.php')); ?>"
            class="mindbody-form-form"
            id="locationForm"
            action="#"
            method="post"
            data-location-id="<?= esc_attr($location_id); ?>"
            data-redirect_url="<?= esc_url(get_field('mindbody_calendar_page', 'option')); ?>">
            <div class="form-groups">
                <div class="form-group">
                    <input type="text" name="first_name" placeholder="First Name" required>
                    <input type="text" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="tel" pattern="\+1\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}" name="phone" id="phone" placeholder="Phone (+1...)" required>
                </div>
            </div>
            <button type="submit" id="submit-btn" class="submit-btn">CONTINUE</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <link rel="stylesheet" href="<?= esc_url(plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/css/form.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?= esc_url(plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/css/toast.css'); ?>" type="text/css" />
    <script src="<?= esc_url(plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/js/form.js'); ?>"></script>
    <?php

    return ob_get_clean();
}

add_shortcode('mindbody_form', 'mindbody_form_shortcode');