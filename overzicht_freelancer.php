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
  </body>
</html>
