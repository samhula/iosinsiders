<?php

class Database {
	public function db_connect(){
		try {
			$string = "mysql:host=localhost;dbname=techwebsite_db";
			$db = new PDO($string, 'root', '');
		}
		catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function read($query){

	}

	public function write($query){

	}
}