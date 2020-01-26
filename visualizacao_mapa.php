<?php 
	$coordenadasGeo = array(
	  'ARACAJU' => "new google.maps.LatLng(-10.908999,-37.074251)", 
	  'BELEM' => "new google.maps.LatLng(-1.453987,-48.502092)", 
	  'BELO_HORIZONTE' => "new google.maps.LatLng(-19.918888,-43.938625)", 
	  'BOA_VISTA' => "new google.maps.LatLng(2.820458,-60.671668)", 
	  'BRASILIA' => "new google.maps.LatLng(-15.69312,-47.941818)", 
	  'CAMPINA_GRANDE' => "new google.maps.LatLng(-20.421865,-54.652405)", 
	  'CUIBA' => "new google.maps.LatLng(-15.598733,-56.094868)", 
	  'CURITIBA' => "new google.maps.LatLng(-25.368846,-49.256358)", 
	  'FLORIANOPOLIS' => "new google.maps.LatLng(-27.5966,-48.549317)", 
	  'FORTALEZA' => "new google.maps.LatLng(-3.718405,-38.543398)", 
	  'GOIANIA' => "new google.maps.LatLng(-16.676895,-49.267774)", 
	  'JOAO_PESSOA' => "new google.maps.LatLng(-7.115319,-34.861057)", 
	  'MACEIO' => "new google.maps.LatLng(-9.665654,-35.735278)", 
	  'MANAUS' => "new google.maps.LatLng(-3.106321,-60.026393)", 
	  'NATAL' => "new google.maps.LatLng(-5.794441,-35.211014)", 
	  'PALMAS' => "new google.maps.LatLng(-10.168883,-48.331693)", 
	  'PORTO_ALEGRE' => "new google.maps.LatLng(-30.027814,-51.228734)", 
	  'PORTO_VELHO' => "new google.maps.LatLng(-8.761857,-63.901947)", 
	  'RECIFE' => "new google.maps.LatLng(-8.054274,-34.881257)", 
	  'RIO_BRANCO' => "new google.maps.LatLng(-9.973986,-67.807621)", 
	  'RIO_DE_JANEIRO' => "new google.maps.LatLng(-22.903415,-43.209922)", 
	  'SALVADOR' => "new google.maps.LatLng(-12.970393,-38.512405)", 
	  'SAO_LUIZ' => "new google.maps.LatLng(-2.528095,-44.305229)", 
	  'SAO_PAULO' => "new google.maps.LatLng(-23.548901,-46.638812)", 
	  'TERESINA' => "new google.maps.LatLng(-5.088636,-42.801719)", 
	  'VITORIA' => "new google.maps.LatLng(-20.313278,-40.298116)"
	);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDCvWZ9sshlPhAHQrzEWAQ5S-wvsiEQPYs&sensor=true">
    </script>
    <script type="text/javascript">
     	var directionsDisplay;
		var directionsService = new google.maps.DirectionsService();
		var map;

		function initialize() {
		  directionsDisplay = new google.maps.DirectionsRenderer();
		  var mapOptions = {
		    center: new google.maps.LatLng(-16.045813,-51.694338),
		    zoom: 4,
		    mapTypeId: google.maps.MapTypeId.ROADMAP,
		  }
		  map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		  directionsDisplay.setMap(map);
		}

	
	function tracarRotas() {
	  var rotas = [
	    <?php
	    	echo $coordenadasGeo[$map[$CAPITAL_ORIGEM]].',';
	    	foreach ($cromossomo as $key => $value) {
				echo $coordenadasGeo[$map[$value]].',';
			}
			echo $coordenadasGeo[$map[$CAPITAL_ORIGEM]];
	    ?>
	  ];
	  var mapa = new google.maps.Polyline({
	    path: rotas,
	    strokeColor: "#FF0000",
	    strokeOpacity: 1.0,
	    strokeWeight: 2
	  });

	  
	  mapa.setMap(map);
	}
	
	function addMarcadores() {
	  <?php 
	    $i = 1;
	  	echo " var image = 'flags/".$i.".png';
		  	   var myLatLng = ".$coordenadasGeo[$map[$CAPITAL_ORIGEM]].";
		  	   var beachMarker = new google.maps.Marker({
		      	   position: myLatLng,
		      	   map: map,
		      	   icon: image
		  		});";
	    $i++;
	  	foreach($cromossomo as $key => $value){
		  echo " var image = 'flags/".$i.".png';
		  		 var myLatLng = ".$coordenadasGeo[$map[$value]].";
		  		 var beachMarker = new google.maps.Marker({
		      	 	position: myLatLng,
		      		map: map,
		      		icon: image
		  		});";
		  $i++;
	    } 
		echo " var image = 'flags/".$i.".png';
		  	   var myLatLng = ".$coordenadasGeo[$map[$CAPITAL_ORIGEM]].";
		  	   var beachMarker = new google.maps.Marker({
		      	   position: myLatLng,
		      	   map: map,
		      	   icon: image
		  		});";
	 ?>
	}

	
  </script>
  </head>
  <body onload="initialize();addMarcadores();tracarRotas()">
	<div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>