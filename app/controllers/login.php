<?php

class Login extends Controller {
	public function index (){
		$data['page_title'] = "Login";

		if(isset($_POST['email'])){
 	 		$user = $this->model("user");
 	 		$user->signup($_POST);

 	 	}
 	 	elseif(isset($_POST['username']) && !isset($_POST['email'])){

 	 		$user = $this->model("user");
 	 		$user->login($_POST);
 	 	}

		$this->view("home/login", $data);
	}
}