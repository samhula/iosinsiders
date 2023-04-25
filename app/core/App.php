<?php

// class App {
	 
// 	// Setting the URL parameters 
// 	protected $controller = 'home';
// 	protected $method = 'index';
// 	protected $params = [];

// 	// Constructor to parse URL 
// 	public function __construct(){
// 		// $url[0] refers to the controller
// 		// $url[1] refers to the method
// 		// $url[2] refers to any parameters
// 		$url = $this->parseUrl();

// 		// Check to see if the controller for $url[0] exists
// 		// if not, then redirect to the homepage
// 		if (file_exists('../app/controllers/'.strtolower($url[0]).'.php')){
// 			$this->controller = $url[0];
// 			unset($url[0]);
// 		}
// 		require '../app/controllers/'.$this->controller.'.php';
// 		$this->controller = new $this->controller;

// 		// Checking to see if $url[1] exists
// 		// if not 
// 		if (isset($url[1])){
// 			if (method_exists($this->controller, $url[1])){
// 				$this->method = $url[1];
// 				unset($url[1]);
// 			}
// 		}

// 		// Check to see if there are any remaining parameter values
// 		// if not, set params to an empty array
// 		if (isset($url[2])){
// 			$this->params = array_values($url);
// 		}
// 		else {
// 			$this->params = [];
// 		}

// 		call_user_func_array([$this->controller, $this->method], $this->params);
// 	}

// 	// Function to grab and parse the URL
// 	protected function parseUrl(){
// 		if (isset($_GET['url'])){
// 			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
// 		}
// 		else {
// 			return "home";
// 		}
// 	}

// }

Class App 
{
	private $controller = "home";
	private $method = "index";
	private $params = [];

	public function __construct()
	{

		$url = $this->parseURL();

 		if(file_exists("../app/controllers/". strtolower($url[0]) .".php"))
 		{
 			$this->controller = strtolower($url[0]);
 			unset($url[0]);
 		}

 		require "../app/controllers/". $this->controller .".php";
 		$this->controller = new $this->controller;

 		if(isset($url[1]))
 		{
 			if(method_exists($this->controller, $url[1]))
 			{
 				$this->method = $url[1];
 				unset($url[1]);
 			}
 		}

 		//run the class and method
 		$this->params = array_values($url);
 		call_user_func_array([$this->controller,$this->method], $this->params);
	}

	private function parseURL(){
		$url = isset($_GET['url']) ? $_GET['url'] : "home";
		return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
	}
}