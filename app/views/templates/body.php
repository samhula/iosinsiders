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
				<div class="img-hover-zoom">
					<img class="top-story-img thumbnail" src="https://media.4rgos.it/i/Argos/1121-m0014-m007-m050-m008-gaming-pcs-and-laptops-guide-as274382882?maxW=1200&qlt=75&fmt.jpeg.interlaced=true" width="500px" alt="Article Image">
				</div>
				<div class="story-contents">
					<div>
					Title
					</div>
					<div>
						Description
					</div>
					<div>
						Category
					</div>
				</div>
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
	<div class="homepage-articles">

		<a href=""></a>
		<?php
			if(is_array($data['posts'])){
				foreach ($data['posts'] as $item) {
					echo '<div class="element">';
					echo '<img class="thumbnail" src="' . URL . '/public/' . $item->MainImgURL . '">';
					echo '<a href="'.URL. '/public/post/'.$item->ArticleID.'/'.titleToURL($item->ArticleTitle).'"><h4>'.$item->ArticleTitle.'</h4></a>';
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
		<!-- <div class="element">
				This is some text.
		</div>
		<div class="element">
				This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. 
		</div>
		<div class="element">
				This is some text. This is some text. This is some text. 
		</div>
		<div class="element">
				This is some text.
		</div>
		<div class="element">
				This is some text.
		</div>
		<div class="element">
				This is some text.
		</div>
		<div class="element">
				This is some text.
		</div>
		<div class="element">
				This is some text.
		</div>
		<div class="element">
				This is some text.
		</div> -->
	</div>
</body>