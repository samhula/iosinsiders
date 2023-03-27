<body>	
	<?php
		require_once 'nav.php';
	?>	
	<div class="stock-info">
		<div class="marquee-container">
			<p class="stock-text">
				Here is some starting text.
			</p> 
			<p class="stock-text">
				Here is some text.
			</p> 
			<p class="stock-text">
				Here is some text.
			</p> 
			<p class="stock-text">
				Here is some text.
			</p> 
			<p class="stock-text">
				Here is some text.
			</p> 
			<p class="stock-text">
				Here is some text.
			</p> 
			<p class="stock-text">
				Here is some text.
			</p> 
			<p class="stock-text">
				Here is some ending text.
			</p> 
		</div>
	</div>
	<div class="content-container">
		<article class="flex-element-2 top-story">
			<h2>Top Story</h2>
			<hr>
			<span class="top-story-content">
				<img class="top-story-img" src="https://wallpaperaccess.com/full/469611.jpg" width="500px" alt="Article Image">
				<span>
					<div>
					Title
					</div>
					<div>
						Description
					</div>
					<div>
						Category
					</div>
				</span>
			</span>
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
	<div class="content-container">
		<div class="element flex-element-1">
				Here is some jibber jabba
		</div>
		<div class="element flex-element-1 no-padding-left-right no-margin-left-right">
				Here is some jibber jabba
		</div>
		<div class="element flex-element-2">
				Here is some jibber jabba
		</div>
	</div>
		<div class="element flex-element-2">
				Here is some jibber jabba
		</div>
		<div class="element flex-element-2">
				Here is some jibber jabba
		</div>
		<div class="element flex-element-2">
				Here is some jibber jabba
		</div>
		<div class="element flex-element-2">
				Here is some jibber jabba
		</div>

		<?php if(isset($_SESSION['user_name'])): ?>

              Hi <?=$_SESSION['user_name']?>

            <?php endif; ?>
</body>