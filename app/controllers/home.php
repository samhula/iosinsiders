 <?php

class Home extends Controller {

	public function index(){
		$data['page_title'] = 'Home';
		$posts = $this->model("article");
		$response = $posts->getPostsPublished();

		$data['posts'] = $response;

		$this->view("home/index", $data);
	}
}