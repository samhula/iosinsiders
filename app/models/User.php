<?php

class User{
	public function login($POST){
		$DB = new Database();

		$_SESSION['error'] = "";
		if(isset($POST['username']) && isset($POST['password'])){
			$arr['username'] = $POST['username'];
			$arr['password'] = crypt($POST['password'], SALT);


			$query = "select * from users where Username = :username && ePassword = :password limit 1";
			$data = $DB->read($query, $arr);

			if(is_array($data)){
				// User is logged in 
				// Assign a value to the session
				$_SESSION['user_id'] = $data[0]->Id;
				$_SESSION['username'] = $data[0]->Username;

				header("Location:".URL."/public/");
			}
			else {
				$_SESSION['error'] = "Incorrect username or password";
			}
		}
		else {
			echo 'error';	
		}
	}

	public function signup($POST){
		$DB = new Database();

		$_SESSION['error'] = "";
		if(isset($POST['username']) && isset($POST['password']) && isset($POST['repeat_password']) && isset($POST['email'])){
			if($POST['username'] == ""){
				$_SESSION['error'] = "Please enter a username";
			}
			else if (crypt($POST['password'], SALT) != crypt($POST['repeat_password'], SALT)){
				$_SESSION['error'] = "Passwords do not match";
			}
			else{
				$arr['username'] = $POST['username'];
				$arr['password'] = crypt($POST['password'], SALT);
				$arr['email'] = $POST['email'];
				$arr['role'] = "user";


				$query = "insert into users (Username, ePassword, Email, Role) values (:username, :password, :email, :role)";
				$data = $DB->write($query, $arr);

				if($data){
					// Successful signup
					header("Location: ".URL."/public/login");
				}
				else {
					$_SESSION['error'] = "Uh oh! An error has occured!";
				}
			}
		}
		else {
			echo 'error';	
		}
	}

	public function isLoggedIn(){
		$DB = new Database();
		if (isset($_SESSION['user_id'])){

			$arr['user_id'] = $_SESSION['user_id'];
			$query = "select * from users where Username = :username limit 1";
			$data = $DB->read($query, $arr);

			if(is_array($data)){
				// User is logged in 
				// Assign a value to the session
				$_SESSION['user_id'] = $data[0]->Id;
				$_SESSION['username'] = $data[0]->Username;

				return true;
			}
		}
		return false;
	}

	public function logout(){
		// Assign a value to the session
			unset($_SESSION['user_id']);
			unset($_SESSION['username']);

			header("Location: ".URL."/public/login");
			die();
	}
}