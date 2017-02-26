<!DOCTYPE html>
<html lang="en">

<?php include("include/header.php");?>
<link rel="stylesheet" href="css/contact.css" />

<body>
<?php include("include/navbar.php");?>
    <!-- Navigation -->
    <!-- Contact Head Section -->
    <section id="google-map">
		<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15935.191411798736!2d101.66359456446486!3d3.1479715633248246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xf19e6b1ee34a40a6!2sRaj%2C+Ong+%26+Yudistra!5e0!3m2!1sbn!2sbd!4v1458794932108" allowfullscreen="allowfullscreen" frameborder="0" height="350" width="100%"></iframe>
		</div>
	</section>
	<section id="contact-form">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="service-tex">
						<h2> <b class="bold bottom-border">CONTACT</b> US</h2>
					</div>
				</div>
				<div class="col-sm-4"></div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h3>Corporate Headquarters</h3>
					<ul class="list-unstyled">
						<li><i class="fa fa-map-marker"></i>
						Jafarabad, Mohannadpur, Dhaka-1207</li>
						<li><i class="fa fa-phone"></i>
						<a href="tel:+17247465300">1.724.746.5300</a>
						</li><li><i class="fa fa-phone"></i>
						Customer Service: <a href="tel:+18557280001">1.855.728.0001</a></li>
						<li><i class="fa fa-envelope-o"></i>
						<a href="mailto:apex-engineeringbd.com">apex-engineeringbd.com</a>
						</li>
						<li><a href="www.apex-engineeringbd.com">apex-engineeringbd.com</a></li>
					</ul>

				</div>
				<div class="col-md-8">
					<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<input type="text" class="form-control form-controler" id="name" placeholder="Enter name" required="required" />
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<input type="email" class="form-control form-controler" id="exampleInputEmail1" placeholder="Email">
						</div>
					</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
												placeholder="Message"></textarea>
							</div>
						</div>
					</div>
				</div>
						
			</div>
			<div class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Send Message</button>
				</div>
			</div>
		</div>
	</section>
    <!-- address map -->
   

	<!-- footer -->
	<?php include("include/footer.php");?>
    <!-- jQuery -->

</body>

</html>


