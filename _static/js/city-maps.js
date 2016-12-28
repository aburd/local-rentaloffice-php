// Call initializer on scroll events
(function(){
	var $areas = $('h2.area');
//	for(var i = 0; i < $areas.length; i++) {
//
//	}
	$areas.each(function(i, area){
		initialize_map( area.id )
	})
})();

// Google Map Logic
function initialize_map ( areaId ) {
		var myOptions = {
				scrollwheel: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById("google-map-" + areaId), myOptions);

		var markers = [];
		var infoWindow = new google.maps.InfoWindow();
		var locationsData = JSON.parse(locs);
		var data = locationsData[areaId];

		// The following commented out function can be used to select the data from all Japan Locations,
		// not just tokyo.
//						var data = Object.keys(locationsData).reduce(function(all, city){
//							return all.concat(locationsData[city]);
//						}, []);

		var closeClickListenerFn = markerCloseClickFunction(i, latLng); 
		google.maps.event.addListener(infoWindow, 'closeclick', closeClickListenerFn);

		for (var i = 0; i < data.length; ++i) {
				var latLng = new google.maps.LatLng(data[i].Latitude, data[i].Longitude);
				var marker = new google.maps.Marker({
						position: latLng,
						draggable: true,
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						map: map
				});

				var clickListenerFn = markerClickFunction(i, latLng);
				google.maps.event.addListener(marker, 'click', clickListenerFn);

				markers.push(marker);
		}

		function markerClickFunction(i, latlng) {
				return function() {
						map.panTo(latlng);

						/* Info Window */
						var content = "<p class='map-popup'><img src='http://www.servcorp.co.jp/" + data[i].ThumbnailUrl + "' alt='" + data[i].ThumbnailAlias + "' width='70' /><span>" + data[i].address + "<br><a href='http://www.servcorp.co.jp/ja/locations/tokyo/" + data[i].url + "'> " + data[i].namae + " &raquo;</a> </span></p>";

						infoWindow.setContent(content);                    
						infoWindow.setPosition(latlng);
						infoWindow.open(map);
				};
		};

		function markerCloseClickFunction(i, latlng) { 
				return function() {
				};
		};

		// Auto Zoom to fit all markers

				var latlngbounds = new google.maps.LatLngBounds( );
				for ( var i = 0; i < data.length; i++ ) {
						latlngbounds.extend(new google.maps.LatLng(data[i].Latitude, data[i].Longitude));
				}
				map.fitBounds(latlngbounds);


		$(".lnkLocate").click(function() {
				var id = $(this).attr('id');
				$('html, body').animate({scrollTop: $("#google-map").offset().top - 20}, 1000);
				for (var i = 0; i < data.length; ++i) {
						if(id == data[i].Id){
								var latLng = new google.maps.LatLng(data[i].Latitude, data[i].Longitude);
								markerClickFunction(i, latLng)();
						}
				}
				return false;
		});
}
// Run once to Initialize on startup
//initialize_map('丸の内・大手町・日本橋');