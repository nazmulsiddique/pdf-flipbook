<section id="pdf-area" class="middle-side-book">
		<div class="flipbook-viewport">
			<div class="container">
				<div class="flipbook">
					<div style="background-image:url(pages/fan/01.jpg)"></div>
					<div style="background-image:url(pages/fan/02.jpg)"></div>
					<div style="background-image:url(pages/fan/03.jpg)"></div>
					<div style="background-image:url(pages/fan/04.jpg)"></div>
					<div style="background-image:url(pages/fan/05.jpg)"></div>
					<div style="background-image:url(pages/fan/06.jpg)"></div>
					<div style="background-image:url(pages/fan/07.jpg)"></div>
					<div style="background-image:url(pages/fan/08.jpg)"></div>
					<div style="background-image:url(pages/fan/09.jpg)"></div>
					<div style="background-image:url(pages/fan/10.jpg)"></div>
					<div style="background-image:url(pages/fan/11.jpg)"></div>
					<div style="background-image:url(pages/fan/12.jpg)"></div>
					<div style="background-image:url(pages/fan/13.jpg)"></div>
					<div style="background-image:url(pages/fan/14.jpg)"></div>
					<div style="background-image:url(pages/fan/15.jpg)"></div>
					<div style="background-image:url(pages/fan/16.jpg)"></div>
					<div style="background-image:url(pages/fan/17.jpg)"></div>
					<div style="background-image:url(pages/fan/18.jpg)"></div>
					<div style="background-image:url(pages/fan/19.jpg)"></div>
					<div style="background-image:url(pages/fan/21.jpg)"></div>
					<div style="background-image:url(pages/fan/22.jpg)"></div>
					<div style="background-image:url(pages/fan/23.jpg)"></div>
					<div style="background-image:url(pages/fan/24.jpg)"></div>
					<div style="background-image:url(pages/fan/25.jpg)"></div>
					<div style="background-image:url(pages/fan/26.jpg)"></div>
					<div style="background-image:url(pages/fan/27.jpg)"></div>
					<div style="background-image:url(pages/fan/28.jpg)"></div>
					<div style="background-image:url(pages/fan/29.jpg)"></div>
					<div style="background-image:url(pages/fan/30.jpg)"></div>
					<div style="background-image:url(pages/fan/31.jpg)"></div>
					<div style="background-image:url(pages/fan/32.jpg)"></div>
					<div style="background-image:url(pages/fan/33.jpg)"></div>
					<div style="background-image:url(pages/fan/34.jpg)"></div>
					<div style="background-image:url(pages/fan/35.jpg)"></div>
					<div style="background-image:url(pages/fan/36.jpg)"></div>
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