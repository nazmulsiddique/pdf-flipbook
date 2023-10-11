<section id="pdf-area" class="middle-side-book">
		<div class="flipbook-viewport">
			<div class="container">
				<div class="flipbook">
					<div class="page" style="background-image:url(pages/ac/01.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/02.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/03.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/04.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/05.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/06.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/07.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/08.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/09.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/10.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/11.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/12.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/13.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/14.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/15.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/16.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/17.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/18.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/19.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/20.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/21.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/22.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/23.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/24.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/25.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/26.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/27.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/28.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/29.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/30.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/31.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/32.jpg)"></div>
					<div class="double" style="background-image:url(pages/ac/33.jpg)"></div>
					<div class="page" style="background-image:url(pages/ac/34.jpg)"></div>
				</div>
			</div>
		</div>
	</section>

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
			// width: 1100,
			// height: 830,
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
	both: ['lib/scissor.min.js', 'css/ac-page.css'],
	complete: loadApp
});

</script>