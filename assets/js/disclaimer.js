document.addEventListener('DOMContentLoaded', function() {
    const disclaimerElement = document.getElementById('disclaimer');

    if (disclaimerElement) {
        console.log('Element with ID "disclaimer" found:', disclaimerElement);

    } else {
        console.log('Element with ID "disclaimer" not found');
    }
});