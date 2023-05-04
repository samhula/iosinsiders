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
		$input = str_replace('<', '', $input);
		$input = str_replace('>', '', $input);
		return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
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

	function parseContent($content){
		//decode html entities
		$content = htmlspecialchars_decode($content);
		$content = str_replace('<', '', $content);
		$content = str_replace('>', '', $content);

		$h1 = FALSE;
		$h2 = FALSE;
		$h3 = FALSE;

		for($i = 0; $i < strlen($content); $i++){

			// Check to see whether to use h1, h2 or h3 semantic tag
			if($content[$i] == "#" && $content[$i+1] != "#" && $h1 == FALSE){
				$h1 = TRUE;
				echo '<h1>';
				
			}
			else if ($content[$i] == "#" && $content[$i+1] != "#" && $h1 == TRUE){
				echo '</h1>';
				$h1 = FALSE;
			}
			else if($content[$i] == "#" && $content[$i+1] == "#" && $content[$i+2] != "#" && $h2 == FALSE){
				$h2 = TRUE;
				echo '<h2>';
				$i++;
			}
			else if ($content[$i] == "#" && $content[$i+1] == "#" && $content[$i+2] != "#" && $h2 == TRUE){
				echo '</h2>';
				$i++;
				$h2 = FALSE;
			}
			else if($content[$i] == "#" && $content[$i+1] == "#" && $content[$i+2] == "#" && $h3 == FALSE){
				$h3 = TRUE;
				echo '<h3>';
				$i+=2;
				$headingsIndex =+ 1;
			}
			else if ($content[$i] == "#" && $content[$i+1] == "#" && $content[$i+2] == "#" && $h3 == TRUE){
				echo '</h3>';
				$i+=2;
				$h3 = FALSE;
			}
			else {
				echo $content[$i];
			}
		}
	}

	function getHeadings($content){
		$arr = [];

		for($i = 0; $i < strlen($content); $i++){

			// Check to see whether to use h1, h2 or h3 semantic tag
			if($content[$i] == "#" && $content[$i+1] == "#" && $content[$i+2] == "#" && $h3 == FALSE){
				$h3 = TRUE;
				echo '<h3>';
				$i+=2;
				$headingsIndex =+ 1;
			}
			else if ($content[$i] == "#" && $content[$i+1] == "#" && $content[$i+2] == "#" && $h3 == TRUE){
				echo '</h3>';
				$i+=2;
				$h3 = FALSE;
			}
		}

		return $arr;
	}