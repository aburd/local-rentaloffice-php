<?php
class Location extends CI_Controller {
  // Default for locations
  public function index()
  {
    // Whoops, page not found
    show_404();
  }

  /*
   * Show all locations
   */
  public function all()
  {
    // Try one of these cities instead
    $data['title'] = '拠点情報';
		
		// Get data to be passed to pages
    $locationsJson = file_get_contents(APPPATH.'data/locations.json');
    $locations = json_decode($locationsJson, true);
		// oragnize city into areas
    $locationsByArea = $this->organizeAllByArea($locations);
    $data['byArea'] = $locationsByArea;
		$data['dictionary'] = [
			'tokyo' => '東京',
			'yokohama' => '横浜',
			'osaka' => '大阪',
			'nagoya' => '名古屋',
			'fukuoka' => '福岡'
		];
		
		// extra script to be passed to footer
		$data['extraScripts'] = array();
		
    $this->load->view('templates/header', $data);
    $this->load->view('templates/all', $data);
    $this->load->view('templates/footer', $data);
  }

  /**************************
   * These functions are the shared logic throughout all the city pages and location pages
   */
  private function locationLogic($locationUrl, $locations) {
    // Filter down to the location that matches the URL
    $locationSearchRes = array_filter($locations, function ($location) use ($locationUrl) {
      return ($location['url'] === $locationUrl);
    });
    // reset array values
    $locationSearchRes = array_values($locationSearchRes);
    // simple error checking
    if(sizeof($locationSearchRes) > 0){
      /*
       * Get pictures for top slider
       */ 
      $folder_path = __DIR__ . '/../..'. asset_url() . 'img/locations/' . $locationUrl . '/'; //image's folder path
      
      $num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);
      $folder = opendir($folder_path);
      
      $filePaths = [];
      if($num_files > 0)
      {
        while(false !== ($file = readdir($folder)))
        {
          $file_path = $folder_path.$file;
          $shortened_path = 'img/locations/' . $locationUrl . '/' . $file;
          $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
          if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp')
          {
            array_push($filePaths, $shortened_path);
          }
        }
      }
      closedir($folder);

      // // Data passed to template
      $data['pictures'] = $filePaths;
      $data['location'] = $locationSearchRes[0];
      $data['title'] = $locationSearchRes[0]['namae'];
			// extra script to be passed to footer
      $data['extraScripts'] = array(
        asset_url()."js/jquery.flexslider.js",
        asset_url()."js/location-flexslider.js"
      );
    } else {
      // Whoops!
      show_404();
    }    

    // Load Template
    $this->load->view('templates/header', $data);
    $this->load->view('templates/locationpage', $data);
    $this->load->view('templates/footer', $data);
  }

  private function cityLogic($cityJa, $cityEn, $location) {
		// Load helpers for use in views
		$this->load->helper('html');
		$this->load->helper('url');
    
		// Get data to be passed to pages
    $locationsJson = file_get_contents(APPPATH.'data/locations.json');
    $locations = json_decode($locationsJson, true);

    // oragnize city into areas
    $locationsByArea = $this->organizeByArea($locations[$cityEn]);
    $data['byArea'] = $locationsByArea;
		
		// extra script to be passed to footer
		$data['extraScripts'] = array(
			asset_url()."js/city-maps.js"
		);

    // Set the title to be displayed on the page (the japanese name)
    $data['title'] = $cityJa;
    // Select the city in the data we are interested in, uses the english name
    $data['locations'] = $locations[$cityEn];
    // Also pass the name of the city in EN to the data variable
    $data['city'] = $cityEn;
    $data['cityJa'] = $cityJa;

    if( $location === 'default' )
    {
      // Shows all of the locations within that city
      $this->load->view('templates/header', $data);
      $this->load->view('templates/locations', $data);
      $this->load->view('templates/footer', $data);
    }
    else
    {
      $this->locationLogic($location, $locations[$cityEn]);
    }

    // Cache the page to speed up later loads
  }

  // Organizes locations in city by area
  private function organizeByArea($locations) {
    $organized;
    foreach($locations as $location) {
      $area = $location['area'];
      // location to correct array
      $organized[$area][] = $location;
    }
    // return var_dump($locations);
    return $organized;
  }
	
	// Organizes all locations into an object with just arrays of areas
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

  /**************************
   * These functions basically instantiate the existence of the city
   * Notice that the Japanese name is given first, followed by the english name
   * Location is passed into the shared logic function, this is the 'url' type name of a location
   */
  public function tokyo($location = 'default')
  {
    $this->cityLogic('東京', 'tokyo', $location);
  }

  public function yokohama($location = 'default')
  {
    $this->cityLogic('横浜', 'yokohama', $location);
  }

  public function osaka($location = 'default')
  {
    $this->cityLogic('大阪', 'osaka', $location);
  }

  public function nagoya($location = 'default')
  {
    $this->cityLogic('名古屋', 'nagoya', $location);
  }

  public function fukuoka($location = 'default')
  {
    $this->cityLogic('福岡', 'fukuoka', $location);
  }
}
?>
