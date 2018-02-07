$(function () {
    var i = "box",
        n = {
            init: function () {
                this.scroll_animate(), $("#b2top").click(function () {
                    $("html, body").stop().animate({
                        scrollTop: 0
                    })
                }), $("#overview-aside-nav ul").navscroll({
                    sec: 1e3,
                    url_hash: !1,
                    head_hight: 0
                }), $("#overview-mainnav").navscroll({
                    sec: 1e3,
                    url_hash: !1,
                    head_hight: 0
                })
            },
            scroll_animate: function () {
                $(window).scroll(function () {
                    for (var i = window.innerHeight, n = $(".anim").length, o = 0; o < n; o++) $(window).scrollTop() > $(".anim").eq(o).offset().top - i / 4 && $(".anim").eq(o).addClass("on")
                })
            },
        };
    n.init()
});













// Google Map Custom js
var marker;
var image = 'images/map-marker.png';
function initMap() {
    var myLatLng = { lat: -22.987879, lng: -43.310637 };

    // Specify features and elements to define styles.
    var styleArray = [
        { elementType: 'geometry', stylers: [{ color: '#242f3e' }] },
        { elementType: 'labels.text.stroke', stylers: [{ color: '#242f3e' }] },
        { elementType: 'labels.text.fill', stylers: [{ color: '#746855' }] },
        {
            featureType: 'administrative.locality',
            elementType: 'labels.text.fill',
            stylers: [{ color: '#d59563' }]
        },
        {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{ color: '#d59563' }]
        },
        {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{ color: '#263c3f' }]
        },
        {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{ color: '#6b9a76' }]
        },
        {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{ color: '#38414e' }]
        },
        {
            featureType: 'road',
            elementType: 'geometry.stroke',
            stylers: [{ color: '#212a37' }]
        },
        {
            featureType: 'road',
            elementType: 'labels.text.fill',
            stylers: [{ color: '#9ca5b3' }]
        },
        {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{ color: '#746855' }]
        },
        {
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [{ color: '#1f2835' }]
        },
        {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{ color: '#f3d19c' }]
        },
        {
            featureType: 'transit',
            elementType: 'geometry',
            stylers: [{ color: '#2f3948' }]
        },
        {
            featureType: 'transit.station',
            elementType: 'labels.text.fill',
            stylers: [{ color: '#d59563' }]
        },
        {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{ color: '#17263c' }]
        },
        {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{ color: '#515c6d' }]
        },
        {
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [{ color: '#17263c' }]
        },
        {
            "featureType": "water",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        }
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        scrollwheel: false,
        // Apply the map style array to the map.
        styles: styleArray,
        zoom: 12,
        
    });

    var directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
    });

    // Create a marker and set its position.
    marker = new google.maps.Marker({
        map: map,
        icon: image,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: myLatLng
    });
    marker.addListener('click', toggleBounce);
}

function toggleBounce() {
    if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
    } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}
