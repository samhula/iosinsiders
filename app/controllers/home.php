 <?php

class Home extends Controller {

	public function index(){
		$data['page_title'] = 'Home';
		$posts = $this->model("article");
		$top = $posts->getTopPost(51);
		$response = $posts->getPostsPublished();
		$latest = $posts->getPostsLatest();

		$data['top_post'] = $top;
		$data['posts'] = $response;
		$data['posts_latest'] = $latest;

		$this->view("home/index", $data);
	}
}