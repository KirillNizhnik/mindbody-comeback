document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('free-session-submit');
    const form = document.getElementById('session-free');


    if (button && form) {
        console.log('Button and form found, adding click event listener');

        button.addEventListener('click', function(event) {
            event.preventDefault();
            button.disabled = true;

            console.log('Button clicked, preventDefault() triggered');

            const userId = form.getAttribute('data-user-id');
            const trainingId = form.getAttribute('data-training-id');
            const classId = form.getAttribute('data-class-id');
            const ajaxUrl = form.getAttribute('data-ajax-url');
            const locationId = form.getAttribute('data-location-id');
            let redirectUrl = form.getAttribute('data-redirect-url');

            console.log(redirectUrl)
            console.log('User ID:', userId);
            console.log('AJAX URL:', ajaxUrl);
            console.log('location id: ', locationId);

            const data = new URLSearchParams();
            data.append('action', 'free_payment');
            data.append('user_id', userId);
            data.append('training_id', trainingId);
            data.append('class_id', classId);
            data.append('location_id', locationId);



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
                            class_id: classId,
                        });
                        redirectUrl = `${redirectUrl}?${urlParams.toString()}`;
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
        });
    } else {
        if (!button) console.warn('Button with class "free-session-submit" not found.');
        if (!form) console.warn('Form with ID "session-free" not found.');
    }


    const expiryDateInput = document.getElementById('expiry-date');

    if (expiryDateInput) { // Проверяем, существует ли элемент
        expiryDateInput.addEventListener('input', function(event) {
            let input = event.target.value;

            input = input.replace(/\D/g, '');


            if (input.length >= 3) {
                input = input.slice(0, 2) + '/' + input.slice(2);
            }

            event.target.value = input.slice(0, 5);
        });
    } else {
        console.warn('Element with ID "expiry-date" not found on the page.');
    }

    const cardInput = document.getElementById('cc-number');

    if (cardInput) {
        cardInput.addEventListener('input', function(event) {
            let input = event.target.value;

            input = input.replace(/\D/g, '');

            input = input.replace(/(\d{4})(?=\d)/g, '$1 ');

            event.target.value = input.slice(0, 19);
        });
    } else {
        console.warn('Element with ID "credit-card-number" not found on the page.');
    }

    const cvvInput = document.getElementById('cvv');

    if (cvvInput) {
        cvvInput.addEventListener('input', function(event) {
            let input = event.target.value;

            input = input.replace(/\D/g, '');

            event.target.value = input.slice(0, 4);
        });
    } else {
        console.warn('Element with ID "cvv" not found on the page.');
    }

    const nameInput = document.getElementById('cc-name');

    if (nameInput) {
        nameInput.addEventListener('input', function(event) {
            let input = event.target.value;

            input = input.replace(/[^a-zA-Z\s]/g, '');

            input = input.replace(/\s{2,}/g, ' ');

            event.target.value = input;
        });
    } else {
        console.warn('Element with ID "credit-card-name" not found on the page.');
    }

    const formSessionBuy = document.getElementById('session-buy');
    const submitButton = document.getElementById('payment-session-submit');

    if (formSessionBuy) {
        formSessionBuy.addEventListener('submit', function(event) {
            event.preventDefault();

            const ccNumber = cardInput.value.replace(/\s/g, '');
            const expiryDate = expiryDateInput.value;
            const cvv = cvvInput.value;
            const ccName = nameInput.value;

            const userId = formSessionBuy.getAttribute('data-user-id');
            const trainingId = formSessionBuy.getAttribute('data-training-id');
            const classId = formSessionBuy.getAttribute('data-class-id');
            const ajaxUrl = formSessionBuy.getAttribute('data-ajax-url');
            const locationId = formSessionBuy.getAttribute('data-location-id');
            const siteId = formSessionBuy.getAttribute('data-site-id');
            let redirectUrl = formSessionBuy.getAttribute('data-redirect-url');
            if (!/^\d{16}$/.test(ccNumber)) {
                alert("Please enter a valid 16-digit credit card number.");
                return;
            }
            if (!/^\d{2}\/\d{2}$/.test(expiryDate)) {
                alert("Please enter a valid expiration date in MM/YY format.");
                return;
            }
            if (!/^\d{3,4}$/.test(cvv)) {
                alert("Please enter a valid CVV.");
                return;
            }
            if (!/^[a-zA-Z\s]+$/.test(ccName)) {
                alert("Please enter a valid name on the credit card.");
                return;
            }
            console.log(ccName, cvv, expiryDate, ccNumber);

            const formData = new FormData();
            formData.append('action', 'single_payment');
            formData.append('cc-number', ccNumber);
            formData.append('cc-expiration', expiryDate);
            formData.append('cc-cvv', cvv);
            formData.append('cc-name', ccName);
            formData.append('user_id', userId);
            formData.append('training_id', trainingId);
            formData.append('class_id', classId);
            formData.append('location_id', locationId);
            formData.append('site_id', siteId);

            fetch(ajaxUrl, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const urlParams = new URLSearchParams({
                            start_time: response.data.data.start_time,
                            end_time: response.data.data.end_time,
                            class_name: response.data.data.class_name,
                            location_id: locationId,
                            class_id: classId,
                        });
                        redirectUrl = `${redirectUrl}?${urlParams.toString()}`;
                        window.location.href = redirectUrl;

                    } else {
                        alert(data.data.message);
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("There was an error processing your payment. Please try again.");
                });
        });
    } else {
        console.warn('Form with ID "session-buy" not found on the page.');
    }
});