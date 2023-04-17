<?php
	require_once 'nav.php';
?>
<body>
	<form class="content-container upload upload-content" method="POST" enctype="multipart/form-data">
		<div class="flex-element-1">
			<div class="item-group centre">
				<select name="category" id="template" required onchange="setTemplate()">
					<option value="non-option" selected disabled>Select Template</option>
					<option>News Article</option>
					<option>Review</option>
					<option>Guide</option>
					<option>Promotional</option>
					<option>Income Report</option>
					<option>Blog</option>
				</select>
				<input type="file" class="upload-button centre">
				<input type="file" class="upload-button centre">
				<input type="file" class="upload-button centre">
			</div>
		</div>
		<div class="flex-element-3">
			<input type="text" name="title" placeholder="Article Title" required autocomplete="off"></br>
			<input type="text" name="description" placeholder="Article Description" required autocomplete="off"></br>
			<select name="category" id="category" required>
				<option value="non-option" selected disabled>Select Category</option>
				<?php echo chooseCategory(CATEGORIES)?>
			</select></br>
			<textarea id="write-article-content" rows="40" placeholder="Please write your article here.." required></textarea></br>
			<button type="submit">Submit Article</button>
		</div>
	</form>
	<script type="text/javascript" src="<?php echo URL?>/public/js/upload.js"></script>
</body>