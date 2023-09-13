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
					<div class="page"  style="background-image:url(pages/refrigerator/1.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/2.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/3.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/4.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/5.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/6.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/7.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/8.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/9.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/10.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/11.jpg)"></div>
					<div class="double" style="background-image:url(pages/refrigerator/13.jpg)"></div>
				</div>
			</div>
		</div>
	</section>
	<?php include('right-sidebar.php') ?>



<script type="text/javascript">

function loadApp() {

var flipbook = $('.flipbook');

 // Check if the CSS was already loaded

if (flipbook.width()==0 || flipbook.height()==0) {
	setTimeout(loadApp, 10);
	return;
}

$('.flipbook .double').scissor();

// Create the flipbook

$('.flipbook').turn({
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
	yep: ['lib/turn.min.js'],
	nope: ['lib/turn.html4.min.js'],
	both: ['lib/scissor.min.js', 'css/double-page.css'],
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