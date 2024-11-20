document.addEventListener('DOMContentLoaded', function() {
    const disclaimerElement = document.getElementById('disclaimer');

    if (disclaimerElement) {
        let dataContent = disclaimerElement.getAttribute('data-content');
        console.log('Data content:', dataContent);
    } else {
        console.log('Element with ID "disclaimer" not found');
    }
});