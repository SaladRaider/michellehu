<?php 
require_once "header.php";
?>

<div id="video-back" ></div>

<div class="container-fluid header-image-sm" data-parallax="scroll" data-image="images/main-slide.jpg">
	<div class="container centered banner-text">
		<h2>
			<div class="xxl-text-prop row text-centered">
				CONTACT
			</div>
		</h2>
	</div>
</div>

<span id="start-of-content"></span>

<div id="about" class="container no-padding v-padding v-padding-bottom">
	<div class="col-sm-8">
		<form action="./post/send-contact-email.php" method="post" accept-charset="utf-8">
			<div class="btn-group-standard wow fadeInUp">
				<input class="text-box-outline col-xs-12 col-sm-6" type="text" name="name" placeholder="Name" />
				<input class="text-box-outline col-xs-12 col-sm-6" type="text" name="email" placeholder="Email" />
			</div>
			<textarea rows=5 class="text-area-outline col-xs-12 wow fadeInUp" name="message" placeholder="Message"></textarea>
			<input class="btn-flat-grey-inv col-xs-12 wow fadeInUp" type="submit" value="Send Message" />
		</form>
	</div>
	<div class="col-sm-4">
		<h2 class="wow fadeInUp">CONTACT</h2>
		<p>
			email@email.com<br />
			123-123-1234
		</p>
	</div>
</div>

<?php include("footer.php"); ?>

<script>
	<!-- go here: http://pixelcog.github.io/parallax.js/ for info -->
	$('.header-image-sm').parallax({
		imageSrc: 'images/13112823_10206827118261941_1927921258596537494_o.jpg'
	});
</script>
