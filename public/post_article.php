<!DOCTYPE html>
<html lang="en-GB">
<?php 
		require_once 'views/head.php';
?>
<body>
	<div class="h1-container">
		<h1><a href="index.php">Tech Website</a></h1>
	</div>
	<?php 
		require_once 'views/nav.php';
	?>
	<div class="content-container">
		<div class="flex-element-1 select-content-type">
			<div class="select-option">
				Section
			</div>
			<div class="select-option">
				Paragraph
			</div>
			<div class="select-option">
				Image
			</div>
			<div class="select-option">
				Video
			</div>
		</div>
		<form class="post-article flex-element-6">
			<label for="title">Article Title: </label>
			<input type="text" name="title"><br>
			<label for="tags">Article Tags: </label>
			<input type="text" name="tags"><br>
			<label for="description">Article Description: </label>
			<input type="text" name="description"><br>
			<label for="description">Article Category: </label>
			<input type="text" name="description"><br>
			<label for="article">Article: </label>
			<input type="text" name="article">
		</form>
	</div>
</body>
</html>