// variables diverses
var service; //service pour google places
var place; // pour l'autocomplete stocke le lieu
var mapOptions = {
    center: {lat: 48.471285, lng: 1.0143050000000358},
    zoom: 13,
    scrollwheel: false
}; // point par défaut


// déclaration de la map et lien avec l'element map de notre vue
var map = new google.maps.Map(document.getElementById('map'),
    mapOptions);

var element = document.getElementById('searchAutoComplete'); //input pour la recherche du lieux autocomplete
if (element) {
    var autocomplete = new google.maps.places.Autocomplete(element, {types: ['geocode']}); //creation de autocomplet

    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        place = this.getPlace(); //memorise le lieu trouvé
    });

    //ajout ecouter sur click du bouton btnSearch
    document.querySelector('#btnSearch').addEventListener('click', function(e){
        //creation du marker pour le lieux (place)
        var marker = new google.maps.Marker({
            position: place.geometry.location,
            map: map,
            title: place.name
        });

        map.setCenter(marker.getPosition()); //centrer la map sur le marker de place

        // variable qui stocke le type de lieux saisie dans l'input searchPlace
        var req = document.getElementById('searchPlace').value;

        //creation du service google place
        service = new google.maps.places.PlacesService(map);
        //on effectue la recherche
        service.textSearch({
            location: place.geometry.location,
            radius: '2500',
            query: req
        }, function(results, status){
            if (status == google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    var place = results[i];
                    addMarker(results[i]);
                }
            }
        });

    });
}

function addMarker(place) {
    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location,
        icon: {
            url: 'http://maps.gstatic.com/mapfiles/circle.png',
            anchor: new google.maps.Point(10, 10),
            scaledSize: new google.maps.Size(10, 17)
        }
    });

    //bubulle
    var infoWindow = new google.maps.InfoWindow();

    google.maps.event.addListener(marker, 'click', function() {
        service.getDetails(place, function(result, status) {
            if (status !== google.maps.places.PlacesServiceStatus.OK) {
                console.error(status);
                return;
            }
            infoWindow.setContent("<b>COUCOUC</b> " + result.name); //personnalisable
            infoWindow.open(map, marker);
        });
    });
}
