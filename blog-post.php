<?php 
require_once "header.php";
?>

<div class="container-fluid header-image-sm" data-parallax="scroll" data-image="images/main-slide.jpg">
	<div class="container centered banner-text">
		<h2>
			<div class="xxl-text-prop row text-centered">
				BLOG TITLE 1
			</div>
		</h2>
	</div>
</div>

<span id="start-of-content"></span>

<div id="about" class="container no-padding v-padding v-padding-bottom">
	<div class="col-xs-12">
		<a class="btn-read-more" href="blog.php">Back to blog</a>
	</div>
	<div class="col-xs-12">
		<div class="blog-post">
			<h2>Blog Title 1</h2>
			<span class="sub-title-sm">Wednesday August 17, 2016 by Michelle Hu</span>
			<hr>
			<img class="img-responsive pull-right" style="height: 400px; margin-left: 10px; margin-top: 10px;" src="photos/ARCADIA INVITATIONAL CHOSEN PO/IMG_9856.jpg"></img>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br>
<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<a class="btn-read-more" href="blog.php">Back to blog</a>
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
