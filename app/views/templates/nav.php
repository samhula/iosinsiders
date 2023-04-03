<!-- Navigation Bar -->
<nav>
	<h1>
		<a class="h1-container" href="<?php echo URL?>/public/"><?php echo WEBSITE_NAME?></a>
	</h1>
	<ul class="nav-links">
		<?php
			//echo '<span class="nav-right">';
			setNavBar(CATEGORIES);
			//echo "<span";
		?>

		<?php
			if (isset($_SESSION['username'])):
		?>
			<li>
				<a href="<?php echo URL?>/public/logout">Logout</a>
			</li>
		<?php
			else:
		?>
		<li>
			<a href="<?php echo URL?>/public/login">Login</a>
		</li>
		<?php endif?>
	</ul>
</nav>