<?php require('../resources/config.php'); ?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

	<div class="main-wrapper">

		<div class="main-cover">
			
			<div class="page-not-found-wrap">
				<img src="<?php echo $path; ?>img/page-not-found.png" alt="" class="img-fluid page-not-found" />
			</div> <!--  .about-banner-wrap -->

			<div class="page-not-found-text">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>
								oops!
							</h1> 
							<h6>
								404 PAGE NOT FOUND
							</h6>
							<p>
								the page you are looking might have been removed had its name changes or is temporarily unavailable.
							</p>
							<a href="<?php echo $path ?>" class="btn btn-primary btn-lg">
								go to home page
							</a>
						</div>
					</div>
				</div>
			</div>

		</div> <!--  .main-cover -->	

	<div> <!--  .main-wrapper -->

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
