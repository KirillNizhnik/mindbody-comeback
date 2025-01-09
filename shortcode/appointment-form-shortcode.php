<?php

function mindbody_appointment_form_shortcode($atts) {
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
        return '<p>Opss, try later</p>';
    }


    $id = get_post_id_by_mindbody_location_id_and_site_id($location_id, $site_id);
    if (!$id) {
        return '<p>Opss, try later</p>';
    }

    $login = get_field('stuff_login', $id);
    $password = get_field('stuff_password', $id);
    $api_key = get_field('mindbody_api_key', 'option');

    if (empty($login) || empty($password)) {
        return '<p>Opss, try later</p>';
    }

    $stuff_token = generate_mindbody_stuff_token($login, $password, $api_key, $site_id);
    if (!$stuff_token) {
        return '<p>Opss, try later</p>';
    }
    $title = get_the_title($id);

    ob_start();
    ?>
    <div class="mindbody-form">
<!--        <img src="--><?php //= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/logo-2.svg'; ?><!--" class="logo"-->
<!--             alt="ISI Elite Training">-->
<!--        <div class="mindbody-form-text">-->
<!--            <div class="location">-->
<!--                <p class="welcome">WELCOME TO ISI® ELITE TRAINING</p>-->
<!--                <span class="location-title-after-welcome">--><?php //= $title ?><!--</span>-->
<!--            </div>-->
<!--            <div class="heading heading-appointment">GET ON THE WAITLIST!</div>-->
<!--            <p class="step" style="color:#000000; ">Be the first to know about our Grand Opening updates, founding membership rates, free outdoor workouts, and complete membership details. Get on the list below!</p>-->
<!--        </div>-->
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

    <?php

    return ob_get_clean();
}

add_shortcode('mindbody_appointment_form', 'mindbody_appointment_form_shortcode');