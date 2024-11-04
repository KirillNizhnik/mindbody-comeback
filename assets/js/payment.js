document.addEventListener('DOMContentLoaded', function() {
    const button = document.getElementById('free-session-submit');
    const form = document.getElementById('session-free');

    if (button && form) {
        console.log('Button and form found, adding click event listener');

        button.addEventListener('click', function(event) {
            event.preventDefault();
            console.log('Button clicked, preventDefault() triggered');

            const userId = form.getAttribute('data-user-id');
            const ajaxUrl = form.getAttribute('data-ajax-url');

            console.log('User ID:', userId);
            console.log('AJAX URL:', ajaxUrl);

            const data = new URLSearchParams();
            data.append('action', 'free_payment');
            data.append('user_id', userId);

            // Send the AJAX request
            fetch(ajaxUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: data.toString(),
            })
                .then(response => response.json())
                .then(response => {
                    console.log('Response received:', response);
                    if (response.success) {
                        alert(response.data.message); // Alert success message from server
                    } else {
                        alert('Error processing request');
                    }
                })
                .catch(error => {
                    alert('Request failed');
                    console.error(error);
                });
        });
    } else {
        if (!button) console.warn('Button with class "free-session-submit" not found.');
        if (!form) console.warn('Form with ID "session-free" not found.');
    }
});