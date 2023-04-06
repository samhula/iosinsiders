<?php

class Dashboard extends Controller {

	public function index(){
		$data['page_title'] = 'Dashboard';
		$this->view("home/dashboard", $data);
	}
}