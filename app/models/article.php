<?php

class Article {
	public function getPosts(){
		$query = "select * from articles WHERE published='1' order by ArticleDate DESC limit 12";

		$DB = new Database(); 
		$data = $DB->read($query);

		if(is_array($data)){
			return $data;
		}
		return false;
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
}