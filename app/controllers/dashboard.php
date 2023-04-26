<?php

class Dashboard extends Controller {

	public function index(){
		header("Location:" . URL . "/public");
		die();
	}

	public function users(){
		$data['page_title'] = 'Dashboard';
		$users = $this->model("Users");
		$response = $users->getUsers();

		$data['users'] = $response;
		$data['all_posts'] = '';

		$this->view("home/dashboard", $data);
	}

	public function articles($ID = []){
		$data['page_title'] = 'Dashboard';
		$posts = $this->model("Article");
		$response = $posts->getPostsAll();

		$data['all_posts'] = $response;
		$data['users'] = '';

		$this->view("home/dashboard", $data);
	}
}