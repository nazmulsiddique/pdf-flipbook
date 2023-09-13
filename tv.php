<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width = 1050, user-scalable = no" />
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="extras/modernizr.2.5.3.min.js"></script>
</head>
<body>
	<?php include('left-sidebar.php') ?>
	<section id="pdf-area" class="middle-side-book">
		<div class="flipbook-viewport">
			<div class="container">
				<div class="flipbook">
					<div style="background-image:url(pages/tv/1.jpg)"></div>
					<div style="background-image:url(pages/tv/2.jpg)"></div>
					<div style="background-image:url(pages/tv/3.jpg)"></div>
					<div style="background-image:url(pages/tv/4.jpg)"></div>
					<div style="background-image:url(pages/tv/5.jpg)"></div>
					<div style="background-image:url(pages/tv/6.jpg)"></div>
					<div style="background-image:url(pages/tv/7.jpg)"></div>
					<div style="background-image:url(pages/tv/8.jpg)"></div>
					<div style="background-image:url(pages/tv/9.jpg)"></div>
					<div style="background-image:url(pages/tv/10.jpg)"></div>
					<div style="background-image:url(pages/tv/11.jpg)"></div>
					<div style="background-image:url(pages/tv/13.jpg)"></div>
					<div style="background-image:url(pages/tv/14.jpg)"></div>
					<div style="background-image:url(pages/tv/15.jpg)"></div>
					<div style="background-image:url(pages/tv/16.jpg)"></div>
					<div style="background-image:url(pages/tv/17.jpg)"></div>
					<div style="background-image:url(pages/tv/18.jpg)"></div>
					<div style="background-image:url(pages/tv/19.jpg)"></div>
					<div style="background-image:url(pages/tv/20.jpg)"></div>
					<div style="background-image:url(pages/tv/21.jpg)"></div>
					<div style="background-image:url(pages/tv/22.jpg)"></div>
					<div style="background-image:url(pages/tv/23.jpg)"></div>
					<div style="background-image:url(pages/tv/24.jpg)"></div>
					<div style="background-image:url(pages/tv/25.jpg)"></div>
					<div style="background-image:url(pages/tv/26.jpg)"></div>
					<div style="background-image:url(pages/tv/27.jpg)"></div>
					<div style="background-image:url(pages/tv/28.jpg)"></div>
					<div style="background-image:url(pages/tv/29.jpg)"></div>
					<div style="background-image:url(pages/tv/30.jpg)"></div>
					<div style="background-image:url(pages/tv/31.jpg)"></div>
					<div style="background-image:url(pages/tv/32.jpg)"></div>
					<div style="background-image:url(pages/tv/33.jpg)"></div>
					<div style="background-image:url(pages/tv/34.jpg)"></div>
					<div style="background-image:url(pages/tv/35.jpg)"></div>
					<div style="background-image:url(pages/tv/36.jpg)"></div>
				</div>
			</div>
		</div>
	</section>
	<?php include('right-sidebar.php') ?>



<script type="text/javascript">

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:922,
			
			// Height

			height:600,

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true

	});
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['lib/turn.js'],
	nope: ['lib/turn.html4.min.js'],
	both: ['css/basic.css'],
	complete: loadApp
});

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function () {
// Initially set the "Home" link as active
$(".navbar li a:first").addClass("active");

// Handle click events for navigation links
$(".navbar li a").click(function () {
	// Remove the "active" class from all links
	$(".navbar li a").removeClass("active");

	// Add the "active" class to the clicked link
	$(this).addClass("active");
});
});

</script>

</body>
</html>