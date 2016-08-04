/**
 * Created by srapin on 30.07.16.
 */

var service         = null;
var map             = null;
var markers         = [];
var infowindow      = null;

var API_KEY         = 'AIzaSyDCelPpT9KgfceVGY8cBRFc4D-n8rbT9-0';
var API_PAGESPEED   = 'https://www.googleapis.com/pagespeedonline/v2/runPagespeed';

// Specify location, radius and place types for your Places API search.
var request         = {};

function initialize() {
    var pyrmont = new google.maps.LatLng(46.522386, 6.628718);

    request = {
        location: pyrmont,
        radius: 300,
        types: ['store']
    };

    map = new google.maps.Map(document.getElementById('map'), {
        center: pyrmont,
        zoom: 15,
        scrollwheel: false
    });

    infowindow  = new google.maps.InfoWindow({ content: '' });
}

function mapSearch()
{
    markers.forEach(function (marker) {
       marker.setMap(null);
    });
    markers = [];

    // Create the PlaceService and send the request.
    // Handle the callback with an anonymous function.
    service = new google.maps.places.PlacesService(map);
    service.textSearch(request, function(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
                var place = results[i];
                // If the request succeeds, draw the place location on
                // the map as a marker, and register an event to handle a
                // click on the marker.
                var marker = new google.maps.Marker({
                    map: map,
                    position: place.geometry.location,
                    title: place.name,
                    id: place.id,
                    place_id: place.place_id,
                    vicinity: place.vicinity,
                    types: place.types
                });

                markers.push(marker);

                marker.addListener('click', function () {

                    infowindow.close();
                    infowindow  = new google.maps.InfoWindow({
                        content:    '<div id="content">'+
                                        '<h3 id="firstHeading" class="firstHeading">' + this.title + '</h3>'+
                                        '<div id="bodyContent">'+
                                            '<p><a href="#" class="btn btn-primary btn-analyze" data-id="' + this.place_id + '">Analyze</a></p>'+
                                        '</div>'+
                                    '</div>'
                    });
                    infowindow.open(map, this);

                    $('.btn-analyze').on('click', function () {
                        var placeID = $(this).attr('data-id');
                        analyze(placeID);
                    });
                });
            }
        }
    });
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

                    $('.json-result .title').html(title);
                    $('.json-result .score-speed').html(score_speed);
                    $('.json-result .score-usability').html(score_usability);
                    $('.json-result .image').attr('src', 'data:image/jpeg;base64,' + screenshot);

                });
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
                var formatted_address       = results[0].formatted_address;

                map.setCenter(location);
                request.location = location;

                $('#wbfInputAddress').val(formatted_address);
            } else {
                console.log('Geocode was unable to geocode: ' + status);
            }
        });
    }
}

// Run the initialize function when the window has finished loading.
//google.maps.event.addDomListener(window, 'load', initialize);

jQuery(document).ready(function ($) {
    // init the Gmap
    initialize();

    $('.wbf-search-form').submit(function (e) {
        e.preventDefault();

        var searchText          = $('#wbfInputText').val();
        var searchCategory      = $('#wbfInputCategory').val();

        if ( searchText ) {
            request.query     = searchText;
        } else {
            request.query     = '';
        }

        if ( searchCategory ) {
            request.types       = [searchCategory];
        } else {
            request.types       = [];
        }

        mapSearch();
    });

    $('.wbf-location-form').submit(function (e) {
        e.preventDefault();

        var address          = $('#wbfInputAddress').val();

        if (address) {
            geoCodeAddress(address);
        }

    });

});