<?php

if (is_admin() || (defined('REST_REQUEST') && REST_REQUEST)) {
    return;
}

if (!isset($_GET['location'])) {
    $location_page = get_field('mindbody_locations_page', 'option');

    if ($location_page) {
        wp_redirect($location_page);
        exit;
    }
} else {
    $location_id = intval($_GET['location']);
    if (!does_post_exist_by_mindbody_location_id($location_id)) {
        $location_page = get_field('mindbody_locations_page', 'option');
        if ($location_page) {
            wp_redirect($location_page);
            exit;
        }
    }
}
$location_id = intval($_GET['location']);
$id = get_post_id_by_mindbody_location_id($location_id);
?>


<div class="mindbody-form">
    <img src="<?= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/isi-elite.svg'; ?>" class="logo"
         alt="ISI Elite Training">
    <div class="mindbody-form-text">
        <div class="location">Location Name</div>
        <div class="address"><?= get_field('location_address', $id) . ', ' . get_field('location_city', $id) . ', ' . get_field('location_state', $id) ?></div>
        <div class="heading">BOOK YOUR FIRST VISIT FOR FREE</div>
        <div class="subheading">Start training for life with the best 50 minute, coach-led, strength-based workout</div>
    </div>
    <form class="mindbody-form-form" id="locationForm" action="#" method="post" data-location-id="<?= $location_id ?>" data-redirect_url="<?= get_field('mindbody_calendar_page','option') ?>">
        <div class="form-groups">
            <div class="form-group">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" name="phone" placeholder="Phone" required>
            </div>
        </div>

        <button type="submit" class="submit-btn">CONTINUE</button>
    </form>
</div>
<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/form.css " type="text/css"/>
<script src="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/js/form.js"></script>


