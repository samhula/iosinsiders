<?php

Class upload_article {

	public function upload($POST, $FILES){
		$DB = new Database();
		$_SESSION['error'] = "";

		if(isset($POST['title']) && isset($FILES['file'])){

			$allowed[] = "image/jpeg";

			if($FILES['file']['name'] != "" && $FILES['file']['error'] == 0 && in_array($FILES['file']['type'], $allowed)){
				show($POST);
				show($FILES);
				die;
				move_uploaded_file($FILES['file']['tmp_name'], $destination);
			}
			else {
				$_SESSION['error'] == "Error uploading file";
			}

			if($_SESSION['error'] == ""){
			// Saving to the database
			$arr['title'] = $POST['title'];
			$arr['description'] = $POST['description'];
			$arr['category'] = $POST['category'];
			$arr['article-content'] = $POST['article-content'];
			$arr['img_url'] = "image_url_address";
			$arr['date'] = date("Y-m-d H:i:s");
			$arr['author'] = $_SESSION['username'];
			$arr['published'] = "0";
			$arr['article-content'] = $POST['article-content'];

			$query = "insert into articles (ArticleID, ArticleTitle, ArticleDescription, ArticleCategory, ArticleDate, MainImgURL, ArticleContent, ArticleAuthor, published) values (:title, :description, :category, :date, :img_url, :article-content, :author, :published)";
			$data = $DB->write($query, $arr);

				if($data){
					header("Location: " . URL);
					die();
				}
				else {
					$_SESSION['error'] = "Upload error";
				}
			}
		}
	}
}