<?php
function mindbody_handle_ajax_update_locations(): void
{
    $success = true;
    $api_key = get_field('store_rocket_api_key', 'option');
    $unique_id = get_field('map_unique_id', 'option');
    delete_all_store_locations_from_api($api_key, $unique_id);
    delete_all_posts_by_type('locations');
    try {
        $locations = get_mindbody_locations();
        process_and_create_location_posts($locations);

    } catch (Exception $e) {
        wp_send_json_error('Failed to retrieve locations: ' . $e->getMessage());
    }


    if ($success) {
        wp_send_json_success('Locations updated successfully.');
    } else {
        wp_send_json_error('Failed to update locations.');
    }
}
add_action('wp_ajax_mindbody_update_locations', 'mindbody_handle_ajax_update_locations');


function get_calendar_classes_by_date(): void
{

    if (isset($_POST['date']) && isset($_POST['location_id'])) {

        $date = sanitize_text_field($_POST['date']);
        $location_id = sanitize_text_field($_POST['location_id']);
        $start_date = $date . 'T00:00:00';
        $end_date = $date . 'T23:59:59';

        $classes = get_mindbody_classes_by_location($location_id, $start_date, $end_date);
        if (!empty($classes) && is_array($classes)) {
            $html = '<div class="mindbody-calendar-time">';
            $is_first = true;
            $available_count = 0;
//            echo '<pre>';
//            var_dump($classes);
//            echo '</pre>';

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
                $active_class = ($is_first) ? 'active' : '';

                $html .= '<div class="time-item ' . $active_class . '" ' .
                    'data-class-id="' . $scheduleId . '" ' .
                    'data-description-id="' . $class_description . '" ' .
                    'data-class-name="' . htmlspecialchars($class_name, ENT_QUOTES, 'UTF-8') . '" ' .
                    'data-start-datetime="' . htmlspecialchars($start_datetime, ENT_QUOTES, 'UTF-8') . '" ' .
                    'data-end-datetime="' . htmlspecialchars($end_datetime, ENT_QUOTES, 'UTF-8') . '">' .
                    $start_time . ' </div>';

                $is_first = false;
                $available_count++;
            }

            if ($available_count === 0) {
                wp_send_json_error('No classes available for the selected date.');
            }

            $html .= '</div>';
            wp_send_json_success($html);
        } else {
            wp_send_json_error('No classes available for the selected date.');
        }
    } else {
        wp_send_json_error('Invalid request');
    }
}

add_action('wp_ajax_get_calendar_classes_by_date', 'get_calendar_classes_by_date');
add_action('wp_ajax_nopriv_get_calendar_classes_by_date', 'get_calendar_classes_by_date');


add_action('wp_ajax_free_payment', 'handle_free_payment');
add_action('wp_ajax_nopriv_free_payment', 'handle_free_payment');

add_action('wp_ajax_single_payment', 'handle_single_payment');
add_action('wp_ajax_nopriv_single_payment', 'handle_single_payment');

function handle_free_payment()
{
    $services_id = get_field('mindbody_service_id_free', 'option');
    $user_id =
    wp_send_json_success(['message' => 'Free payment processed successfully!']);
}

function handle_single_payment() {


    wp_send_json_success(['message' => 'Single payment processed successfully!']);
}
