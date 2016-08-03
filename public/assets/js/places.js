/**
 * Created by srapin on 30.07.16.
 */

var map             = null;
var markers         = [];
var infowindow      = null;

// Specify location, radius and place types for your Places API search.
var request         = {};

// TODO: Add geocoder : https://developers.google.com/maps/documentation/javascript/examples/geocoding-simple

function initialize() {
    var pyrmont = new google.maps.LatLng(46.522386, 6.628718);

    request = {
        location: pyrmont,
        radius: 100,
        types: ['store']
    };

    map = new google.maps.Map(document.getElementById('map'), {
        center: pyrmont,
        zoom: 15,
        scrollwheel: false
    });

    infowindow  = new google.maps.InfoWindow({ content: '' });

    mapSearch('');
}

function mapSearch(search)
{
    markers.forEach(function (marker) {
       marker.setMap(null);
    });
    markers = [];

    // Create the PlaceService and send the request.
    // Handle the callback with an anonymous function.
    var service = new google.maps.places.PlacesService(map);
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
                        content: '<div id="content">'+
                        '<h3 id="firstHeading" class="firstHeading">' + this.title + '</h3>'+
                        '<div id="bodyContent">'+
                        '<p><a href="#" class="btn btn-primary">Analyze</a></p>'+
                        '</div>'+
                        '</div>'
                    });
                    infowindow.open(map, this);

                    /*service.getDetails({placeId: this.place_id}, function (placeResult, placesServiceStatus) {
                     if (placesServiceStatus == google.maps.places.PlacesServiceStatus.OK) {
                     placeInfos = placeResult;

                     infowindow.close();
                     infowindow  = new google.maps.InfoWindow({
                     content: '<div id="content">'+
                     '<div id="siteNotice">'+
                     '</div>'+
                     '<h3 id="firstHeading" class="firstHeading">' + placeInfos.name + '</h3>'+
                     '<div id="bodyContent">'+
                     '<p>Place ID : ' + placeInfos.place_id + '</p>'+
                     '<p>Adresse : ' + placeInfos.formatted_address + '</p>'+
                     '<p>Phone number : ' + placeInfos.formatted_phone_number + '</p>'+
                     '<p>Name : ' + placeInfos.name + '</p>'+
                     '<p>Google Page : ' + placeInfos.url + '</p>'+
                     '<p>Website : ' + placeInfos.website + '</p>'+
                     '</div>'+
                     '</div>'
                     });
                     infowindow.open(map, marker);

                     } else {
                     console.log('Impossible de récupérer les informations.');
                     }
                     });*/
                });
            }
        }
    });
}

// Run the initialize function when the window has finished loading.
//google.maps.event.addDomListener(window, 'load', initialize);

jQuery(document).ready(function ($) {
    // init the Gmap
    initialize();

    if ($('.json-loader').length) {

        var title = '';
        var score_speed = '';
        var score_usability = '';
        var screenshot = '';

        $.getJSON('assets/score.json', function (data) {
            console.log(data);

            title = data.title;
            score_speed = data.ruleGroups.SPEED.score;
            score_usability = data.ruleGroups.USABILITY.score;
            screenshot = data.screenshot.data;

            screenshot = screenshot.replace(/_/g, '/');
            screenshot = screenshot.replace(/-/g, '+');

            $('.json-loader pre').html(data.toJSON);
            $('.json-result .title').html(title);
            $('.json-result .score-speed').html(score_speed);
            $('.json-result .score-usability').html(score_usability);
            $('.json-result .image').attr('src', 'data:image/jpeg;base64,' + screenshot);

        });
    }

    $('.wbf-search-form').submit(function (e) {
        e.preventDefault();

        var searchText          = $('#wbfInputText').val();
        var searchCategory      = $('#wbfInputCategory').val();

        if (searchCategory) {
            request.keyword = searchCategory;
            request.types   = [searchCategory];
        }

        mapSearch('');
    });

});