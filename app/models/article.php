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

	public function updatePost(){
		
	}
}