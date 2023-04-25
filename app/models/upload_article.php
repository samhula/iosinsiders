<?php

class upload_article {

	public function upload($POST, $FILES){
		$DB = new Database();
		$_SESSION['error'] = "";

		if(isset($POST['title']) && isset($FILES['file'])){

			$allowed[0] = "image/jpeg";
			$allowed[1] = "image/png";

			if($FILES['file']['name'] != "" && $FILES['file']['error'] == 0 && in_array($FILES['file']['type'], $allowed)){
				$folder = "assets/";

				if(!file_exists($folder)){
					mkdir($folder, 0777, TRUE);
				}

				$destination = $folder . $FILES['file']['name'];
				move_uploaded_file($FILES['file']['tmp_name'], $destination);

				if($_SESSION['error'] == ""){
					// Saving to the database
					$arr['ArticleTitle'] = sanitiseInputs($POST['title']);
					$arr['ArticleDescription'] = sanitiseInputs($POST['description']);
					$arr['ArticleCategory'] = sanitiseInputs($POST['category']);
					$arr['ArticleContent'] = sanitiseInputs($POST['articlecontent']);
					$arr['MainImgURL'] = $destination;
					$arr['ArticleDate'] = sanitiseInputs(date("Y-m-d H:i:s"));
					$arr['ArticleAuthor'] = sanitiseInputs($_SESSION['username']);
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
}