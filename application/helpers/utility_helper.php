<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/*Function used to return static assets path*/
	if ( ! function_exists('asset_url'))
	{
	 function asset_url()
	 {
		 return base_url().'_static/';
	 }
	}
	/*Function used to return home path*/
	if( ! function_exists('home_url') )
	{
		function home_url()
		{
			return ENVIRONMENT === "development" ? "/test/codeigniter/" : "/";
		}
	}
	if(! function_exists('make_script_tag'))
	{
		function make_script_tags($urls)
		{
			$res = "";
			foreach($urls as $url) {
				$res .= '<script type="text/javascript" src="'.$url.'"></script>';
			}
			return $res;
		}
	}
?>
