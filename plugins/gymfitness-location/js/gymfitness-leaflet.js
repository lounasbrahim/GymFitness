document.addEventListener("DOMContentLoaded", () => {
    // Read the hidden fields
    var lat = document.querySelector("#lat").value;
    var lng = document.querySelector("#lng").value;
    var zoom = document.querySelector("#zoom").value;
    var address = document.querySelector("#address").value;
    
    // add them into map
    var map = L.map('map').setView([lat, lng], zoom);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
    .bindPopup(address) 
    .openPopup();

});
