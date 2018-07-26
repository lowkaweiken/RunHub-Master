function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(3.092413, 101.559801),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.MAP
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}