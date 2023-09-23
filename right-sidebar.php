<div class="right-side-filter">
	<div class="right-side">
		<div class="container">
			<img src="pics/acc-logo.png" alt="" width="200px">
			<form id="download_catalog" action="">
				<p><strong>Mail Me</strong></p>
				<input type="text" id="fname" name="fullname" placeholder="Write Your name..">
			
				<input type="email" id="email" name="email" placeholder="Write Your email..">
			
				<input type="number" id="mobile" name="mobile" placeholder="Write Your mobile..">

				<textarea id="message" name="message" placeholder="Write your message.." style="height:100px"></textarea>

				<input type="radio" id="refrigerator" name="calalog_type" value="refrigerator">
				<label for="refrigerator">Refrigerator</label>
				<input type="radio" id="air_conditioner" name="calalog_type" value="air_conditioner">
				<label for="air_conditioner">Air Conditioner</label><br><br>
				<input type="radio" id="fan" name="calalog_type" value="fan">
				<label for="fan">Fan</label>
				<input type="radio" id="acc_brand" name="calalog_type" value="acc_brand">
				<label for="acc_brand">ACC Brand</label>
				<input type="radio" id="all" name="calalog_type" value="all">
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
			url: "process.php",
			data: formData,
			success: function(response) {
			console.log("Form submitted successfully.");
			
			$("#download_catalog")[0].reset();
			},
			error: function(xhr, status, error) {

			console.error("Error: " + error);
			}
		});
		});
	});
</script>