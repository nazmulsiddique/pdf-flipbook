<div class="right-side-filter">
	<div class="right-side">
		<div class="container">
			<img src="pics/acc-logo.png" alt="" width="200px">
			<form id="download_catalog" action="">
				<p><strong>Mail Me</strong></p>
				<div id="loader">
					<img src="pics/lodar.gif">
				</div>
				<div id="response_data"></div><br>
				<input type="text" id="full_name" name="full_name" placeholder="Write Your name.." required>
			
				<input type="email" id="email" name="email" placeholder="Write Your email.." required>
			
				<input type="number" id="mobile" name="mobile" placeholder="Write Your mobile.." required>

				<textarea id="message" name="message" placeholder="Write your message.." style="height:100px"></textarea>

				<input type="radio" id="refrigerator" name="catalog_type" value="refrigerator">
				<label for="refrigerator">Refrigerator</label>
				<input type="radio" id="air_conditioner" name="catalog_type" value="air_conditioner">
				<label for="air_conditioner">Air Conditioner</label><br><br>
				<input type="radio" id="fan" name="catalog_type" value="fan">
				<label for="fan">Fan</label>
				<input type="radio" id="acc_brand" name="catalog_type" value="acc_brand">
				<label for="acc_brand">ACC Brand</label>
				<input type="radio" id="all" name="catalog_type" value="all">
				<label for="all">All Catalogs</label><br><br>
			
				<input type="submit" value="Send">
			
			</form>
			<div class="download">
				<p>Scan to Download the Catalog</p>
				<img src="pics/qr-code.png" alt="" width="200px">
			</div>
			</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $("#download_catalog").submit(function(event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            type: "POST",
            url: "process.php", // Update with the correct path
            data: formData,
            dataType: 'json', // If your PHP script returns JSON
            beforeSend: function() {
                $(".middle-side-book").css({ "opacity": "0.4" });
                $("#loader").show();
            },
            success: function(response) {
                // Check the response for success or error message
                if (response && response.success) {
                    $("#response_data").html(response.success);
                    console.log("Form submitted successfully.");
                    $("#download_catalog")[0].reset();
                } else {
                    console.error("Error: " + response.error);
                }
            },
            error: function(xhr, status, error) {
                //console.error("Error:" + error);
                console.error("AJAX Error: " + error);
                $("#response_data").html("An error occurred. Please try again.");
            },
            complete: function() {
                $("#download_catalog").show();
                $("#loader").hide();
                $(".middle-side-book").css("opacity", 1);
            }
        });
    });
});

</script>