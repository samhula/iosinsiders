<?php

	// Echoing out the navigation bar
	function setNavBar($navBar){
		foreach ($navBar as $category) {
			echo '<li class="flex-element-1"><a href="'.URL.'/public/'.strtolower($category).'">'.$category.'</a></li>';
		}

		
			echo '<li>';
			echo '	<form method="GET" action="#">';
			echo '	<input type="text" placeholder="Search.." name="search">';
	   		echo '	<button type="submit"></button>';
			echo '	</form>';
			echo '</li>';
			echo '<a href="#" class="toggle-hamburger">';
			echo '	<span class="hamburger-bar"></span>';
			echo '	<span class="hamburger-bar"></span>';
			echo '	<span class="hamburger-bar"></span>';
			echo '</a> ';
		
	}

	// Echoing out the footer
	function setFooter($footer){
		foreach ($footer as $category) {
			echo '<li class="flex-element-1"><a href="'.URL.'/public/'.strtolower($category).'">'.$category.'</a></li>';
		}
	}

?>