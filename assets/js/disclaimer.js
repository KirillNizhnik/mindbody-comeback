document.addEventListener('DOMContentLoaded', function() {
    const disclaimerElement = document.getElementById('disclaimer');

    if (disclaimerElement) {
        let dataContent = disclaimerElement.getAttribute('data-content');
        console.log('Data content:', dataContent);
        const disclaimerElement = document.getElementById('comp-kp72821f');
        console.log('Element:', disclaimerElement);
        disclaimerElement.innerHTML = dataContent;


    } else {
        console.log('Element with ID "disclaimer" not found');
    }
});