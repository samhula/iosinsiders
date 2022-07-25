<body>
	<div class="h1-container">
		<h1><a href="index.php">iOS Insiders</a></h1>
	</div>
	<?php 
		require_once 'nav.php';
	?>		
	<div class="content-container">
		<article class="flex-element-2 top-story">
			<h2>Top Story</h2>
			<hr>
			article here
			<img src="no-source.png" width="100px" height="70px" alt="Article Image">
		</article>
		<!-- USE CONTROLLER TO GET THE CORRECT ARTICLES -->
		<!-- GET THE MOST IMPORTANT ARTICLE OF THE DAY -->
		<!-- DISPLAY THE MOST RECENT ARTICLES ON LATEST POST -->
		<!-- HAVE A MOST READ ARTICLES, TRACK HOW MANY TIME THE ARTICLE HAS BEEN VIEWED -->
		<div class="flex-element-1 recent-article">
			<h2>
				Latest Posts
			</h2>
			<hr>
			<article>
				<div>
				article here
				</div>
				<div class="recent-article-dotted"></div>
			</article>
			<article>
				<div>
					article here
				</div>
				<div class="recent-article-dotted"></div>
			</article>
		</div>
	</div>
	<div class="donate-banner content-container">
			If you want to support the website, you can donate <a href="#"> here</a>.
	</div>
</body>