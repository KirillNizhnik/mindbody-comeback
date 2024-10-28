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




$location_id = intval($_GET['location']);
$id = get_post_id_by_mindbody_location_id($location_id);


$training_redirect_url = get_field('mindbody_calendar_page', 'option') . '?location=' . $location_id . '&first_name=' . $first_name . '&last_name=' . $last_name . '&email=' . $email . '&phone=' . $phone;
if (!isset($_GET['class_id']) || !is_numeric($_GET['class_id'])) {
    wp_redirect($training_redirect_url);
    exit;
}


$class_id = intval($_GET['class_id']);
$start_datetime = $_GET['start_time'] ?? null;
$end_datetime = $_GET['end_time'] ?? null;

if (!$start_datetime || !$end_datetime) {
    wp_redirect($training_redirect_url);
    exit;
}


$class_id = intval($_GET['class_id']);
$class = get_mindbody_classes_by_location($location_id, $start_datetime, $end_datetime, $class_id);



if (!empty($class[0])) {
    $class_info = $class[0];

    $location_name = $class_info['Location']['Name'] ?? 'Unknown Location';

    $address_line_1 = $class_info['Location']['Address'] ?? 'Unknown Address';
    $address_line_2 = $class_info['Location']['Address2'] ?? '';
    $full_address = $address_line_1;
    if (!empty($address_line_2)) {
        $full_address .= ', ' . $address_line_2;
    }

    $start_datetime = date('l, F j', strtotime($class_info['StartDateTime']));
    $start_time_formatted = date('g:i A', strtotime($class_info['StartDateTime']));
    $end_time_formatted = date('g:i A', strtotime($class_info['EndDateTime']));
    $start_date_formatted = date('l, F j', strtotime($class_info['StartDateTime']));

    $class_name = $class_info['ClassDescription']['Name'] ?? 'Class Name Unknown';
    $instructor_name = $class_info['Staff']['DisplayName'] ?? 'Instructor Unknown';
    $training_id = $class_info['Id'];

}

$staff_token = get_mindbody_token();
if (is_wp_error($staff_token)) {
    wp_redirect($training_redirect_url);
    exit;
}

$staff_token = $staff_token['AccessToken'];


$user_info = get_mindbody_user_by_email($email);

if ($user_info === 'User not found') {
    $user_info = register_mindbody_user($first_name, $last_name, $email, $phone);
    $user_id = $user_info["Client"]["UniqueId"];
}else{
    $user_id = $user_info['Id'];
}

echo '<pre>';
var_dump($user_id);
echo '</pre>';
//var_dump($user_info);

$services = get_mindbody_services($training_id, $staff_token);

//var_dump($services);
//echo '</pre>';
//var_dump($class_info);
?>

<div  class="mindbody-payment">
    <img src="<?= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/isi-elite.svg'; ?>" class="logo"
         alt="ISI Elite Training">
    <div class="mindbody-payment-text">
        <div class="location"><?php echo htmlspecialchars($location_name, ENT_QUOTES, 'UTF-8'); ?></div>
        <div class="address"><?php echo htmlspecialchars($full_address, ENT_QUOTES, 'UTF-8'); ?></div>
    </div>
    <div class="mindbody-payment-info">
        <div class="payment-discount">
            2 for $20
        </div>
        <div class="payment-time">
            <div class="class-name"><?php echo $class_name ?></div>
            <div class="date"><?php echo $start_date_formatted; ?></div>
            <div class="time">at <?php echo $start_time_formatted . ' - ' . $end_time_formatted; ?></div>
            <div class="change-time"><a href="<?= $training_redirect_url ?>">Change selected time</a>
            </div>
        </div>
    </div>

    <div class="mindbody-payment-description">
        To finish booking your first session, complete the payment below and the appropriate credits will be added to your account.
    </div>
    <div class="payment-method-info">
        <p class="payment-method-info-title">
            Please enter your credit card information below.
        </p>
        <div class="card-pictures">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="24" viewBox="0 0 35 24" fill="none">
                <rect x="0.5" y="0.5" width="34" height="23" rx="5.5" fill="white" stroke="#D9D9D9"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6253 16.2582H8.50494L6.91495 10.1924C6.83949 9.91334 6.67925 9.66666 6.44354 9.5504C5.85531 9.25823 5.20712 9.0257 4.5 8.90843V8.67489H7.91567C8.38708 8.67489 8.74064 9.0257 8.79957 9.43313L9.62454 13.8086L11.7438 8.67489H13.8052L10.6253 16.2582ZM14.9838 16.2582H12.9813L14.6302 8.67489H16.6327L14.9838 16.2582ZM19.2234 10.7757C19.2823 10.3673 19.6358 10.1337 20.0483 10.1337C20.6965 10.0751 21.4026 10.1924 21.9919 10.4835L22.3454 8.85081C21.7562 8.61727 21.108 8.5 20.5197 8.5C18.5762 8.5 17.162 9.55041 17.162 11.0082C17.162 12.1173 18.1637 12.6996 18.8708 13.0504C19.6358 13.4002 19.9305 13.6338 19.8716 13.9835C19.8716 14.5082 19.2823 14.7418 18.6941 14.7418C17.9869 14.7418 17.2798 14.5669 16.6327 14.2747L16.2791 15.9085C16.9862 16.1996 17.7512 16.3169 18.4584 16.3169C20.6376 16.3745 21.9919 15.3251 21.9919 13.75C21.9919 11.7665 19.2234 11.6502 19.2234 10.7757ZM29 16.2582L27.41 8.67489H25.7022C25.3486 8.67489 24.9951 8.90843 24.8772 9.25823L21.933 16.2582H23.9943L24.4058 15.1502H26.9386L27.1743 16.2582H29ZM25.9968 10.7171L26.585 13.5751H24.9361L25.9968 10.7171Z" fill="#172B85"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="24" viewBox="0 0 35 24" fill="none">
                <rect x="0.5" y="0.5" width="34" height="23" rx="5.5" fill="#1F72CD" stroke="#D9D9D9"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.27467 8.5L3 15.7467H6.92024L7.40624 14.5913H8.51712L9.00311 15.7467H13.3182V14.8649L13.7027 15.7467H15.9348L16.3193 14.8462V15.7467H25.2935L26.3847 14.6213L27.4065 15.7467L32.0158 15.7561L28.7308 12.1436L32.0158 8.5H27.478L26.4158 9.60463L25.4261 8.5H15.6634L14.8251 10.3704L13.9671 8.5H10.055V9.35186L9.61981 8.5H6.27467ZM19.6758 9.52905H24.8292L26.4054 11.2316L28.0324 9.52905H29.6086L27.2137 12.1426L29.6086 14.726H27.9609L26.3847 13.0036L24.7494 14.726H19.6758V9.52905ZM20.9484 11.555V10.6057V10.6048H24.164L25.5671 12.1229L24.1018 13.6493H20.9484V12.613H23.7598V11.555H20.9484ZM7.03322 9.52905H8.94413L11.1162 14.4431V9.52905H13.2095L14.8872 13.0524L16.4334 9.52905H18.5163V14.7291H17.2489L17.2386 10.6544L15.3908 14.7291H14.2571L12.3991 10.6544V14.7291H9.79178L9.29749 13.5633H6.62701L6.13374 14.728H4.73679L7.03322 9.52905ZM7.08299 12.4856L7.96281 10.4089L8.8416 12.4856H7.08299Z" fill="white"/>
            </svg>
            <svg width="32" height="15" viewBox="0 0 32 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Discover">
                    <path id="Stripe" d="M11.7344 14.5L31.4844 8.75V9.5C31.4844 12.2614 29.2458 14.5 26.4844 14.5H11.7344Z" fill="#FD6020"/>
                    <path id="DISC-VER" fill-rule="evenodd" clip-rule="evenodd" d="M27.7353 0.610855C28.8219 0.610855 29.4195 1.0944 29.4195 2.00776C29.4738 2.70621 28.9849 3.2972 28.333 3.40466L29.7998 5.39255H28.6589L27.4094 3.45838H27.3007V5.39255H26.3772V0.610855H27.7353ZM27.3007 2.81365H27.5724C28.17 2.81365 28.4416 2.54501 28.4416 2.06147C28.4416 1.63166 28.17 1.36302 27.5724 1.36302H27.3007V2.81365ZM23.1718 5.39255H25.7795V4.58664H24.0954V3.29719H25.7252V2.49129H24.0954V1.41675H25.7795V0.610847H23.1718V5.39255V5.39255ZM20.4554 3.83446L19.2059 0.610847H18.228L20.2381 5.5H20.7271L22.7372 0.610847H21.7593L20.4554 3.83446V3.83446ZM9.42688 3.02856C9.42688 4.37173 10.5134 5.5 11.8716 5.5C12.3062 5.5 12.6865 5.39255 13.0668 5.23137V4.15683C12.7952 4.47919 12.4149 4.6941 11.9803 4.6941C11.111 4.6941 10.4048 4.04937 10.4048 3.18974V3.08229C10.3504 2.22266 11.0567 1.47048 11.926 1.41675C12.3606 1.41675 12.7952 1.63166 13.0668 1.95402V0.879482C12.7409 0.664574 12.3062 0.610847 11.926 0.610847C10.5134 0.503393 9.42688 1.63166 9.42688 3.02856V3.02856ZM7.74271 2.43756C7.19944 2.22266 7.03645 2.1152 7.03645 1.84657C7.09078 1.52421 7.36242 1.25557 7.68839 1.3093C7.96003 1.3093 8.23166 1.47048 8.44898 1.68539L8.93793 1.04066C8.55763 0.718302 8.06868 0.503394 7.57973 0.503394C6.81914 0.449667 6.16721 1.04066 6.11288 1.79284V1.84657C6.11288 2.49129 6.38452 2.86738 7.25376 3.13601C7.47108 3.18974 7.68839 3.2972 7.9057 3.40465C8.06868 3.5121 8.17734 3.67328 8.17734 3.88819C8.17734 4.26428 7.85137 4.58664 7.5254 4.58664H7.47108C7.03645 4.58664 6.65616 4.31801 6.49317 3.94192L5.89557 4.53292C6.22154 5.12391 6.87347 5.44627 7.5254 5.44627C8.39465 5.5 9.10091 4.85528 9.15524 3.99565V3.83446C9.10091 3.18974 8.82927 2.86738 7.74271 2.43756V2.43756ZM4.5917 5.39255H5.51527V0.610847H4.5917V5.39255V5.39255ZM0.299805 0.610855H1.658H1.92964C3.23351 0.664582 4.26574 1.73912 4.21141 3.02857C4.21141 3.72702 3.88544 4.37174 3.34216 4.85528C2.85321 5.23137 2.25561 5.44628 1.658 5.39255H0.299805V0.610855ZM1.49501 4.58665C1.92964 4.64037 2.41859 4.47919 2.74455 4.21056C3.07052 3.8882 3.2335 3.45838 3.2335 2.97484C3.2335 2.54502 3.07052 2.11521 2.74455 1.79285C2.41859 1.52421 1.92964 1.36303 1.49501 1.41676H1.22337V4.58665H1.49501Z" fill="black"/>
                    <path id="O" fill-rule="evenodd" clip-rule="evenodd" d="M15.8379 0.5C14.4798 0.5 13.3389 1.57454 13.3389 2.97144C13.3389 4.31461 14.4254 5.44288 15.8379 5.49661C17.2505 5.55033 18.337 4.42207 18.3914 3.02517C18.337 1.62827 17.2505 0.5 15.8379 0.5V0.5Z" fill="#FD6020"/>
                </g>
            </svg>
        </div>
    </div>

    <div class="mindbody-payment-form">
        <form action="" method="post">
            <label for="cc-number"></label><input placeholder="Credit Card Number" type="text" id="cc-number" name="cc-number" required>

            <div class="card-details">
                <div class="card-expiration">
                    <label for="cc-expiration"></label>
                    <input placeholder="MM / YY" type="text" id="cc-expiration" name="cc-expiration" required>
                </div>
                <div class="card-cvv">
                    <label for="cc-cvv"></label>
                    <input placeholder="CVV" type="text" id="cc-cvv" name="cc-cvv" required>
                </div>
            </div>

            <label for="cc-name"></label>
            <input placeholder="Name on Credit Card" type="text" id="cc-name" name="cc-name" required>

            <div class="total-and-submit">
                <div class="total">
                    <strong>Total:</strong> $25.00
                </div>

                <button type="submit" class="button book-now">Book Now</button>
            </div>
             </form>
    </div>
</div>




<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/payment.css"
      type="text/css"/>
