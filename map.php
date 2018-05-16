 <html>
<head>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript" src="js/mapmarker.jquery.js"></script>>

<script type="text/javascript">
	// Use below link if you want to get latitude & longitude
	// http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude.php
	
	$(document).ready(function(){
	
		//set up markers 
		var myMarkers = {"markers": [
				{"latitude": "31.42866311735861", "longitude":"-98.61328125", "icon": "img/house.png", "baloon_text": 'This is <strong>Texas</strong>'},
				{"latitude": "35.101934057246055", "longitude":"-96.6796875", "icon": "img/castle.png", "baloon_text": 'This is <strong>Oklahoma</strong>'},
				{"latitude": "38.61687046392973", "longitude":"-98.876953125", "icon": "img/house.png", "baloon_text": 'This is <strong>Kansas</strong>'}
			]
		};
		
		//set up map options
		$("#map").mapmarker({
			zoom	: 5,
			center	: 'United States',
			markers	: myMarkers
		});

	});
</script>

</head>
<body>
<h1> grave Yard MAp</h1>
<div id="map" style="width: 550px; height: 450px; border:2px solid red;"></div>
</body>

</html>


