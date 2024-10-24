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

$redirect_url = get_field('mindbody_form_page', 'option') . '?location=' . $location_id;

if (!isset($_GET['first_name']) || !isset($_GET['last_name']) || !isset($_GET['email']) || !isset($_GET['phone'])) {
    wp_redirect($redirect_url);
    exit;
}

$first_name = sanitize_text_field(trim($_GET['first_name']));
$last_name = sanitize_text_field(trim($_GET['last_name']));
$email = sanitize_email(trim($_GET['email']));
$phone = sanitize_text_field(trim($_GET['phone']));

$phone = preg_replace('/[^\d\+]/', '', $phone);

if (!is_email($email) || empty($phone)) {
    wp_redirect($redirect_url);
    exit;
}

if (empty($first_name) || empty($last_name) || empty($email)) {
    wp_redirect($redirect_url);
    exit;
}


$location_id = intval($_GET['location']);
$id = get_post_id_by_mindbody_location_id($location_id);



?>

<div  class="mindbody-calendar">
    <img src="<?= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/isi-elite.svg'; ?>" class="logo"
         alt="ISI Elite Training">
    <div class="mindbody-calendar-text">
        <div class="location">Location Name</div>
        <div class="address"><?= get_field('location_address', $id) . ', ' . get_field('location_city', $id) . ', ' . get_field('location_state', $id) ?></div>
    </div>
    <div class="mindbody-calendar-container">
        <h2 class="mindbody-calendar-title">
            Choose your day...
        </h2>
        <div class="mindbody-calendar-date-wrapper">
            <div id="prev-btn" class="slider-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M2.39975 11.9996L1.83336 12.566L1.26855 11.9996L1.83335 11.4332L2.39975 11.9996ZM2.96615 11.4332L9.36615 17.8332L8.23335 18.966L1.83336 12.566L2.96615 11.4332ZM1.83335 11.4332L8.23335 5.0332L9.36615 6.166L2.96615 12.566L1.83335 11.4332ZM2.39975 11.1996L22.3998 11.1996L22.3998 12.7996L2.39975 12.7996L2.39975 11.1996Z"
                          fill="#181818"/>
                </svg>
            </div>
            <div class="mindbody-calendar-date" id="calendar-date">
                <?php
                $day_names = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

                $today = strtotime('today');
                $current_day_number = date('d', $today);
                $days_until_next_sunday = 15;

                for ($i = 0; $i <= $days_until_next_sunday; $i++) {
                    $current_date = strtotime("+$i day", $today);
                    $day_name = $day_names[date('w', $current_date)];
                    $day_number = date('d', $current_date);
                    $full_date = date('l, F j', $current_date);

                    $highlight_class = ($day_number == $current_day_number) ? 'today active-day' : '';

                    $formatted_date = date('Y-m-d', $current_date);
                    $day_number = date('d', $current_date);

                    echo '<div>';
                    echo '<div class="calendar-item ' . $highlight_class . '" data-date="' . $formatted_date . '" data-day="' . $day_name . '" data-title="' . $full_date . '">';
                    echo '<div class="calendar-item-day">' . $day_name . '</div>';
                    echo '<div class="calendar-item-date">' . date('m/d', $current_date) . '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>

            </div>
            <div id="next-btn" class="slider-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M21.6002 11.9996L22.1666 12.566L22.7314 11.9996L22.1666 11.4332L21.6002 11.9996ZM21.0338 11.4332L14.6338 17.8332L15.7666 18.966L22.1666 12.566L21.0338 11.4332ZM22.1666 11.4332L15.7666 5.0332L14.6338 6.166L21.0338 12.566L22.1666 11.4332ZM21.6002 11.1996L1.60025 11.1996L1.60025 12.7996L21.6002 12.7996L21.6002 11.1996Z"
                          fill="#181818"/>
                </svg>
            </div>
        </div>
        <h2 class="mindbody-calendar-title">What time on <span id="picked-date"> <?= date('l, F j'); ?></span></h2>
        <?php
        $start_date = date('Y-m-d') . 'T00:00:00';
        $end_date = date('Y-m-d') . 'T23:59:59';
        $classes = get_mindbody_classes_by_location($location_id, $start_date, $end_date);
        ?>
        <div data-location-id="<?= $location_id?>"  data-ajax-url="<?= admin_url('admin-ajax.php') ?>" id="calendar-container" class="mindbody-calendar-time-wrapper">
            <?php
            if (!empty($classes) && is_array($classes)) {
                ?>
                <div class="mindbody-calendar-time">
                    <?php
                    $counter = 0;
                    foreach ($classes as $class) {
                        $start_time = date('g:i A', strtotime($class['StartDateTime']));
                        $start_datetime = $class['StartDateTime'];
                        $end_datetime = $class['EndDateTime'];
                        if (isset($class['ClassDescription']['Id']) && isset($class['ClassDescription']['Name'])) {
                            $class_description = $class['ClassDescription']['Id'];
                            $class_name = $class['ClassDescription']['Name'];
                        } else {
                            continue;
                        }
                        if (isset($class['ClassScheduleId'])){
                            $scheduleId = $class['ClassScheduleId'];
                        } else{
                            continue;
                        }
                        if (!$class['IsAvailable']) {
                            continue;
                        }

                        $active_class = ($counter === 0) ? 'active' : '';

                        echo '<div class="time-item ' . $active_class . '" ' .
                            'data-class-id="' . $scheduleId . '" ' .
                            'data-description-id="' . $class_description . '" ' .
                            'data-start-datetime="' . htmlspecialchars($start_datetime, ENT_QUOTES, 'UTF-8') . '" ' .
                            'data-end-datetime="' . htmlspecialchars($end_datetime, ENT_QUOTES, 'UTF-8') . '" ' .
                            'data-class-name="' . htmlspecialchars($class_name, ENT_QUOTES, 'UTF-8') . '">' .
                            $start_time .
                            '</div>';

                        $counter++;
                    }
                    ?>
                </div>
                <?php
                if ($counter === 0) {
                    echo '<p class="info-not-available">No classes available for the selected date.</p>';
                }
            } else {
                echo '<p class="info-not-available">No classes available for the selected date.</p>';
            }
            ?>
        </div>
    </div>
    <button id="submit-training" class="submit-btn-calendar">CONTINUE</button>
    <div data-redirect-url="<?= get_field('mindbody_payment_page','option') ?>" data-first-name="<?= $first_name ?>" data-last-name="<?= $last_name ?>" data-email="<?= $email ?>" data-phone="<?= $phone ?>" data-location-id="<?= $location_id ?>" id="info-calendar">
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    jQuery(document).ready(function ($) {
        $('#calendar-date').slick({
            infinite: false,
            slidesToShow: 7,
            swipeToSlide: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });

        $('#prev-btn').click(function () {
            $('#calendar-date').slick('slickPrev');
        });

        $('#next-btn').click(function () {
            $('#calendar-date').slick('slickNext');
        });
    });
</script>

<style>
    #calendar-date .slick-slide {
        margin: 0 20px;
    }

    #calendar-date .slick-list {
        margin: 0 -20px;
    }
</style>
<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/calendar.css"
      type="text/css"/>
<script src="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/js/calendar.js"></script>




