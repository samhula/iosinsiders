<?php

	function show($stuff)
	{
		echo "<pre>";
		print_r($stuff);
		echo "</pre>";
	}	

	// Echoing out the navigation bar
	function setNavBar($navBar){
		foreach ($navBar as $category) {
			echo '<li><a href="'.URL.'/public/'.strtolower($category).'">'.$category.'</a></li>';
		}

			// echo '<li>';
			// echo '	<form method="GET" action="#">';
			// echo '	<input type="text" placeholder="Search.." name="search">';
	   		// echo '	<button type="submit">Submit</button>';
			// echo '	</form>';
			// echo '</li>';
			// echo '<a href="#" class="toggle-hamburger">';
			// echo '	<span class="hamburger-bar"></span>';
			// echo '	<span class="hamburger-bar"></span>';
			// echo '	<span class="hamburger-bar"></span>';
			// echo '</a> ';
		
	}

	// Echoing out the footer
	function setFooter($footer){
		foreach ($footer as $category) {
			echo '<li class="flex-element-1 centre"><a href="'.URL.'/public/'.strtolower($category).'">'.$category.'</a></li>';
		}
	}

	function chooseCategory($cat, $chosen = ''){
		foreach ($cat as $category) {
			if ($chosen == $category){
				echo '<option value="'.$category.'" selected>'.$category.'</option>';
			}
			else {
				echo '<option value="'.$category.'">'.$category.'</option>';
			}
		}
	}

	function parseDate($date){
		echo $date;
	}

	function titleToURL($title){
		return strtolower(str_replace(' ', '-', $title));
	}

	function sanitiseInputs($input){
		return htmlentities(trim($input));
	}

	function sanitiseInputsArr($arr){
		foreach($arr as $value){
			htmlentities($value);
		}

		return $arr;
	}

	function parseUrl(){
		$url = isset($_GET['url']) ? $_GET['url'] : "home";
		return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
	}
