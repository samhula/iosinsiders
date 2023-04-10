<?php
	require_once 'nav.php';
?>
<body>
	<div class="content-container upload upload-content">
		<div class="flex-element-1">
			<div class="item-group centre">
				<select name="category" id="template" required>
					<option value="non-option" selected disabled>Select Template</option>
					<option>News Article</option>
					<option>Review</option>
					<option>Guide</option>
					<option>Promotional</option>
					<option>Income Report</option>
					<option>Blog</option>
				</select>
				<button class="upload-button centre">Upload Image</button>
				<button class="upload-button centre">Upload Video</button>
				<button class="upload-button centre">Upload File</button>
			</div>
		</div>
		<div class="flex-element-3">
			<form method="POST">
				<input type="text" name="title" placeholder="Article Title" required autocomplete="off"></br>
				<input type="text" name="description" placeholder="Article Description" required autocomplete="off"></br>
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