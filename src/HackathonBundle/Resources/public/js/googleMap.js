var map;
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 8
    });
}

function initialize() {
    var pyrmont = new google.maps.LatLng(-33.8665, 151.1956);

    var map = new google.maps.Map(document.getElementById('map'), {
        center: pyrmont,
        zoom: 15,
        scrollwheel: false
    });

    // Specify location, radius and place types for your Places API search.
    var request = {
        location: pyrmont,
        radius: '500',
        types: ['store']
    };

    // Create the PlaceService and send the request.
    // Handle the callback with an anonymous function.
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, function(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
                var place = results[i];
                // If the request succeeds, draw the place location on
                // the map as a marker, and register an event to handle a
                // click on the marker.
                var marker = new google.maps.Marker({
                    map: map,
                    position: place.geometry.location
                });
            }
        }
    });
}

// Run the initialize function when the window has finished loading.
google.maps.event.addDomListener(window, 'load', initialize);


var map;
var service;
var infowindow;

function initialize() {
    var pyrmont = new google.maps.LatLng(-33.8665433,151.1956316);

    map = new google.maps.Map(document.getElementById('map'), {
        center: pyrmont,
        zoom: 15
    });

    var request = {
        location: pyrmont,
        radius: '500',
        types: ['store']
    };

    service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);
}

function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
            var place = results[i];
            createMarker(results[i]);
        }
    }
}

