<!-- Navigation Bar -->
<nav>
	<ul class="nav-container">
		<div class="h1-container">
			<h1><a href="<?php echo URL?>"><?php echo WEBSITE_NAME?></a></h1>
		</div>
		<?php
			populateNavBar(CATEGORIES);
		?>
	</ul>
</nav>