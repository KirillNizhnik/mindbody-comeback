jQuery(document).ready(function($) {
    $('.calendar-item').on('click', function() {
        $('.calendar-item').removeClass('active-day');
        $(this).addClass('active-day');
        let selectedDateTitle = $(this).data('title');
        $('#picked-date').text(selectedDateTitle);
        $('.mindbody-calendar-time').empty();
        $('.info-not-available').remove();
        let ajaxUrl = $('#calendar-container').data('ajax-url');
        let location_id = $('#calendar-container').data('location-id');
        console.log(location_id)
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'get_calendar_classes_by_date',
                date: $(this).data('date'),
                location_id: location_id
            },
            beforeSend: function() {
                $('#calendar-container').html('<p class="info-not-available">Loading classes...</p>');
            },
            success: function(response) {
                if (response.success) {
                    $('#calendar-container').html(response.data);
                } else {
                    $('#calendar-container').html('<p class="info-not-available">No classes available for the selected date.</p>');

                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                $('#calendar-container').html('<p class="info-not-available">Failed to load classes. Please try again.</p>');
            }
        });
    });

    $(document).on('click', '.time-item', function() {
        $('.time-item').removeClass('active');

        $(this).addClass('active');

        let classId = $(this).data('class-id');
        console.log('Selected class ID:', classId);

    });

    $('#submit-training').on('click', function(e) {
        e.preventDefault();
        console.log('click');

        let classId = $('.time-item.active').data('class-id');
        let descr_id = $('.time-item.active').data('description-id');

        let startDateTime = $('.time-item.active').data('start-datetime');
        let endDateTime = $('.time-item.active').data('end-datetime');

        let infoCalendar = $('#info-calendar');
        let redirectUrl = infoCalendar.data('redirect-url');
        let locationId = infoCalendar.data('location-id');
        let firstName = infoCalendar.data('first-name');
        let lastName = infoCalendar.data('last-name');
        let email = infoCalendar.data('email');
        let phone = infoCalendar.data('phone');

        console.log(classId, descr_id, startDateTime, endDateTime, redirectUrl, locationId, firstName, lastName, email, phone);

        let newUrl = redirectUrl +
            '?class_id=' + encodeURIComponent(classId) +
            '&descr_id=' + encodeURIComponent(descr_id) +
            '&location=' + encodeURIComponent(locationId) +
            '&first_name=' + encodeURIComponent(firstName) +
            '&last_name=' + encodeURIComponent(lastName) +
            '&email=' + encodeURIComponent(email) +
            '&phone=' + encodeURIComponent(phone) +
            '&start_time=' + encodeURIComponent(startDateTime) +  // Добавляем время начала
            '&end_time=' + encodeURIComponent(endDateTime);       // Добавляем время конца

        console.log('Redirecting to:', newUrl);

         window.location.href = newUrl;
    });


});