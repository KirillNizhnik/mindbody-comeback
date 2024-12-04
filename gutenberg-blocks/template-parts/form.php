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


if (isset($_GET['ads']) && $_GET['ads'] === 'true') {
    $ads= true;
    $service_id = get_field('package_dropdown', $id);

    $service_name = get_mindbody_service($stuff_token, $api_key, $site_id, $location_id, $service_id)['Name'];
    if (!$service_name && !$service_id){
        wp_redirect($location_page);
    }
}else{
    $ads= false;
}

$disclaimer = get_field('mindbody_disclaimer', $id);
if ($disclaimer === '1'){
    $disclaimer = '*The 7 days for $14 is open only to first-time visitors and local residents aged 18 years and older; however, minors aged 12 and above may participate if special conditions are met. Valid at participating facilities only. Voucher must be redeemed at location of purchase. Offer is non-refundable, non-transferable, and cannot be combined with other promotions.';
}elseif ($disclaimer === '2') {
    $disclaimer = '*The 2 for $20 is open only to first-time visitors and local residents aged 18 years and older; however, minors aged 12 and above may participate if special conditions are met. Valid at participating facilities only. Voucher must be redeemed at location of purchase. Offer is non-refundable, non-transferable, and cannot be combined with other promotions.';
}else{
    $disclaimer = '';
}

$title = get_the_title($id);
?>



<div class="mindbody-form">
    <img src="<?= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/isi-elite.svg'; ?>" class="logo"
         alt="ISI Elite Training">
    <div class="mindbody-form-text">
        <div class="location">
            <p class="welcome">WELCOME TO ISI® ELITE TRAINING</p>
                <span class="location-title-after-welcome"><?= $title ?></span>
        </div>
        <div class="address"><?= get_field('location_address', $id) . ', ' . get_field('location_city', $id) ?></div>
        <?php if ($ads){ ?>
            <div class="heading"><?= $service_name ?></div>
            <p class="step"><span class="step-green">Step 1</span> of 3</p>

        <?php }else{?>
            <div class="heading">BOOK YOUR FIRST VISIT ON US!</div>
<!--            <div class="subheading">Start training for life with the best 50 minute, coach-led, strength-based workout</div>-->
            <p class="step"><span class="step-green">Step 1</span> of 2</p>
        <?php } ?>
          </div>
    <form data-ads="<?= $ads ?>" data-site-id="<?= $site_id ?>" data-ajax-url="<?= admin_url('admin-ajax.php'); ?>" class="mindbody-form-form" id="locationForm" action="#" method="post" data-location-id="<?= $location_id ?>" data-redirect_url="<?= get_field('mindbody_calendar_page','option') ?>">
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
<div id="disclaimer" style="display: none;" data-content='<?= $disclaimer ?>' class="disclaimer">

</div>

<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/form.css " type="text/css"/>
<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/step.css " type="text/css"/>
<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/toast.css " type="text/css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script src="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/js/form.js"></script>

<?php if ($ads){ ?>
    <script src="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/js/disclaimer.js"></script>
<?php } ?>


