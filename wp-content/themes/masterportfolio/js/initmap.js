$(function () {
    initMap();
});

function initMap() {
    // Element container for the map
    var mapContainer = document.getElementById('map');

    if (mapContainer) {
        // Get latitude and longitude data from container
        var coordinates = {
            lat: parseFloat(mapContainer.dataset.lat),
            lng: parseFloat(mapContainer.dataset.lng)
        };

        // Init a new google map object
        var map = new google.maps.Map(mapContainer, {
            center: coordinates,
            zoom: 15,
            disableDefaultUI: true
        });

        // Init a new marker for the map with the coodinates
        var marker = new google.maps.Marker({
            position: coordinates,
            map: map
        });
    }
}