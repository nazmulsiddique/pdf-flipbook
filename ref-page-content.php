<section id="pdf-area" class="middle-side-book">
    <div class="flipbook-viewport">
        <div class="container">
            <div class="flipbook">
                <div class="page" style="background-image:url(pages/refrigerator/0.jpg)"></div>
                <div class="double" style="background-image:url(pages/refrigerator/1.jpg)"></div>
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
	both: ['lib/scissor.min.js', 'css/double-page.css'],
	complete: loadApp
});

</script>