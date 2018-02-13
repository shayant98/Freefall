<footer class="short" id="footer">
	<div class="container">
		<div class="row">
			<!-- <div class="col-md-5">
				<h4 class="heading-primary">About Porto</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos... <a href="#" class="btn-flat btn-xs">View More <i class="fa fa-arrow-right"></i></a></p>

				<hr class="light">

				<h5 class="heading-primary">Latest Tweet</h5>
				<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': '', 'count': 1}">
					<p>Please wait...</p>
				</div>
			</div> -->
			<!-- <div class="col-md-3">
				<h5 class="mb-sm">Call Us</h5>
				<span class="phone">(800) 123-4567</span>
				<p class="mb-none">International: (333) 456-6670</p>
				<p class="mb-none">Fax: (222) 531-8999</p>
				<ul class="list list-icons list-icons-sm">
					<li><i class="fa fa-envelope"></i> <a href="mailto:okler@okler.net">okler@okler.net</a></li>
				</ul>
				<ul class="social-icons">
					<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div> -->
			<!-- <div class="col-md-4">
				<h4 class="mb-none">Contact ons</h4>
				<form id="contactForm" action="php/contact-form.php" method="POST">
					<input type="hidden" value="Contact Form" name="subject" id="subject">
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<label>Your name *</label>
								<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
							</div>
							<div class="col-md-6">
								<label>Your email address *</label>
								<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>Message *</label>
								<textarea maxlength="5000" data-msg-required="Please enter your message." rows="2" class="form-control" name="message" id="message" required></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<input type="submit" value="Send Message" class="btn btn-primary mb-xl" data-loading-text="Loading...">
						</div>
						<div class="col-md-8">
							<div class="alert alert-success hidden" id="contactSuccess">
								Message has been sent to us.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								Error sending your message.
							</div>
						</div>
					</div>
				</form>
			</div> -->
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-1">
					<a href="index.html" class="logo">
						<img alt="Porto Website Template" class="img-responsive" src="img/logo_freefall_white.png" width="222" height="71">
					</a>
				</div>
				<div class="col-md-10">
					<p>© Copyright 2017. All Rights Reserved.</p>
				</div>
				<!-- <div class="col-md-">
				</div> -->
				<div class="col-md-1">
					<button type="button" class="btn btn-primary mb xl" data-toggle="modal" data-target="#myModal">Technische Dienst</button>
				</div>



			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="color: #000;">problemen?</h4>
			      </div>
			      <div class="modal-body">
			        <!-- <p>Some text in the modal.</p> -->
							<form class="" action="api/problemAdd.php?id=<?php echo $_SESSION['u_id']  ?>" method="post">
								<label>Beschrijf het probleem so duidelijk mogelijk</label>
								<textarea maxlength="5000" data-msg-required="Beschrijf AUB uw probleem" rows="4" class="form-control" name="problem" id="message" required></textarea>
									<br>
									<button type="submit" name="submit" class="btn btn-primary">Versturen</button>
							</form>


					  </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>

			  </div>
			</div>

			</div>
		</div>
	</div>
</footer>

<!-- Vendor -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-12345678-1', 'auto');
	ga('send', 'pageview');
</script>
 -->
