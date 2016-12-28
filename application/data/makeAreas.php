<!--
// Javascript implemention

function organize(locs){
	var res = {}
	Object.keys(locs).forEach(function(city){
		res[city] = locs[city].map(function(location){
			return location.area
		}).reduce(function(allArea, area){
			if(allArea.indexOf(area) <= -1){ 
				allArea.push(area); return allArea 
			} else {
				return allArea
			}
		}, [])
	})
	return res
}
-->
<?php 
	// Organizes locations in city by area
	function organizeAllByArea($allLocations) {
    $res = [];
		// Callbacks for map and reduce
		function mapFunction($location) 
		{
			return $location['area'];
		}
		function reduceFunction($allArea, $area)
		{
			$isPresent = in_array( $area, $allArea );
			if(!$isPresent) 
			{ 
				array_push($allArea, $area); 
				return $allArea;  
			}
			else 
			{ 
				return $allArea; 
			}
		}
		
		foreach($allLocations as $city => $locations) {
			$mapped = array_map("mapFunction", $locations);
			$reduced = array_reduce($mapped, "reduceFunction", []);
			$res[$city] = $reduced;
		}
		return $res;
  }
?>