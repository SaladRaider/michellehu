<?php 
require_once "header.php";
?>

<div id="video-back" ></div>

<div class="container-fluid header-image" data-parallax="scroll" data-image="images/main-slide.jpg">
	<div class="container centered banner-text">
		<h2>
			<div class="xxl-text-prop row text-centered">
				ALBULM 1
			</div>
		</h2>
	</div>
</div>

<span id="start-of-content"></span>

<div id="about" class="container-fluid no-padding">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="photos/ARCADIA INVITATIONAL CHOSEN PO/IMG_0112.jpg" alt="Exterior" >
			</div>
			<div class="item">
				<img src="photos/ARCADIA INVITATIONAL CHOSEN PO/IMG_0120.jpg" alt="Exterior" >
			</div>
			<div class="item">
				<img src="photos/ARCADIA INVITATIONAL CHOSEN PO/IMG_0129.jpg" alt="Exterior" >
			</div>
			<div class="item">
				<img src="photos/ARCADIA INVITATIONAL CHOSEN PO/IMG_0146.jpg" alt="Exterior" >
			</div>
			<div class="item">
				<img src="photos/ARCADIA INVITATIONAL CHOSEN PO/IMG_9856.jpg" alt="Exterior" >
			</div>
			<div class="item">
				<img src="photos/ARCADIA INVITATIONAL CHOSEN PO/IMG_9887.jpg" alt="Exterior" >
			</div>
			<div class="item">
				<img src="photos/ARCADIA INVITATIONAL CHOSEN PO/IMG_9909.jpg" alt="Exterior" >
			</div>
			<div class="item">
				<img src="photos/ARCADIA INVITATIONAL CHOSEN PO/IMG_9914.jpg" alt="Exterior" >
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<?php include("footer.php"); ?>

<script>
	<!-- go here: http://pixelcog.github.io/parallax.js/ for info -->
	$('.header-image').parallax({
		imageSrc: 'photos/ARCADIA INVITATIONAL CHOSEN PO/IMG_9909.jpg'
	});
</script>
