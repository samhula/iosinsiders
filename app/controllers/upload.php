<?php

class Upload extends Controller {
	
	public function index(){
		$data['page_title'] = 'Upload';
		$this->view("home/upload", $data);
	}
}