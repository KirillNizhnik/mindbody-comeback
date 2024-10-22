document.getElementById('locationForm').addEventListener('submit', function (e) {
    e.preventDefault();

    let firstName = document.querySelector('input[name="first_name"]').value;
    let lastName = document.querySelector('input[name="last_name"]').value;
    let email = document.querySelector('input[name="email"]').value;
    let phone = document.querySelector('input[name="phone"]').value;
    let locationId = document.getElementById('locationForm').getAttribute('data-location-id');
    let redirectUrl = document.getElementById('locationForm').getAttribute('data-redirect_url');

    window.location.href = redirectUrl + "?location=" + locationId
        + "&first_name=" + encodeURIComponent(firstName)
        + "&last_name=" + encodeURIComponent(lastName)
        + "&email=" + encodeURIComponent(email)
        + "&phone=" + encodeURIComponent(phone);
});