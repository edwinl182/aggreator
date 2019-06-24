//javascript.js
//set map options
var myLatLng = { lat: 51.5, lng: -0.1 };
var mapOptions = {
    center: myLatLng,
    zoom: 7,
    mapTypeId: google.maps.MapTypeId.ROADMAP

};

//create map
var map1 = new google.maps.Map(document.getElementById('googleMap1'), mapOptions);

//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

//create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();

//bind the DirectionsRenderer to the map
directionsDisplay.setMap(map1);


//define calcRoute function
function calcRoute() {
    //create request
    var request = {
        origin: document.getElementById("from1").value,
        destination: document.getElementById("to1").value,
        travelMode: google.maps.TravelMode.DRIVING, //WALKING, BYCYCLING, TRANSIT
        unitSystem: google.maps.UnitSystem.IMPERIAL
    }

    //pass the request to the route method
    directionsService.route(request, function (result, status) {
        if (status == google.maps.DirectionsStatus.OK) {

            //Get distance and time
            $("#output1").html("<div class='alert-info'> Driving distance: " + result.routes[0].legs[0].distance.text + ".</div>");

            //display route
            directionsDisplay.setDirections(result);
        } else {
            //delete route from map
            directionsDisplay.setDirections({ routes: [] });
            //center map in London
            map.setCenter(myLatLng);

            //show error message
            $("#output1").html("<div class='alert-danger'>Could not retrieve driving distance.</div>");
        }
    });

}



//create autocomplete objects for all inputs
var options = {
    types: ['(cities)'],
    componentRestrictions: {country: "IN"}
}

var input1 = document.getElementById("from1");
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

var input2 = document.getElementById("to1");
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
