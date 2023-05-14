<body>
	<header>
		<?php
		require_once 'nav.php';
		?>	
	</header>
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
			<div class="top-story-content">
				<?php
				if(is_array($data['top_post'])){
					foreach ($data['top_post'] as $top) {
						echo '<div class="img-hover-zoom">';
						echo '<a href="'.URL. '/public/post/'.$top->ArticleID.'/'.titleToURL($top->ArticleTitle).'"><img class="top-story-img thumbnail" src="' . URL . '/public/' . $top->MainImgURL . '"></a>';
						echo '</div>';
						echo '<div class="story-contents">';
						echo '	<div>';
						echo '<a href="'.URL. '/public/post/'.$top->ArticleID.'/'.titleToURL($top->ArticleTitle).'"><h4>'.$top->ArticleTitle.'</h4></a>';
						echo '	</div>';
						echo '	<div>';
						echo $top->ArticleDescription;
						echo '	</div>';
						echo '	<div>';
						echo $top->ArticleCategory;
						echo '	</div>';
						echo '</div>';
					}
				}
				else {
					echo 'not array';
				}
			?>
			</div>
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
			<?php
				if(is_array($data['posts_latest'])){
					foreach ($data['posts_latest'] as $latest) {
						echo '<a href="'.URL. '/public/post/'.$latest->ArticleID.'/'.titleToURL($latest->ArticleTitle).'"><img class="latest-img" height="200px"src="' . URL . '/public/' . $latest->MainImgURL . '"></a><a><h4>'.$latest->ArticleTitle.'</h4></a>';
					}
				}
			?>
		</div>
	</div>
	<div class="homepage-articles">
		<?php
			if(is_array($data['posts'])){
				foreach ($data['posts'] as $item) {
					echo '<div class="element figure">';
					echo '<a href="'.URL. '/public/post/'.$item->ArticleID.'/'.titleToURL($item->ArticleTitle).'"><img class="img-hover-zoom thumbnail recent-thumbnail" src="' . URL . '/public/' . $item->MainImgURL . '"></a><a><h4>'.$item->ArticleTitle.'</h4></a>';
					echo '<div>';
					echo $item->ArticleDescription;
					echo '</div>';
					echo '<div>';
					echo 'Category: ';
					echo '<a href="'.URL.'/public/'.strtolower($item->ArticleCategory).'">'.$item->ArticleCategory.'</a>';
					echo '</div>';
					echo '</div>';
				}
			}
		?>
	</div>
</body>