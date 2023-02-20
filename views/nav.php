<?php
	require_once 'config.php';
?>

<!-- Navigation Bar -->
<nav>
	<ul class="nav-container">
		<li class="flex-element-1"><a href="<?php echo URL?>">Home</a></li>

		<?php
			foreach (CATEGORIES as $category) {
				echo '<li class="flex-element-1"><a href="'.URL.'/'.strtolower($category).'">'.$category.'</a></li>';
			}
		?>
		<!-- <li>
				<form method="GET" action="#">
				<input type="text" placeholder="Search.." name="search">
	   			<button type="submit"></button>
				</form>
		</li> -->
	</ul>
</nav>