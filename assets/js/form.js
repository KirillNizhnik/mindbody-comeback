const PhoneValidator = {
    validatePhone: function (phone) {
        const phonePattern = /^\+1\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/;

        if (!phonePattern.test(phone)) {
            toastr.error('Please enter a valid phone number in the format +1 (555) 555-5555 or +15555555555', 'Invalid Phone Number', {
                positionClass: 'toast-bottom-right',
                closeButton: true,
                progressBar: true
            });
            return false;
        }
        return true;
    }
};

document.getElementById('locationForm').addEventListener('submit', function (e) {
    e.preventDefault();

    let firstName = document.querySelector('input[name="first_name"]').value.trim();
    let lastName = document.querySelector('input[name="last_name"]').value.trim();
    let email = document.querySelector('input[name="email"]').value.trim();
    let phone = document.querySelector('input[name="phone"]').value.trim();
    let locationId = document.getElementById('locationForm').getAttribute('data-location-id');
    let redirectUrl = document.getElementById('locationForm').getAttribute('data-redirect_url');

    if (!firstName || !lastName || !email || !phone) {
        toastr.error('Please fill out all required fields', 'Missing Information', {
            positionClass: 'toast-bottom-right',
            closeButton: true,
            progressBar: true
        });
        return;
    }

    if (!PhoneValidator.validatePhone(phone)) {
        return; // Прекращаем выполнение, если телефон невалидный
    }

    window.location.href = redirectUrl + "?location=" + locationId
        + "&first_name=" + encodeURIComponent(firstName)
        + "&last_name=" + encodeURIComponent(lastName)
        + "&email=" + encodeURIComponent(email)
        + "&phone=" + encodeURIComponent(phone);
});


document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone');

    if (phoneInput) {
        phoneInput.addEventListener('input', function(event) {
            let input = event.target.value.replace(/\D/g, ''); // Удаляем все, кроме цифр

            if (!input.startsWith('1')) {
                input = '1' + input;
            }

            if (input.length <= 1) {
                input = '+' + input;
            } else if (input.length <= 4) {
                input = '+' + input[0] + ' (' + input.slice(1);
            } else if (input.length <= 7) {
                input = '+' + input[0] + ' (' + input.slice(1, 4) + ') ' + input.slice(4);
            } else if (input.length <= 11) {
                input = '+' + input[0] + ' (' + input.slice(1, 4) + ') ' + input.slice(4, 7) + '-' + input.slice(7);
            } else {
                input = '+' + input[0] + ' (' + input.slice(1, 4) + ') ' + input.slice(4, 7) + '-' + input.slice(7, 11);
            }

            event.target.value = input.slice(0, 17);
        });

        phoneInput.addEventListener('blur', function(event) {
            const input = event.target.value;
            const isValid = /^\+1 \(\d{3}\) \d{3}-\d{4}$/.test(input);
            if (!isValid) {
                alert("Please enter a valid US phone number in the format +1 (XXX) XXX-XXXX");
                event.target.value = '';
            }
        });
    } else {
        console.warn('Element with ID "phone" not found on the page.');
    }
});