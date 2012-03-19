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
			zoom: 8,
			mapTypeControl: false,
			streetViewControl : false,
			panControl : false,
			zoomControl: true,
			maxZoom : 8,
//			mapTypeId: google.maps.MapTypeId.TERRAIN
			mapTypeId: google.maps.MapTypeId.SATELLITE
		};
		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		google.maps.event.addListener(map, 'click', function(e) {
			console.log("[event][click]" + JSON.stringify(e));
		});
		google.maps.event.addListener(map, 'dblclick', function(e) {
			console.log("[event][dblclick]" + JSON.stringify(e));
		});
		google.maps.event.addListener(map, 'center_changed', function() {
			console.log("[event][center_changed] (no-args)");
		});
		google.maps.event.addListener(map, 'dragend', function() {
			console.log("[event][dragend] (no-args)");
		});
	}
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>