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

if (isset($_GET['ads']) && $_GET['ads'] === 'true') {
    $ads=true;
    $service_id= get_field('package_dropdown', $id);
    if (!$service_id){
        $service_id= get_field('mindbody_source_name', 'option');
    }

    if ($service_id === '102232'){
        $service_name = '2 Sessions for $20';
    }elseif ($service_id === '102233'){
        $service_name = '7 Days for $14';
    }else{
        $service_name ='Base package';
    }

} else {
    $ads=false;
}

?>



<div class="mindbody-form">
    <img src="<?= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/isi-elite.svg'; ?>" class="logo"
         alt="ISI Elite Training">
    <div class="mindbody-form-text">
        <div class="location">Location Name</div>
        <div class="address"><?= get_field('location_address', $id) . ', ' . get_field('location_city', $id) ?></div>
        <?php if ($ads){ ?>
            <div class="heading"><?= $service_name ?></div>

        <?php }else{?>
            <div class="heading">BOOK YOUR FIRST VISIT FOR FREE</div>
            <div class="subheading">Start training for life with the best 50 minute, coach-led, strength-based workout</div>
        <?php } ?>
          </div>
    <form data-ads="<?= $ads ?>" data-ajax-url="<?= admin_url('admin-ajax.php'); ?>" class="mindbody-form-form" id="locationForm" action="#" method="post" data-location-id="<?= $location_id ?>" data-redirect_url="<?= get_field('mindbody_calendar_page','option') ?>">
        <div class="form-groups">
            <div class="form-group">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
                <input type="tel" pattern="\+1\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}" name="phone" id="phone" placeholder="Phone (+1...)" required>            </div>
        </div>

        <button type="submit" class="submit-btn">CONTINUE</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/form.css " type="text/css"/>
<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/toast.css " type="text/css"/>

<script src="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/js/form.js"></script>


