<?php


$start_time = "20240101T120000Z";
$end_time = "20240101T130000Z";
$training_name = "Test Training Session";
$location = "Gym, 123 Example St, New York";
?>


<div class="mindbody-success">
    <img src="<?= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/isi-elite.svg'; ?>" class="logo"
         alt="ISI Elite Training">
    <div class="mindbody-heading">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
            <mask id="mask0_102_433" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1" width="38"
                  height="38">
                <path d="M19.9997 36.6666C22.1888 36.6693 24.3568 36.2394 26.3793 35.4017C28.4017 34.5639 30.2387 33.3348 31.7847 31.7849C33.3346 30.239 34.5637 28.402 35.4014 26.3795C36.2392 24.3571 36.6691 22.189 36.6664 19.9999C36.6691 17.8108 36.2392 15.6428 35.4014 13.6203C34.5637 11.5979 33.3346 9.76091 31.7847 8.21493C30.2387 6.66507 28.4017 5.43595 26.3793 4.59819C24.3568 3.76044 22.1888 3.33057 19.9997 3.33326C17.8106 3.33057 15.6425 3.76044 13.6201 4.59819C11.5976 5.43595 9.76066 6.66507 8.21469 8.21493C6.66482 9.76091 5.4357 11.5979 4.59795 13.6203C3.7602 15.6428 3.33032 17.8108 3.33302 19.9999C3.33032 22.189 3.7602 24.3571 4.59795 26.3795C5.4357 28.402 6.66482 30.239 8.21469 31.7849C9.76066 33.3348 11.5976 34.5639 13.6201 35.4017C15.6425 36.2394 17.8106 36.6693 19.9997 36.6666Z"
                      fill="white" stroke="white" stroke-width="4" stroke-linejoin="round"/>
                <path d="M13.333 20L18.333 25L28.333 15" stroke="black" stroke-width="4" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </mask>
            <g mask="url(#mask0_102_433)">
                <path d="M0 0H40V40H0V0Z" fill="#94E522"/>
            </g>
        </svg>
        <p class="success-heading">You’re booked</p>
    </div>
    <div class="subheading">Wednesday, September 16 at 9:00 AM</div>
    <button data-start-time="<?= $start_time ?>" data-end-time="<?= $end_time ?>" data-name="<?= $training_name ?>"
            data-location="<?= $location ?>" id="add-to-calendar" class="mindbody-add-to-calendar-btn">Add to calendar
    </button>
</div>


<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/success.css"
      type="text/css"/>

<script src="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/js/success.js"></script>
