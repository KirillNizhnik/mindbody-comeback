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
        let site_id = $('#calendar-container').data('site-id');

        console.log(location_id)
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                action: 'get_calendar_classes_by_date',
                date: $(this).data('date'),
                location_id: location_id,
                site_id: site_id,
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
        let trainingId = $('.time-item.active').data('class-schedule-id');

        let startDateTime = $('.time-item.active').data('start-datetime');
        let endDateTime = $('.time-item.active').data('end-datetime');

        let infoCalendar = $('#info-calendar');
        let redirectUrl = infoCalendar.data('redirect-url');
        let locationId = infoCalendar.data('location-id');
        let firstName = infoCalendar.data('first-name');
        let lastName = infoCalendar.data('last-name');
        let email = infoCalendar.data('email');
        let phone = infoCalendar.data('phone');
        let ads = infoCalendar.data('ads');
        let siteId = infoCalendar.data('site-id');
        let ajaxUrl = infoCalendar.data('ajax-url');
        let userId = infoCalendar.data('user-id');
        let address = infoCalendar.data('address');
        if (ads) {
            let newUrl = redirectUrl +
                '?class_id=' + encodeURIComponent(classId) +
                '&location=' + encodeURIComponent(locationId) +
                '&siteId=' + encodeURIComponent(siteId) +
                '&descr_id=' + encodeURIComponent(descr_id) +
                '&first_name=' + encodeURIComponent(firstName) +
                '&last_name=' + encodeURIComponent(lastName) +
                '&email=' + encodeURIComponent(email) +
                '&phone=' + encodeURIComponent(phone) +
                '&start_time=' + encodeURIComponent(startDateTime) +
                '&end_time=' + encodeURIComponent(endDateTime) +
                '&ads=' + encodeURIComponent(ads);

            console.log('Redirecting to:', newUrl);
            window.location.href = newUrl;
        }else {
            const data = new URLSearchParams();
            data.append('action', 'free_payment');
            data.append('user_id', userId);
            data.append('training_id', trainingId);
            data.append('class_id', classId);
            data.append('location_id', locationId);
            data.append('site_id', siteId);

            fetch(ajaxUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: data.toString(),
            })
                .then(response => response.json())
                .then(response => {

                    if (response.success) {
                        const urlParams = new URLSearchParams({
                            start_time: response.data.data.start_time,
                            end_time: response.data.data.end_time,
                            class_name: response.data.data.class_name,
                            location_id: locationId,
                            siteId: siteId,
                            class_id: classId,
                            address: address,
                        });
                        redirectUrl = `${response.data.data.redirectUrl}?${urlParams.toString()}`;
                        window.location.href = redirectUrl;
                    } else {
                        alert('Sorry, there was an error processing your request. Please try again later.');
                    }
                })
                .catch(error => {
                    alert('Sorry, there was an error processing your request. Please try again later.');
                    console.error(error);
                })
                .finally(() => {
                    button.disabled = false;
                });

        }

    });


});