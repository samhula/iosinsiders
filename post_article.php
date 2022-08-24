<!DOCTYPE html>
<html lang="en-GB">
<?php 
		require_once 'views/head.php';
?>
<body>
	<div class="h1-container">
		<h1><a href="index.php">iOS Insiders</a></h1>
	</div>
	<?php 
		require_once 'views/nav.php';
	?>
	<div class="content-container">
		<form class="post-article flex-element-6">
			<label for="title">Article Title: </label>
			<input type="text" name="title" id="write-article-title"><br>
			<label for="tags">Article Tags: </label>
			<input type="text" name="tags" id="write-article-tags"><br>
			<label for="description">Article Description: </label>
			<input type="text" name="description" id="write-article-description"><br>
			<label for="article">Article: </label>
			<input type="text" name="article" id="write-article-content">
		</form>
	</div>
</body>
</html>