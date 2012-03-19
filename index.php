<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDnIsj5AWRoBSEtKoIWvoEUcb19tyZonMc&sensor=false"></script>
    <script type="text/javascript">
	function initialize() {
        var myOptions = {
        	center: new google.maps.LatLng(<?=$_SERVER["GEOIP_LATITUDE"]?>, <?=$_SERVER["GEOIP_LONGITUDE"]?>),
			zoom: 6,
			mapTypeControl: false,
			streetViewControl : false,
			panControl : false,
			zoomControl: true,
			mapTypeId: google.maps.MapTypeId.TERRAIN
		};
		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		google.maps.event.addListener(map, 'click', function(event) {
			console.log("[event][click]" + JSON.stringify(event));
		});
		google.maps.event.addListener(map, 'dblclick', function(event) {
			console.log("[event][dblclick]" + JSON.stringify(event));
		});
		google.maps.event.addListener(map, 'mouseup', function(event) {
			console.log("[event][mouseup]" + JSON.stringify(event));
		});
	}
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>