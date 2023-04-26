<?php

class Article {
	public function getPostsPublished(){
		$query = "select * from articles WHERE published='1' order by ArticleDate DESC limit 12";

		$DB = new Database(); 
		$data = $DB->read($query);

		if(is_array($data)){
			return $data;
		}
		return false;
	}

	public function getPostsAll(){
		$query = "select * from articles order by ArticleDate";

		$DB = new Database(); 
		$data = $DB->read($query);

		if(is_array($data)){
			return $data;
		}
		return false;
	}

	public function getPostsLimited($num){
		$this->$limit = $num;
	}

	public function getSinglePost($link){
		$query = "select * from articles WHERE ArticleID= :link AND published='1' limit 1";
		$arr['link'] = $link;

		$DB = new Database(); 
		$data = $DB->read($query, $arr);

		if(is_array($data)){
			return $data[0];
		}
		return false;
	}

	public function getEditPost($link){
		$query = "select * from articles WHERE ArticleID= :link limit 1";
		$arr['link'] = $link;

		$DB = new Database(); 
		$data = $DB->read($query, $arr);

		if(is_array($data)){
			return $data[0];
		}
		return false;
	}

	public function updatePost($POST, $FILES = '', $ID){
		$DB = new Database();
		$_SESSION['error'] = "";

		if (isset($POST['delete-article'])){
			$this->deletePost($ID);
			header("Location: " . URL . "/public/dashboard/articles");
			die();
		}
		else {
			if(isset($POST['title'])){
			$allowed[0] = "image/jpeg";
			$allowed[1] = "image/png";

			// if($FILES['file']['name'] != "" && $FILES['file']['error'] == 0 && in_array($FILES['file']['type'], $allowed)){
			// 	$folder = "assets/";

			// 	if(!file_exists($folder)){
			// 		mkdir($folder, 0777, TRUE);
			// 	}

			// 	$destination = $folder . $FILES['file']['name'];
			// 	move_uploaded_file($FILES['file']['tmp_name'], $destination);

				if($_SESSION['error'] == ""){
					// Saving to the database
					$ArticleTitle = sanitiseInputs($POST['title']);
					$ArticleDescription = sanitiseInputs($POST['description']);
					$ArticleCategory = sanitiseInputs($POST['category']);
					$ArticleContent = sanitiseInputs($POST['articlecontent']);
					$MainImgURL = $destination;
					$ArticleDate = sanitiseInputs(date("Y-m-d H:i:s"));
					$ArticleAuthor = sanitiseInputs($_SESSION['username']);
					$ArticleID = $ID;
					$published = isset($_POST['publish']) ? "1" : "0";

					$query = "update articles set ArticleTitle='".$ArticleTitle."', ArticleDescription='".$ArticleDescription."', ArticleCategory='".$ArticleCategory."', ArticleContent='".$ArticleContent."', ArticleDate='".$ArticleDate."', published='".$published."' where ArticleID='".$ArticleID."'";

					$data = $DB->write($query);

					if($data){
						header("Location: " . URL . "/public/dashboard/articles");
						die();
					}
					else {
						$_SESSION['error'] = "Error updating article";
					}
				}
			
		}
		}
	}

	public function deletePost($ID){
		$DB = new Database();
		$ArticleID = $ID;

		$query = "delete from articles where ArticleID='".$ArticleID."'";

		$data=$DB->write($query);
	}
}