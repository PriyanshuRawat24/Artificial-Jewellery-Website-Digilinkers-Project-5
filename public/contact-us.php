<?php require('../resources/config.php'); ?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<div class="main-wrapper">

	<div class="main-cover">

		<div class="page-banner-wrap">
			<img src="<?php echo $path; ?>contact-image/banner.jpg" alt="" class="img-fluid"/>
		</div> <!--  .about-banner-wrap -->

		<?php

		//Check for header injections
		function has_header_injection($str)
		{
			return preg_match("/[\r\n]/", $str);
		}

		if (isset($_POST['contact_submit'])) {

			$name  = trim($_POST['name']);
			$email = trim($_POST['email']);
			$phone = trim($_POST['phone']);
			$msg   = $_POST['message'];

			//Check to see if $name or $email have header injections
			if (has_header_injection($name) || has_header_injection($email) || has_header_injection($phone)) {
				die(); //If true kills the script
			}

			if (!$name || !$email || !$phone || !$msg) {

				echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button btn-block">Go back and try again</a>';
				exit;
			}

			// Add the recipient email to variable
			$to = "digilinkers@gmail.com";

			// Create a subject
			$subject = "$name sent you a message via your contact form at " . $company . " website";

			//Construct the message
			$message = "<h2>Query Received</h2>
														<h4>Name:</h4><p>" . $name . "</p>
														<h4>Email:</h4><p>" . $email . "</p>
														<h4>Phone:</h4><p>" . $phone . "</p>
														<h4>Message:</h4><p>" . $msg . "</p>";

			$message = wordwrap($message, 72);

			// Set the mail headers into a variable
			$headers  = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
			$headers .= "From: " . $name . "<" . $email . ">" . "\r\n";
			$headers .= "X-Priority: 1" . "\r\n";
			$headers .= "X-MSMail-Priority: High" . "\r\n\r\n";

			mail($to, $subject, $message, $headers);


		?>

			<!-- Show success message after mail has been sent -->
			<!-- <div class="alert alert-primary col-lg-12"  id="mail-msg-alert" role="alert">
										<h5 style="text-align: center;">Thanks for contacting <?php echo $company; ?> Batteries!</h5>
										<p style="text-align: center;">Please allow 24 hours for a response.</p>
										<button type="button" class="c-btn"><a id="mail-msg" href="index.php">Go to Home Page</a></button>
									</div> -->

		<?php } else { ?>


			<section>
				<div class="form-wrapper">
					<div class="container">
						<div class="form-text-box text-center">
							<hr>
							<h2>contact</h2>
							<hr>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<form class="form-box">
									<div class="row mb-4">
										<div class="col">
											<div data-mdb-input-init class="form-outline">
												<label class="form-label" for="form6Example1">First name</label>
												<input type="text" id="form6Example1" class="form-control" />
											</div>
										</div>
										<div class="col">
											<div data-mdb-input-init class="form-outline">
												<label class="form-label" for="form6Example2">Last name</label>
												<input type="text" id="form6Example2" class="form-control" />
											</div>
										</div>
									</div>

									<!-- Email input -->
									<div class="row mb-4">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div data-mdb-input-init class="form-outline">
												<label class="form-label" for="form6Example5">Email</label>
												<input type="text" id="form6Example5" class="form-control" />
											</div>
										</div>

										<!-- Number input -->
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div data-mdb-input-init class="form-outline mb-4">
												<label class="form-label" for="form6Example6">Phone</label>
												<input type="number" id="form6Example6" class="form-control" />
											</div>
										</div>
									</div>

									<!-- Text input -->
									<div data-mdb-input-init class="form-outline mb-4">
										<label class="form-label" for="form6Example4">Address</label>
										<textarea type="text" rows="5" id="form6Example4" class="form-control"></textarea>
									</div>

									<!-- Create an account? -->
									<div class="form-check d-flex justify-content-center mb-4">
										<p class="form-check-label" for="form6Example8"> Create an account? </p>
									</div>

									<!-- button -->
									<div class="form-btn-box text-center">
										<a href="#"><button class="btn">Place order</button></a>
									</div>
								</form>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-text-section">
									<div class="contact-side-wrap">
										<div class="contact-mail-wrap text-center">
											<h5>Connect with us:</h5>
											<p>
												We are there to help you. For any enquiries, connect with us and we will get back to you.
											</p>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="contact-phone-wrap">
											<h5>Talk to us:</h5>
											<p>
												Call us at +91-1111100000
											</p>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="contact-social-wrap">
											<h5>Social Presence</h5>
											<p>
												Find us at:
											</p>
											<ul class="contact-social-list d-flex">
												<li class="pr-3">
													<a href=""><i class="fab fa-facebook-f"></i></a>
												</li>
												<li class="pr-3">
													<a href=""><i class="fab fa-instagram"></i></a>
												</li>
												<li class="pr-3">
													<a href=""><i class="fab fa-linkedin-in"></i></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="adress-box">
											<h5>Office Address:</h5>
											<p>rz-2333/2A dabri mor,new delhi</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<!-- footer -->

			<section>
			<footer>
				<div class="footer-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="company-image-box">
									<img src="..//public/images/logo.svg" alt="">
								</div>
								<div class="company-para-box">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro consequuntur </p>
								</div>
								<div class="footer-inner-box-2 text-light">
									<a href="#">
										<h4 class="head-2"> our service</h4>
										<i class="fa-solid fa-facebook"></i>
										<i class="fa-solid fa-instagram"></i>
										<i class="fa-solid fa-x-twitter"></i>
									</a>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="footer-box">
									<div class="head-box">
										<h4>category</h4>
									</div>
									<ul class="para-box">
										<li><a href="#">home</a></li>
										<li><a href="#">necklace sets</a></li>
										<li><a href="#">beads necklaces</a></li>
										<li><a href="#">hand jewellery</a></li>
										<li><a href="#">earrings</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="footer-box">
									<div class="head-box">
										<h4>quick links</h4>
									</div>
									<ul class="para-box">
										<li><a href="#">about us</a></li>
										<li><a href="#">contact us</a></li>
										<li><a href="#">our reviews</a></li>
										<li><a href="#">track your order</a></li>
										<li><a href="#">become affiliate</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="footer-box">
									<div class="footer-inner-box-1 ">
										<h4 class="head-1">store location</h4>
										<p>rz-002/12, palam road, new delhi</p>
										<p>call me: <a href="tel:91223344332">+91-223344332</a></p>
										<p>email: <a href="mailto:yoyo@gmail.com">yoyo@gmail.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
			</footer>
		</section>

		<?php } ?>


	</div> <!--  .main-cover -->

	<div> <!--  .main-wrapper -->

		<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>