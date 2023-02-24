<?php

class Home extends Controller {

	public function index(){
		$DB = new Database();
		// $DB->db_connect();

		$data['page_title'] = 'Home';
		$this->view("home/index", $data);
	}

}