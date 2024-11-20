document.addEventListener('DOMContentLoaded', function() {
    const disclaimerElement = document.getElementById('disclaimer');

    if (disclaimerElement) {
        let dataContent = disclaimerElement.getAttribute('data-content');
        console.log('Data content:', dataContent);
        const elem = document.getElementById('comp-kp72821f');
        console.log('Element:', elem);
        elem.innerHTML = dataContent;


    } else {
        console.log('Element with ID "disclaimer" not found');
    }
});