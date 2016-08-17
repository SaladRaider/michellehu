<?php 
require_once "header.php";
?>

<div id="video-back" ></div>

<div class="container-fluid header-image" data-parallax="scroll" data-image="images/main-slide.jpg">
	<div class="container centered banner-text">
		<h2>
			<div class="xxl-text-prop row text-centered">
				MICHELLE HU
				<div class="text-centered wow fadeInUp animation-delay-2 btn-contained v-padding">
					<a onclick="$('#start-of-content').goTo();" class="btn-flat-black-wh">EXPLORE</a>
				</div>
			</div>
		</h2>
	</div>
</div>

<span id="start-of-content"></span>

<div id="about" class="container-fluid no-padding">
	<div class="col-md-4 photo-card" style="background-image: url('images/Gingerbread_House_Essex_CT.jpg');">
		<div>VIEW ALBULM</div>
	</div>
	<div class="col-md-8 photo-card" style="background-image: url('images/egpimaging_550South2nd_002_HIGHRES.jpg');">
		<div>VIEW ALBULM</div>
	</div>
</div>

<?php include("footer.php"); ?>

<script>
	<!-- go here: http://pixelcog.github.io/parallax.js/ for info -->
	/*$('.header-image').parallax({
		imageSrc: 'images/main-slide.jpg'
	});*/

	$('#dr-berry').parallax({
		imageSrc: '<?php echo file_get_contents("./txt/profile-photo.txt"); ?>',
		speed: 0.8
	});

	$('#video-back').YTPlayer({
	    fitToBackground: true,
	    videoId: 'QKx2t-7vdqs',
	    repeat: true,
	    fitContainer: false
	});
</script>
