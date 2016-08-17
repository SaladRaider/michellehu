<?php 
require_once "header.php";
?>

<div class="container-fluid header-image-sm" data-parallax="scroll" data-image="images/main-slide.jpg">
	<div class="container centered banner-text">
		<h2>
			<div class="xxl-text-prop row text-centered">
				BLOG
			</div>
		</h2>
	</div>
</div>

<span id="start-of-content"></span>

<div id="about" class="container no-padding v-padding v-padding-bottom">
	<div class="col-sm-9">
		<div class="blog-post-preview">
			<h2>Blog Title 1</h2>
			<span class="sub-title-sm">Wednesday August 17, 2016 by Michelle Hu</span>
			<hr>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<br />
				<a class="btn-read-more" href="blog-post.php">Read more</a>
			</p>
		</div>
		<div class="blog-post-preview v-padding">
			<h2>Blog Title 2</h2>
			<span class="sub-title-sm">Wednesday August 17, 2016 by Michelle Hu</span>
			<hr>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<br />
				<a class="btn-read-more" href="blog-post.php">Read more</a>
			</p>
		</div>
		<div class="blog-post-preview v-padding">
			<h2>Blog Title 3</h2>
			<span class="sub-title-sm">Wednesday August 17, 2016 by Michelle Hu</span>
			<hr>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<br />
				<a class="btn-read-more" href="blog-post.php">Read more</a>
			</p>
		</div>
		<div class="blog-post-preview v-padding">
			<h2>Blog Title 4</h2>
			<span class="sub-title-sm">Wednesday August 17, 2016 by Michelle Hu</span>
			<hr>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum...<br />
				<a class="btn-read-more" href="blog-post.php">Read more</a>
			</p>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="btn-group-standard wow fadeInUp">
			<input type="text" name="search" placeholder="Search" class="text-box-outline col-xs-8">
			<a class="col-xs-4 btn-flat-grey-inv-inline fa fa-search"></a>
		</div>
		<div class="clear-fix">
			<select name="sort-option" class="text-box-outline">
				<option value="1">Newest</option>
				<option value="1">Oldest</option>
				<option value="1">Most Popular</option>
			</select>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>

<script>
	<!-- go here: http://pixelcog.github.io/parallax.js/ for info -->
	$('.header-image-sm').parallax({
		imageSrc: 'images/13112823_10206827118261941_1927921258596537494_o.jpg'
	});
</script>
