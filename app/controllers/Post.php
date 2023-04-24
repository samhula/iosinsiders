<?php

class Post extends Controller {

	public function index($link = ''){

		if($link == ''){
			$data['page_title'] == "Article not found";
			header("Location:" . URL . "/public/");
			die();
		}
		else {
			$post = $this->model('article');
			$response = $post->getSinglePost($link);

			if($response != ''){
				$data['post'] = $response;

				$data['page_title'] = "Article";
				$this->view('home/article', $data);
			}
			else {
				header("Location:" . URL . "/public/");
				die();
			}
		}
	}
}