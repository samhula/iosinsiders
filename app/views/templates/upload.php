<?php

require_once 'nav.php';

?>
<body>
	<div class="content-container upload upload-content">
		<div class="flex-element-1">
			Here will be buttons for article template generations
		</div>
		<div class="flex-element-3">
			<form method="POST">
				<input type="text" name="title" placeholder="Article Title" required></br>
				<input type="text" name="description" placeholder="Article Description" required></br>
				<select name="category" id="category" required>
					<option value="non-option" selected disabled>Select Category</option>
					<?php echo chooseCategory(CATEGORIES)?>
				</select></br>
				<textarea id="write-article-content" rows="40" placeholder="Please write your article here" required></textarea></br>
				<button type="submit">Submit Article</button>
			</form>
		</div>
	</div>
</body>