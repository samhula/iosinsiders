<?php

class Article extends Controller {

	public function index($id = ''){
		$story = $this->model('Story');
		$story->id = $id;

		$this->view('home/article', ['page_title' => 'Article','id' => $story->id]);
	}

}