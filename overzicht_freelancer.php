<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Freelancer</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>

  </head>
  <body>
      <?php

  include "includes/header.php";

  ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="featured-boxes featured-boxes-style-8">
          <div class="row">
            <div class="col-md-5">
              <div class="featured-box featured-box-primary featured-box-text-left">
                <div class="box-content">
                  <div class="row">
                    <div class="col-md-9">
                      <h2>Welkom <?php echo $_SESSION['u_username']; ?></h2>
                    </div>

                    <div class="col-md-3">
                      <div class="align-right">
                        <i class="icon-featured fa fa-user"></i>
                      </div>
                    </div>
										<div class="divider">
													<hr>
												</div>
										<div class="row">
											<div class="col-md-6">
	                      <div class="align-left">
	                        <img src="img/clients/client-1.jpg" alt="">
	                      </div>
	                    </div>

											<div class="col-md-6">
	                      <label>Naam</label>
	                      <p> <?php echo  $_SESSION['u_first'] ; ?></p>
	                    </div>
											<div class="row">
												<div class="col-md-6">
		                      <label>Achternaam</label>
		                      <p> <?php echo  $_SESSION['u_last'] ; ?></p>
		                    </div>
												<div class="col-md-6 pull-right">
		                      <label>Functie</label>
		                      <p> <?php if ($_SESSION['u_level'] == '1') {
							              echo 'opdrachtgever';
							            }else {
							              echo 'freelancer';
							            } ; ?></p>
		                    </div>
											</div>
										</div>

                  </div>



                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="featured-box featured-box-primary featured-box-text-left">
                <div class="box-content">
                  <div class="row">
                    <div class="col-md-9">
                      <h2>Salaris</h2>
                    </div>
                    <div class="col-md-3">
                      <div class="align-right">
                        <i class="icon-featured fa fa-money"></i>
                      </div>
                    </div>
										<div class="divider ">
														<hr>
													</div>
                  </div>

                  <div class="row ">

                    <div class="col-md-6">
                      <label> Salaris</label>

                    </div>
                    <div class="col-md-6 pull-right">
                      <p><i class="fa fa-usd" aria-hidden="true"></i>
                        <?php echo $_SESSION['u_salary']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="featured-box featured-box-primary featured-box-text-left">
                  <div class="box-content">
                    <div class="row">
                      <div class="col-md-9">
                        <h2>Updates</h2>
                      </div>
                      <div class="col-md-3">
                        <div class="align-right">
                          <i class="icon-featured fa fa-info-circle "></i>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <p>System updates hier!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>

</div>
</div>
</div>
</div>



    </div>

  </div>
  <?php
    include 'includes/footer.php';
   ?>
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
  </body>
</html>
