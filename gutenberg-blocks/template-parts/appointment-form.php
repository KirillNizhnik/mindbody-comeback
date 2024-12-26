<?php

if (is_admin() || (defined('REST_REQUEST') && REST_REQUEST)) {
    return;
}

$location_page = get_field('mindbody_locations_page', 'option') ?: home_url();

if (!isset($_GET['location']) || !isset($_GET['siteId']) || !get_post_id_by_mindbody_location_id_and_site_id($_GET['location'], $_GET['siteId'])) {
    wp_redirect($location_page);
    exit;
}

$location_id = intval($_GET['location']);
$site_id = intval($_GET['siteId']);
$id = get_post_id_by_mindbody_location_id_and_site_id($location_id, $site_id);
$login = get_field('stuff_login', $id);
$password = get_field('stuff_password', $id);
$api_key = get_field('mindbody_api_key', 'option');

if (empty($login) && empty($password)){
    wp_redirect($location_page);
}

$stuff_token = generate_mindbody_stuff_token($login, $password, $api_key, $site_id);
if (!$stuff_token){
    wp_redirect($location_page);
}


$title = get_the_title($id);
?>

<div class="mindbody-form">
    <img src="<?= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/logo-2.svg'; ?>" class="logo"
         alt="ISI Elite Training">
    <div class="mindbody-form-text">
        <div class="location">
            <p class="welcome">WELCOME TO ISI® ELITE TRAINING</p>
            <span class="location-title-after-welcome"><?= $title ?></span>
        </div>
            <div class="heading heading-appointment">GET ON THE WAITLIST!</div>
            <p class="step" style="color:#000000; ">Be the first to know about our Grand Opening updates, founding membership rates, free outdoor workouts, and complete membership details. Get on the list below!</p>
    </div>
    <form  data-site-id="<?= $site_id ?>" data-ajax-url="<?= admin_url('admin-ajax.php'); ?>" class="mindbody-form-form" id="locationForm" action="#" method="post" data-location-id="<?= $location_id ?>" data-redirect_url="<?= get_field('mindbody_appointment_calendar_page','option') ?>">
        <div class="form-groups">
            <div class="form-group">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" pattern="\+1\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}" name="phone" id="phone" placeholder="Phone (+1...)" required>            </div>
        </div>

        <button type="submit" id="submit-btn" class="submit-btn">CONTINUE</button>
    </form>
</div>

</div>

<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/form.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/step.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/toast.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/heading-appointment.css" type="text/css"/>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script src="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/js/form.js"></script>

