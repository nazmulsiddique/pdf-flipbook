<section id="pdf-area" class="middle-side-book">
		<div class="flipbook-viewport">
			<div class="container">
				<div class="flipbook">
					<div style="background-image:url(pages/fan/fan-1.jpg)"></div>
					<div style="background-image:url(pages/fan/fan-2.jpg)"></div>
					<div style="background-image:url(pages/fan/fan-3.jpg)"></div>
					<div style="background-image:url(pages/fan/fan-4.jpg)"></div>
					<div style="background-image:url(pages/fan/fan-5.jpg)"></div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">

	function loadApp() {

		// Create the flipbook

		$('.flipbook').turn({
				// Width

				// width:1200,
				
				// // Height

				// height:780,

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
<style>
.flipbook-viewport .flipbook{
	width:1200px;
	height:780px;
	left:-600px;
	top:-390px;
	z-index: 0;
}

.flipbook-viewport .page{
		width:600px;
		height:780px;
		background-color:white;
		background-repeat:no-repeat;
		background-size:100% 100%;
		z-index: 0;
	}

@media (max-width: 1280px) {

	.flipbook-viewport .flipbook{
	width:894px;
	height:582px;
	left:-447px;
	top:-291px;
	z-index: 0;
	}

	.flipbook-viewport .page{
		width:447px;
		height:582px;
		background-color:white;
		background-repeat:no-repeat;
		background-size:100% 100%;
		z-index: 0;
	}

}
</style>