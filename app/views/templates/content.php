<body>
	<?php
		require_once 'nav.php';
	?>	
	<div class="content-container">
		<div class="article flex-element-1">
			<div class="wrapper">
				<section class="content flex-element-1">
					<h2 class="article-title"><?php echo $data['post']->ArticleTitle?></h2>
					<div class="info-container">
						By <span class="author"><?php echo $data['post']->ArticleAuthor?></span><span class="bullet">&#x2022;</span>Updated on <span class="date-of-publish"><?php parseDate($data['post']->ArticleDate);?></span>
					</div>
					<img class="main-article-image" src="<?php echo URL . '/public/' . $data['post']->MainImgURL?>">
					<!-- <div class="description-container">
						This is the description
					</div> -->
					<h3 id="Heading-1">Heading 1</h3>
					<p><?php echo $data['post']->ArticleContent?></p>
				</section>
				<section class="element table-of-contents flex-element-1">
					<div class="flex-element-1">
					<div class="bold table-of-contents-title">Table of Contents</div>
					<ol>
						<li><a href="#Heading-1">This is the first heading</a></li>
						<li>This is the second heading</li>
						<li>This is the third heading</li>
					</ol>
					</div>
				</section>
				<!-- <section class="element">
					
				</section> -->
			</div>
		</div>
	</div>
</body>