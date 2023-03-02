<?php

// Default controller
class Controller {
	
	// Calling the model 
	public function model($model){
		if(file_exists('../app/models/'.$model.'.php')){
			require_once '../app/models/'.$model.'.php';
			return new $model();
		}
		return false;
	} 

	// Calling the view
	// Gets the necessary files in the views and passes
	// any data inside to the view 
	public function view($view, $data = []){
		 require_once '../app/views/'.$view.'.php';
	}
}