<?php

class Edit extends Controller{

	public function index($link = ''){

		if($link == ''){
			$data['page_title'] == "Article not found";
			header("Location:" . URL . "/public/");
			die();
		}
		else {
			$post = $this->model('article');
			$response = $post->getEditPost($link);

			if($response != ''){
				$data['post'] = $response;

				$data['page_title'] = "Edit";
				$this->view('home/edit', $data);
			}
			else {
				header("Location:" . URL . "/public/");
				die();
			}

			$update = $post->updatePost($_POST, $_FILES = '', $link);
		}
	}
}