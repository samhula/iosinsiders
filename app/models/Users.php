<?php

class Users {
	public function getUsers(){
		$query = "select Id, Username, Email, Role from users limit 10";

		$DB = new Database();
		$data = $DB->read($query);

		if(is_array($data)){
			return $data;
		}
		return false;
	}

	// public function updateUser(){
	// 	$query = "update users ";

	// 	$DB = new Database();
	// 	$data = $DB->write();
	// }
}