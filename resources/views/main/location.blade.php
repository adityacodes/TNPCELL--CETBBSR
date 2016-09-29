@extends('layouts.app')

@section('content')




<div class="row clearfix" style="margin-top: 20px; margin-bottom: 20px; ">
	<div class="col-md-12">
		<div class="panel panel-default" style="padding: 20px;" >
			<div class="panel-heading">							
				<h3>Map</h3>
			</div>
			<div class="content" id="map" style="height: 350px;">

			</div>
		</div>				
	</div>
</div>





@endsection

@section('scripts')

	

	<script type="text/javascript">
		function initialize() {
			    var map;
			    var bounds = new google.maps.LatLngBounds();
			    var mapOptions = {
			        mapTypeId: google.maps.MapTypeId.TERRAIN
			    };
			                    
			    // Display a map on the page
			    map = new google.maps.Map(document.getElementById("map"), mapOptions);
			    map.setTilt(45);
			        
			    // Multiple Markers
			    var markers = [
			        ['Bhubaneswar Airport', 20.2546,85.8160],
			        ['College of Engineering And Technology', 20.2764,85.7758]
			    ];
			                        
			    // Info Window Content
			    var infoWindowContent = [
			        ['<div class="info_content">' +
			        '<h3>Bhubaneswar Airport</h3>' +
			        '<p>Biju Patnaik International Airport, also known as Bhubaneswar Airport, is situated in the city of Bhubaneswar, Odisha, India. It is the sole international airport in the state.</p>' +        '</div>'],
			        ['<div class="info_content">' +
			        '<h3>College Of Engineering And Technology</h3>' +
			        '<p>The College of Engineering and Technology, Bhubaneswar is a government engineering institution in Bhubaneswar, the capital of Odisha, India.</p>' +
			        '</div>']
			    ];
			        
			    // Display multiple markers on a map
			    var infoWindow = new google.maps.InfoWindow(), marker, i;
			    
			    // Loop through our array of markers & place each one on the map  
			    for( i = 0; i < markers.length; i++ ) {
			        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
			        bounds.extend(position);
			       marker = new google.maps.Marker({
			            position: position,
			            map: map,
			            title: markers[i][0]
			        });
			        
			        // Allow each marker to have an info window    
			        google.maps.event.addListener(marker, 'click', (function(marker, i) {
			            return function() {
			                infoWindow.setContent(infoWindowContent[i][0]);
			                infoWindow.open(map, marker);
			            }
			        })(marker, i));

			        // Automatically center the map fitting all markers on the screen
			        map.fitBounds(bounds);
			    }

			    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
			    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
			        this.setZoom(13);
			        google.maps.event.removeListener(boundsListener);
			    });


			     directionsDisplay = new google.maps.DirectionsRenderer();
			    var directionsService = new google.maps.DirectionsService();

			    var start = new google.maps.LatLng(20.2546,85.8160);
				    var end = new google.maps.LatLng(20.2764,85.7758);
				    var request = {
				      origin: start,
				      destination: end,
				      travelMode: google.maps.TravelMode.DRIVING
				    };
				    directionsService.route(request, function(response, status) {
				      if (status == google.maps.DirectionsStatus.OK) {
				        directionsDisplay.setDirections(response);
				        directionsDisplay.setMap(map);
				      } else {
				        alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
				      }
				    });
			    
			}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo2GUGzTbJyVTYQGdSZsaXYkLHGVxVYns&callback=initialize"></script>


@endsection