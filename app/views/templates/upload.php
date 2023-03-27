<?php

require_once 'nav.php';

?>
<body>
	<div class="content-container upload upload-content">
		<form method="POST">
			<input type="text" name="title" placeholder="Article Title" required></br>
			<input type="text" name="description" placeholder="Article Description" required></br>
			<select name="category" id="category" required>
				<option value="non-option" selected disabled>Select Category</option>
				<?php echo chooseCategory(CATEGORIES)?>
			</select></br>
			<textarea id="write-article-content"></textarea>
			<button type="submit">Submit Article</button>
		</form>
	</div>
</body>