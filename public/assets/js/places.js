/**
 * Created by srapin on 30.07.16.
 */

var pyrmont                 = new google.maps.LatLng(46.522386, 6.628718);
var service                 = null;
var map                     = null;
var markers                 = [];
var searchMarkers           = [];
var overlays                = [];
var infoWindow              = null;

var allowedSearchMarkers    = 1;

var API_KEY         = 'AIzaSyDCelPpT9KgfceVGY8cBRFc4D-n8rbT9-0';
var API_PAGESPEED   = 'https://www.googleapis.com/pagespeedonline/v2/runPagespeed';

// Specify location, radius and place types for your Places API search.
var request         = {};

function initialize() {
    // set the default Map request
    request = {
        location: pyrmont,
        radius: 100,
        types: ['store']
    };

    // init Google Map
    map = new google.maps.Map(document.getElementById('map'), {
        center: pyrmont,
        zoom: 15,
        scrollwheel: false,
        styles: [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]
    });

    // init the InfoWindow
    infoWindow  = new google.maps.InfoWindow({ content: '' });

    // add search point on click
    google.maps.event.addListener(map, 'click', function (event) {
        var position = event.latLng;
        addSearchMarker(position);
    });

    addSearchMarker(request.location);

    // try geolocation on the user's browser (https only)
    tryAutoGeoLocation();
}

function tryAutoGeoLocation()
{
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    console.log('cant handle this');
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
}

function mapSearch()
{
    // reset the markers
    clearPlaces();

    // Create the PlaceService and send the request.
    // Handle the callback with an anonymous function.
    service = new google.maps.places.PlacesService(map);
    service.textSearch(request, function(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            console.log(results);
            for (var i = 0; i < results.length; i++) {
                var place = results[i];
                addPlaceMarker(place);
            }
            addSearchMarker(request.location);
            showRadius(request.location, request.radius);
        }
    });
}

function addPlaceMarker(place)
{
    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location,
        title: place.name,
        id: place.id,
        place_id: place.place_id,
        vicinity: place.vicinity,
        types: place.types,
        permanently_closed: place.permanently_closed,
        animation: google.maps.Animation.DROP
    });

    // add the marker for future reinitialisation
    markers.push(marker);

    // marker click handler
    marker.addListener('click', function () {

        // close any existing window and open a new one
        infoWindow.close();
        infoWindow  = new google.maps.InfoWindow({
            content:    '<div id="content">'+
                            '<h3 id="firstHeading" class="firstHeading">' + place.name + '</h3>'+
                            '<div id="bodyContent">'+
                                '<p>' + place.formatted_address + '</p>'+
                                '<p><a href="#" class="btn btn-primary btn-analyze" data-id="' + this.place_id + '">Analyze</a></p>'+
                            '</div>'+
                        '</div>'
        });
        infoWindow.open(map, this);

        // btn Analyze click handler
        $('.btn-analyze').on('click', function (e) {
            e.preventDefault();
            var placeID = $(this).attr('data-id');
            analyze(placeID);
        });
    });
}

function addSearchMarker(position)
{
    if (searchMarkers.length) {
        searchMarkers.forEach(function (marker) {
            marker.setMap(null);
        });
        searchMarkers = [];
    }

    /*var marker = new google.maps.Marker({
        map: map,
        position: position,
        draggable: true,
        icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 6
        }
    });*/

    // TODO: Map icons : http://map-icons.com/

    var marker = new Marker({
        map: map,
        position: position,
        draggable: true,
        icon: {
            path: MAP_PIN,
            fillColor: '#00CCBB',
            fillOpacity: 1,
            strokeColor: '',
            strokeWeight: 0
        },
        map_icon_label: '<span class="map-icon map-icon-map-pin"></span>'
    });

    marker.addListener('dragstart', function () {
        hideRadius();
        clearPlaces();
    });
    marker.addListener('dragend', function () {
        showRadius(marker.position, request.radius);
        request.location = marker.position;
        map.setCenter(marker.position);
    });

    searchMarkers.push(marker);

    map.setCenter(marker.position);
    request.location = marker.position;

    showRadius(marker.position, request.radius);
}

function analyze(placeID)
{
    var place_id                    = null;
    var place_name                  = null;
    var place_rating                = null;
    var place_google_page           = null;
    var place_website               = null;
    var place_opening_hours         = null;
    var place_formatted_address     = null;

    $('.wbf-business-details').addClass('hidden');
    $('.wbf-business-details-progress').removeClass('hidden');

    service.getDetails({placeId: placeID}, function (placeResult, placesServiceStatus) {
        if (placesServiceStatus == google.maps.places.PlacesServiceStatus.OK) {

            place_id                    = placeResult.place_id;
            place_name                  = placeResult.name;
            place_rating                = placeResult.rating;
            place_google_page           = placeResult.url;
            place_website               = placeResult.website;
            place_opening_hours         = placeResult.opening_hours;
            place_formatted_address     = placeResult.formatted_address;

            var place_website_encoded       = encodeURI(place_website);

            var API_URL = API_PAGESPEED + '?url=' + place_website_encoded + '&screenshot=true&strategy=mobile&key=' + API_KEY;

            if (place_website) {
                var title = '';
                var score_speed = '';
                var score_usability = '';
                var screenshot = '';

                $.getJSON(API_URL, function (data) {
                    title               = data.title;
                    score_speed         = data.ruleGroups.SPEED.score;
                    score_usability     = data.ruleGroups.USABILITY.score;
                    screenshot          = data.screenshot.data;

                    screenshot = screenshot.replace(/_/g, '/');
                    screenshot = screenshot.replace(/-/g, '+');
                }).complete(function () {
                    console.log('json load done');

                    $('.wbf-business-details .title').html(title);
                    $('.wbf-business-details .score-speed').html(score_speed);
                    $('.wbf-business-details .score-usability').html(score_usability);
                    $('.wbf-business-details .image').attr('src', 'data:image/jpeg;base64,' + screenshot);

                    $('.wbf-business-details').removeClass('hidden');
                    $('.wbf-business-details-progress').addClass('hidden');
                });
            } else {
                console.log('no website');
                $('.wbf-business-details-progress').addClass('hidden');
            }

        } else {
            console.log('Impossible de récupérer les informations.');
        }
    });
}

function geoCodeAddress(address)
{
    if (address) {
        var geoCoder    = new google.maps.Geocoder();

        geoCoder.geocode({'address': address}, function (results, status) {
            if ( status === google.maps.GeocoderStatus.OK ) {

                var location            = results[0].geometry.location;
                var formatted_address   = results[0].formatted_address;

                map.setCenter(location);
                request.location = location;
                addSearchMarker(location);

                $('#wbfInputAddress').val(formatted_address);
            } else {
                console.log('Geocode was unable to geocode: ' + status);
            }
        });
    }
}

function showRadius(position, radius)
{
    if (overlays.length) {
        overlays.forEach(function (overlay) {
            overlay.setMap(null);
        });
        overlays = [];
    }

    var circleOverlay = new google.maps.Circle({
        strokeColor: '#0784bd',
        strokeOpacity: 0,
        strokeWeight: 1,
        fillColor: '#00afff',
        fillOpacity: 0.15,
        map: map,
        center: position,
        clickable: false,
        radius: radius * 1.5
    });

    overlays.push(circleOverlay);
}

function hideRadius()
{
    if (overlays.length) {
        overlays.forEach(function (overlay) {
            overlay.setMap(null);
        });
        overlays = [];
    }
}

function clearPlaces()
{
    // reset the markers
    if (markers.length) {
        markers.forEach(function (marker) { marker.setMap(null); });
        markers = [];
    }
}

jQuery(document).ready(function ($) {
    // init the Gmap
    initialize();

    $('.wbf-search-form').submit(function (e) {
        e.preventDefault();

        var searchText          = $('#wbfInputText').val();
        var searchCategory      = $('#wbfInputCategory').val();
        var searchRadius        = $('#wbfInputRadius').val();

        if ( searchText ) { request.query = searchText; } else { request.query = ''; }
        if ( searchCategory ) { request.types = [searchCategory]; } else { request.types = []; }
        if ( searchRadius ) { request.radius = parseInt(searchRadius); } else { request.radius = 100; }

        mapSearch();
    });

    $('#wbfInputRadius').change(function (e) {

        var radius = (parseInt($(this).val()));

        request.radius = radius;
        showRadius(request.location, radius);
    });

    $('.wbf-location-form').submit(function (e) {
        e.preventDefault();
        var address          = $('#wbfInputAddress').val();
        if (address) { geoCodeAddress(address); }
    });

});