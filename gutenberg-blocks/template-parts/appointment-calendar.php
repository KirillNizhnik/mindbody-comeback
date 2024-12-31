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

if (empty($login) && empty($password)) {
    wp_redirect($location_page);
}

$stuff_token = generate_mindbody_stuff_token($login, $password, $api_key, $site_id);
if (!$stuff_token) {
    wp_redirect($location_page);
}

$stuff_token = generate_mindbody_stuff_token($login, $password, $api_key, $site_id);
if (!$stuff_token) {
    wp_redirect($location_page);
}

$form_page = get_field('mindbody_appointment_form_page', 'option') ?: home_url();

if (!isset($_GET['first_name']) || !isset($_GET['last_name']) || !isset($_GET['email']) || !isset($_GET['phone'])) {
    wp_redirect($form_page);
    exit;
}

$first_name = sanitize_text_field(trim($_GET['first_name']));
$last_name = sanitize_text_field(trim($_GET['last_name']));
$email = sanitize_email(trim($_GET['email']));
$phone = sanitize_text_field(trim($_GET['phone']));
$phone = preg_replace('/[^\d\+]/', '', $phone);


if (!is_email($email) || empty($phone)) {
    wp_redirect($form_page);
    exit;
}

if (empty($first_name) || empty($last_name) || empty($email)) {
    wp_redirect($form_page);
    exit;
}

$user_info = get_mindbody_user_by_email($email, $stuff_token, $api_key, $site_id);
if ($user_info === 'User not found') {
    wp_redirect($form_page);
}else{
    $user_id = $user_info['Id'];
}


$title = get_the_title($id);

?>
<div class="appointment-calendar">
    <div class="appointment-calendar-logo">
        <img src="<?= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/logo-2.svg'; ?>"
             class="appointment-calendar-logo logo"
             alt="ISI Elite Training">
    </div>
    <div class="mindbody-calendar-text">
        <p class="congrats">
            <span class="congrats-text">
                CONGRATS,
            </span>
            YOU'RE IN!
        </p>
        <p class="congrats-long-text">
            Select a time below to speak to our team on how you can gain access to our limited prelaunch memberships and be the first off the waitlist when we release our next pricing tier!
        </p>
    </div>
    <div data-user-id="<?= $user_id ?>" data-location-id="<?= $location_id ?>" data-site-id="<?= $site_id ?>"
         data-ajax-url="<?= admin_url('admin-ajax.php'); ?>" data-redirect-url="<?= get_field('mindbody_appointment_success_page','option') ?> " id="appointment-calendar-form"
         class="appointment-calendar-form">
        <div id="appointment-type-select" class="appointment-type-select">
        </div>
        <div id="appointment-date-select" class="appointment-date-select">
        </div>
        <div id="appointment-time-select" class="appointment-time-select">
        </div>
        <div id="appointment-continue-button" class="appointment-continue-button">
        </div>
        <div id="loader" class="loader"></div>
    </div>

</div>
<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/appointment-calendar.css"
      type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/js/appointment-calendar.js"></script>


<?php ?>

