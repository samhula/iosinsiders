<?php

class upload_article {

	public function upload($POST, $FILES){
		$DB = new Database();
		$_SESSION['error'] = "";

		if(isset($POST['title']) && isset($FILES['file'])){

			$allowed[] = "image/jpeg";

			if($FILES['file']['name'] != "" && $FILES['file']['error'] == 0 && in_array($FILES['file']['type'], $allowed)){
				$folder = "uploads/";

				if(!file_exists($folder)){
					mkdir($folder, 0777, true);
				}

				$destination = $folder . $FILES['file']['name'];

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
				$arr['ArticleTitle'] = $POST['title'];
				$arr['ArticleDescription'] = $POST['description'];
				$arr['ArticleCategory'] = $POST['category'];
				$arr['ArticleContent'] = $POST['articlecontent'];
				$arr['MainImgURL'] = "img url";
				$arr['ArticleDate'] = date("Y-m-d H:i:s");
				$arr['ArticleAuthor'] = $_SESSION['username'];
				$arr['published'] = "0";
				$arr['ArticleID'] = "0";

				show($FILES);
				show($arr);
				$query = "insert into articles (ArticleID, ArticleTitle, ArticleDescription, ArticleCategory, ArticleDate, MainImgURL, ArticleContent, ArticleAuthor, published) values (:ArticleID, :ArticleTitle, :ArticleDescription, :ArticleCategory, :ArticleDate, :MainImgURL, :ArticleContent, :ArticleAuthor, :published)";

				$data = $DB->write($query, $arr);

				if($data){
					header("Location: " . URL . "/public/");
					die();
				}
				else {
					$_SESSION['error'] = "Upload error";
				}
			}
		}
	}
}