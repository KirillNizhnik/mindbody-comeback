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

// Обработчик для отправки формы
document.getElementById('locationForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Останавливаем стандартное поведение отправки формы

    // Получаем значения полей формы
    let firstName = document.querySelector('input[name="first_name"]').value.trim();
    let lastName = document.querySelector('input[name="last_name"]').value.trim();
    let email = document.querySelector('input[name="email"]').value.trim();
    let phone = document.querySelector('input[name="phone"]').value.trim();
    let locationId = document.getElementById('locationForm').getAttribute('data-location-id');
    let redirectUrl = document.getElementById('locationForm').getAttribute('data-redirect_url');

    // Проверка обязательных полей перед валидацией телефона
    if (!firstName || !lastName || !email || !phone) {
        toastr.error('Please fill out all required fields', 'Missing Information', {
            positionClass: 'toast-bottom-right',
            closeButton: true,
            progressBar: true
        });
        return;
    }

    // Проверка номера телефона через валидатор
    if (!PhoneValidator.validatePhone(phone)) {
        return; // Прекращаем выполнение, если телефон невалидный
    }

    // Если все поля валидны, выполняем редирект
    window.location.href = redirectUrl + "?location=" + locationId
        + "&first_name=" + encodeURIComponent(firstName)
        + "&last_name=" + encodeURIComponent(lastName)
        + "&email=" + encodeURIComponent(email)
        + "&phone=" + encodeURIComponent(phone);
});