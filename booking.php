<?php 
include 'header.php';
include 'nav.php';
$page_name = 'CONTACT';
 $name_color = "style='color:black'";
 include 'bar.php';
?>

<div class="container bg-white z-content verticalpadding">
	<div class="content-narrow">
		<h3 style="margin-top: 0; padding-top: 20px;">Representation</h3>
	</div>

	<div id="representation" class="content-narrow flex">
		<div class="quarter">
			<h3>Lable</h3>
			<p>SJD Records<br>simon@sjdrecords.com<br>123-2233-23233</p>
		</div>
		<div class="quarter">
			<h3>Mangement</h3>
			<p>Vincent Jolin<br>vince@svj.com<br>123-2233-23233</p>
		</div>
		<div class="quarter">
			<h3>Booking</h3>
			<p>The Bookmaker<br>barry@bookmaker.com<br>123-2233-23233</p>
		</div>
		<div class="quarter">
			<h3>Press</h3>
			<p>Pink Lady PR<br>penny@pinkladypr.com<br>123-2233-23233</p>
		</div>
	</div>
</div>


<div class="container">

	<div class="content-narrow flex verticalpadding">
		<div class="half" style="color: white;">
			<p style='max-width: 250px;'><strong>Leave your message and said artist we'll get back to you asap</strong></p>
		</div>
		<div class="half" style='text-align: right;'>
			
			<form id="contact-form">
				<input type="text" name="name" placeholder="Name">
				<input type="email" name="email" placeholder="Email">
				<input type="text" name="subject" placeholder="Subject">
				<textarea name="message" placeholder="Message"></textarea>
				<br />
				<input type="submit" name="submit" value="Send">
			</form>
		</div>
		
	</div>

</div>

<?php include 'footer.php'; ?>

