document.getElementById("add-to-calendar").addEventListener("click", function() {
    const startTime = this.getAttribute("data-start-time");
    const endTime = this.getAttribute("data-end-time");
    const name = this.getAttribute("data-name");
    const location = this.getAttribute("data-location");

    const googleCalendarUrl = `https://calendar.google.com/calendar/r/eventedit?` +
        `text=${encodeURIComponent(name)}` +
        `&dates=${startTime}/${endTime}` +
        `&location=${encodeURIComponent(location)}` +
        `&details=${encodeURIComponent("Join us for this training session!")}`;

    window.open(googleCalendarUrl, "_blank");
});