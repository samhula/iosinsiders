<!-- Navigation Bar -->
<nav>
	<ul class="nav-container">
		<li><a href="<?php echo URL?>/public/"><h1 class="h1-container"><?php echo WEBSITE_NAME?></h1></a></li>
		<?php
			//echo '<span class="nav-right">';
			setNavBar(CATEGORIES);
			//echo "<span";
		?>

		<?php
			if (isset($_SESSION['username'])):
		?>
		<li class="flex-element-1">
			<a href="<?php echo URL?>/public/logout">Logout</a>
		</li>
		<?php
		else:
		?>
		<li class="flex-element-1">
			<a href="<?php echo URL?>/public/login">Login</a>
		</li>
	<?php endif?>
	</ul>
</nav>