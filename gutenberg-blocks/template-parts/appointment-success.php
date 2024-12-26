<?php

//http://localhost:8888/isielitetraining/mindbody-appointment-success/?locationId=1&siteId=5738928&sessionTypeId=9&date=12-30-2024&startTime=11%3A00&endTime=11%3A30&workerName=Martinas+Rankin&workerId=3&userId=100000786
$event_name = 'ISI® Info Appt - ' . isset($_GET['sessionTypeName']) ? intval($_GET['sessionTypeName']) : null;
$event_description = "Our team is excited to meet you! Due to the demand of the waitlist, we ask that you show up to your appointment on time whether it is in person or virtual. We can't wait for you to experience the best 50 minute strength-based workout in the country!";

$locationId = isset($_GET['locationId']) ? intval($_GET['locationId']) : null;
$siteId = isset($_GET['siteId']) ? intval($_GET['siteId']) : null;
$sessionTypeId = isset($_GET['sessionTypeId']) ? intval($_GET['sessionTypeId']) : null;
$event_date = isset($_GET['date']) ? $_GET['date'] : null; // Формат: m-d-Y
$startTime = isset($_GET['startTime']) ? $_GET['startTime'] : null; // Формат: H:i
$endTime = isset($_GET['endTime']) ? $_GET['endTime'] : null; // Формат: H:i
$workerName = isset($_GET['workerName']) ? $_GET['workerName'] : null;
$workerId = isset($_GET['workerId']) ? intval($_GET['workerId']) : null;
$userId = isset($_GET['userId']) ? intval($_GET['userId']) : null;


$event_time = convertTimeTo12HourFormat($startTime) . ' - ' . convertTimeTo12HourFormat($endTime);


$post_id = get_post_id_by_mindbody_location_id_and_site_id($locationId, $siteId);
$title = get_the_title($post_id);


function convertTimeTo12HourFormat($time) {
    // Создаём объект DateTime из строки времени
    $dateTime = DateTime::createFromFormat('H:i', $time);

    if ($dateTime) {
        return $dateTime->format('g:i A'); // Например, '8:00 AM'
    } else {
        return 'Invalid Time';
    }
}



$startDateTime = DateTime::createFromFormat('Y-m-d\TH:i:s', $_GET['startServerTime']);
if (!$startDateTime) {
    echo "Неверный формат startServerTime.";
    exit;
}

$durationMinutes = 30;

$endDateTime = clone $startDateTime;
$endDateTime->modify("+{$durationMinutes} minutes");

$startFormatted = $startDateTime->format('Ymd\THis');
$endFormatted = $endDateTime->format('Ymd\THis');


$calendar_link = 'https://www.google.com/calendar/render?action=TEMPLATE';
$calendar_link .= '&text = ' . urlencode($title) ;
$calendar_link .= '&dates=' . urlencode($startFormatted) . '/' . urlencode($endFormatted);
$calendar_link .= '&details=' . urlencode($event_description);
$calendar_link .= '&location=' . urlencode("$title, Worker: $workerName");
$calendar_link .= '&sf=true&output=xml';
?>


<div class="appointment-success">
    <div class="appointment-success-logo">
        <img src="<?= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/logo-2.svg'; ?>" class="appointment-success-logo logo"
             alt="ISI Elite Training">
    </div>
    <div class="confirmation">
        <span class="see-you-soon">
            SEE YOU SOON!
        </span>
        <span class="appointment-confirmation">
            <img src="<?= plugin_dir_url(MINDBODY_PLUGIN_FILE) . 'assets/images/Check.svg'; ?>" alt="" class="appointment-confirmation-img">
            <span> YOU'RE CONFIRMED! </span>
        </span>
    </div>
    <div class="appointment-details">
        <?= strtoupper($event_date) . ' @ ' . $event_time; ?>
    </div>
    <div class="appointment-descr">
        <?= $event_description; ?>
    </div>

    <a href="<?= $calendar_link  ?>" class="add-to-calendar" target="_blank">ADD TO CALENDAR</a>
</div>

<link rel="stylesheet" href="<?php echo plugin_dir_url(MINDBODY_PLUGIN_FILE); ?>assets/css/appointment-success.css" type="text/css"/>


