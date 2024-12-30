jQuery(document).ready(function ($) {
    const appointmentCalendarForm = $('#appointment-calendar-form');
    const appointmentTypeSelect = $('#appointment-type-select');
    const appointmentDateSelect = $('#appointment-date-select');
    const appointmentTimeSelect = $('#appointment-time-select');
    const appointmentContinueButton = $('#appointment-continue-button');

    const ajaxUrl = appointmentCalendarForm.data('ajax-url');
    const siteId = appointmentCalendarForm.data('site-id');
    const locationId = appointmentCalendarForm.data('location-id');


    load();
    generateAppointmentTypeButtons(appointmentTypeSelect, ajaxUrl, locationId, siteId);
    noneLoad();


    $(document).on('click', '.appointment-type-button', function (e) {
        e.preventDefault();
        load();
        $('.appointment-type-button').removeClass('active-appointment-type');
        $(this).addClass('active-appointment-type');
        generateDateSlider();
        noneLoad();
    });


    function generateAppointmentTypeButtons(appointmentTypeSelect, ajaxUrl, locationId, siteId) {
        appointmentTypeSelect.empty();
        console.log('Generating appointment type buttons...');
        getAjaxAppointmentButtonsData(ajaxUrl, locationId, siteId)
            .then(function (appointmentButtonsData) {
                appointmentButtonsData.forEach((type) => {
                    const button = $('<button>', {
                        text: type.title,
                        class: type.class,
                        type: type.type,
                        id: type.id,
                    });
                    appointmentTypeSelect.append(button);
                });
            })
            .catch(function (error) {
                console.error('Error generating appointment type buttons:', error);
            });
    }

    function getAjaxAppointmentButtonsData(ajaxUrl, locationId, siteId) {
        return new Promise((resolve, reject) => {
            let form_data = new FormData();
            form_data.append('action', 'get_appointment_buttons');
            form_data.append('locationId', locationId);
            form_data.append('siteId', siteId);

            axios.post(ajaxUrl, form_data)
                .then(function (response) {
                    if (response.data.success) {
                        resolve(response.data.data);
                    } else {
                        console.error('Request failed:', response.data.message);
                        reject('Request failed');
                    }
                })
                .catch(function (error) {
                    console.error('Error making the request:', error);
                    reject(error);
                });
        });
    }


    function load() {
        let loader = $('#loader');
        loader.removeClass('loader-hide');
        appointmentCalendarForm.addClass('noneClick')


    }

    function noneLoad() {
        let loader = $('#loader');
        loader.addClass('loader-hide');
        appointmentCalendarForm.removeClass('noneClick');

    }

    function generateDateSlider() {
        $(appointmentDateSelect).empty();
        $(appointmentTimeSelect).empty();
        $(appointmentContinueButton).empty();
        const dates = generateDatesArray();
        const sliderContainer = document.createElement('div');
        sliderContainer.classList.add('date-slider');
        sliderContainer.id = 'calendar-date';
        const prev = document.createElement('button');
        const next = document.createElement('button');
        prev.classList.add('slick-prev-custom');
        prev.id = 'prev-btn';
        next.classList.add('slick-next-custom');
        next.id = 'next-btn';
        prev.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">\n' +
            '                    <path d="M2.39975 11.9996L1.83336 12.566L1.26855 11.9996L1.83335 11.4332L2.39975 11.9996ZM2.96615 11.4332L9.36615 17.8332L8.23335 18.966L1.83336 12.566L2.96615 11.4332ZM1.83335 11.4332L8.23335 5.0332L9.36615 6.166L2.96615 12.566L1.83335 11.4332ZM2.39975 11.1996L22.3998 11.1996L22.3998 12.7996L2.39975 12.7996L2.39975 11.1996Z"\n' +
            '                          fill="#181818"/>\n' +
            '                </svg>';
        next.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">\n' +
            '                    <path d="M21.6002 11.9996L22.1666 12.566L22.7314 11.9996L22.1666 11.4332L21.6002 11.9996ZM21.0338 11.4332L14.6338 17.8332L15.7666 18.966L22.1666 12.566L21.0338 11.4332ZM22.1666 11.4332L15.7666 5.0332L14.6338 6.166L21.0338 12.566L22.1666 11.4332ZM21.6002 11.1996L1.60025 11.1996L1.60025 12.7996L21.6002 12.7996L21.6002 11.1996Z"\n' +
            '                          fill="#181818"/>\n' +
            '                </svg>';
        appointmentDateSelect.append(prev);

        $(appointmentDateSelect).append(sliderContainer);
        dates.forEach(date => {
            const slide = document.createElement('button');
            slide.classList.add('date-slide');
            const dateSlideContainer = document.createElement('div');
            dateSlideContainer.classList.add('date-container-slide');

            const dayName = formatDateName(date);
            const dayNumber = formatDateNumbers(date);
            const dayNameBlock = document.createElement('div');
            const dayNumberBlock = document.createElement('div');
            dayNameBlock.textContent = dayName;
            dayNumberBlock.textContent = dayNumber;
            dayNameBlock.classList.add('day-name-block');
            dayNumberBlock.classList.add('day-number-block');

            dateSlideContainer.append(dayNameBlock, dayNumberBlock);
            slide.append(dateSlideContainer);
            slide.dataset.date = formatDateMMDDYYYY(date);
            $('#calendar-date').append(slide);
        });
        appointmentDateSelect.append(next);

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
                        slidesToShow: 4
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
    }

    function formatDateMMDDYYYY(date) {
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        const year = date.getFullYear();

        return `${month}-${day}-${year}`;
    }


    function generateTimesSlots() {
        $(appointmentTimeSelect).empty();
        $(appointmentContinueButton).empty();
        let textTitle = document.createElement('div');
        textTitle.classList.add('time-title');
        textTitle.textContent = 'SELECT YOUR TIME';
        appointmentTimeSelect.append(textTitle);

         getAjaxTimesSlots().then(function (container) {
            const timesContainer = document.createElement('div');
            timesContainer.classList.add('time-slider');
            timesContainer.id = 'calendar-times';
            appointmentTimeSelect.append(timesContainer);

            container.forEach((slot) => {
                const slotDiv = document.createElement('div');
                slotDiv.classList.add('time-slide');

                slotDiv.textContent = convertTo12HourFormat(slot.start);

                slotDiv.setAttribute('data-start', slot.start);
                slotDiv.setAttribute('data-end', slot.end);
                slotDiv.setAttribute('workerName', slot.workerName);
                slotDiv.setAttribute('workerId', slot.id);




                timesContainer.appendChild(slotDiv);
            });

        })
            .catch(function () {
                let info = document.createElement('div');
                info.classList.add('time-not-found');
                info.textContent = 'No slots available, choose another date!';
                appointmentTimeSelect.append(info);
            });


    }

    function convertTo12HourFormat(time24) {
        const [hours, minutes] = time24.split(':');
        const hours12 = (hours % 12) || 12;
        const ampm = hours >= 12 ? 'PM' : 'AM';
        return `${hours12}:${minutes} ${ampm}`;
    }

    function getAjaxTimesSlots() {
        return new Promise((resolve, reject) => {
            let form_data = new FormData();
            form_data.append('action', 'get_appointment_times');
            form_data.append('locationId', locationId);
            form_data.append('siteId', siteId);
            let sessionTypeId = $('.active-appointment-type').attr('id');
            form_data.append('sessionTypeId', sessionTypeId);
            let date = $('.active-appointment-date').data('date');
            form_data.append('date', date);
            disableDateSlideClicks();
            axios.post(ajaxUrl, form_data)
                .then(function (response) {
                    if (response.data.success) {
                        resolve(response.data.data);
                    } else {
                        console.error('Request failed:', response.data.message);
                        reject('Request failed');
                    }
                })
                .catch(function (error) {
                    console.error('Error making the request:', error);
                    reject(error);
                })
                .finally(function(){
                    enableDateSlideClicks();
                });
        });

    }

    function disableDateSlideClicks() {
        $('.appointment-calendar-form').addClass('disabled');
    }

    function enableDateSlideClicks() {
        $('.appointment-calendar-form').removeClass('disabled');
    }

    $(document).on('click', '.date-slide', function (e) {
        e.preventDefault();
        $('.date-slide').removeClass('active-appointment-date');
        $(this).addClass('active-appointment-date');
        generateTimesSlots();
    });


    $(document).on('click', '.time-slide', function (e) {
        e.preventDefault();
        load();
        console.log('click time')
        $('.time-slide').removeClass('active-appointment-time');
        $(this).addClass('active-appointment-time');
        generateContinueButton();
        noneLoad();
    });

    $(document).on('click', '#continue-button', async function (e){
        disableDateSlideClicks();
        let form_data = new FormData();
        form_data.append('action', 'get_appointment_form');
        form_data.append('locationId', locationId);
        form_data.append('siteId', siteId);
        let sessionTypeId = $('.active-appointment-type').attr('id');
        form_data.append('sessionTypeId', sessionTypeId);
        let date = $('.active-appointment-date').data('date');
        form_data.append('date', date);
        let activeAppointmentTime = $('.active-appointment-time');
        let startTime = activeAppointmentTime.data('start');
        form_data.append('time', startTime);
        let endTime = activeAppointmentTime.data('end');
        let workerName = activeAppointmentTime.attr('workerName');
        form_data.append('workerName', workerName);
        let workerId = activeAppointmentTime.attr('workerId');
        form_data.append('workerId', workerId);
        let user_id = appointmentCalendarForm.data('user-id');
        form_data.append('userId', user_id);
        let sessionTypeName = $('.active-appointment-type').text();
        console.log(
            'locationId:', locationId,
            'siteId:', siteId,
            'sessionTypeId:', sessionTypeId,
            'date:', date,
            'startTime:', startTime,
            'endTime:', endTime,
            'workerName:', workerName,
            'workerId:', workerId,
            'userId', user_id
        )
        try {
            const response = await axios.post(ajaxUrl, form_data);

            console.log(response);

            if (response.data.success) {
                let redirect_url = appointmentCalendarForm.data('redirect-url');
                console.log(redirect_url)
                let url = new URL(redirect_url, window.location.origin);

                url.searchParams.append('locationId', locationId);
                url.searchParams.append('siteId', siteId);
                url.searchParams.append('sessionTypeId', sessionTypeId);
                url.searchParams.append('date', date);
                url.searchParams.append('startTime', startTime);
                url.searchParams.append('endTime', endTime);
                url.searchParams.append('workerName', workerName);
                url.searchParams.append('workerId', workerId);
                url.searchParams.append('userId', user_id);
                url.searchParams.append('sessionTypeName', sessionTypeName);
                url.searchParams.append('startServerTime', response.data.data);


                window.location.href = url.toString();
            } else {
                alert(response.data.data);
            }
        } catch (error) {
            console.error('Error', error);
            alert('Sorry, something went wrong. Please try again later.');
        } finally {
            enableDateSlideClicks();
        }
    });



    function generateContinueButton() {
        appointmentContinueButton.empty();
        const continueButton = document.createElement('button');
        continueButton.classList.add('continue-button');
        continueButton.id = 'continue-button';
        continueButton.textContent = 'Continue';
        appointmentContinueButton.append(continueButton);
    }

    function generateDatesArray() {
        const dates = [];
        const today = new Date();
        for (let i = 0; i < 15; i++) {
            const date = new Date(today);
            date.setDate(today.getDate() + i);
            dates.push(date);
        }
        return dates;
    }

    function formatDateName(date) {
        const options = {weekday: 'short'};
        return date.toLocaleDateString('en-US', options);
    }


    function formatDateNumbers(date) {
        return date.toLocaleDateString('en-US', {
            month: '2-digit',
            day: '2-digit',
        });
    }







});