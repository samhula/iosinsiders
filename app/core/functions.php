<?php

	// Echoing out the navigation bar
	function setNavBar($navBar){
		echo '<li class="flex-element-1"><a href="'.URL.'/public/home">Home</a></li>';

		foreach ($navBar as $category) {
			echo '<li class="flex-element-1"><a href="'.URL.'/public/'.strtolower($category).'">'.$category.'</a></li>';
		}

		/*
			<li>
				<form method="GET" action="#">
				<input type="text" placeholder="Search.." name="search">
	   			<button type="submit"></button>
				</form>
			</li>
			<a href="#" class="toggle-hamburger">
				<span class="hamburger-bar"></span>
				<span class="hamburger-bar"></span>
				<span class="hamburger-bar"></span>
			</a> 
		*/
	}

	// Echoing out the footer
	function setFooter($footer){
		foreach ($footer as $category) {
			echo '<li class="flex-element-1"><a href="'.URL.'/public/'.strtolower($category).'">'.$category.'</a></li>';
		}
	}

?>