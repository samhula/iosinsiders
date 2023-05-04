<?php

class App 
{
	// Setting the URL parameters 
	private $controller = "home";
	private $method = "index";
	private $params = [];

	// Constructor to parse URL 
	public function __construct()
	{

		$url = $this->parseURL();

		// Check to see if the controller for $url[0] exists
		// if not, then redirect to the homepage
 		if(file_exists("../app/controllers/". strtolower($url[0]) .".php"))
 		{
 			$this->controller = strtolower($url[0]);
 			unset($url[0]);
 		}

 		require "../app/controllers/". $this->controller .".php";
 		$this->controller = new $this->controller;

 		// Check to see if there are any remaining parameter values
 		// if not, set params to an empty array
 		if(isset($url[1]))
 		{
 			if(method_exists($this->controller, $url[1]))
 			{
 				$this->method = $url[1];
 				unset($url[1]);
 			}
 		}

 		//Run the class and method
 		$this->params = array_values($url);
 		call_user_func_array([$this->controller,$this->method], $this->params);
	}

	// Function to grab and parse the URL
	private function parseURL(){
		$url = isset($_GET['url']) ? $_GET['url'] : "home";
		return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
	}
}