<?php

class Logout extends Controller{
	function index(){
		$user = $this->model("user");
		$user->logout();
	}
}