<?php

class Upload extends Controller {
	
	public function index(){
		header("Location:" . URL . "/public/upload/article");
		die();
	}

	public function article(){
		if(isset($_SESSION['username'])){
			$user = $this->model("user");

			$result = True;

			// if(!$result = $user->isLoggedIn()){
			// 	header("Location:" . URL . "/public/login");
			// 	die;
			// }

			if(isset($_POST['title']) && isset($_FILES['file'])){
				$uploader = $this->model("upload_article");
				$uploader->upload($_POST, $_FILES);
			}

			$data['page_title'] = "Upload";
			$this->view("home/upload", $data);
		}
		else {
			header("Location:" . URL . "/public/");
			die();
		}
	}
}