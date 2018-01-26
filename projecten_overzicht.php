<?php
  include 'api/dbc.php';
 ?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Project Leider</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/apple-touch-icon1.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon1.png">

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

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
		<?php include 'includes/header.php'; ?>

			<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">PROJECTEN OVERZICHT</a></li>
									<li class="active">PROJECTEN</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Kies een Project</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
						<li data-option-value="*" class="active"><a href="#">Show All</a></li>
						<li data-option-value=".website"><a href="#">Websites</a></li>
						<li data-option-value=".logo"><a href="#">Logos</a></li>
						<li data-option-value=".brands"><a href="#">Brands</a></li>
						<li data-option-value=".medias"><a href="#">Medias</a></li>
					</ul>

					<hr>

					<div class="row">

						<div class="sort-destination-loader sort-destination-loader-showing">
							<ul class="portfolio-list sort-destination popup-gallery-ajax" data-sort-id="portfolio">
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM fr_projects  INNER JOIN fr_users ON fr_projects.project_owner = fr_users.id WHERE status =0 ");
                  while ($row = mysqli_fetch_array($sql)) {
                    $id = $row['id'];
                    $name = $row['project_name'];
                    $disc = $row['project_disc'];
                    $u_name = $row['name'];
                    $surname = $row['surname'];
                    $price = $row['project_price'];
                    $deadline = $row['project_deadline'];
                    ?>
                    <li data-id=<?php echo $id ?>  class="  col-md-3 col-sm-6 col-xs-12 isotope-item <?php echo $row['project_tags']; ?> project">
                      <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                        <span class="thumb-info-wrapper">
                          <a   href="project_overzicht.php" data-ajax-on-modal>
                            <img src="img/team/team-1.jpg" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                              <span   class=" thumb-info-inner"><?php echo $name ?></span>
                              <span class="thumb-info-type"><?php echo $id ?></span>
                            </span>
                          </a>
                        </span>
                        <span class="thumb-info-caption">
                          <span class="thumb-info-caption-text"><?php echo $disc ?></span>
                          <span class="thumb-info-social-icons">
                            <a href="#" data-toggle="tooltip" title=<?php echo $price ?>><i class="fa fa-money"></i><span>Budget</span></a>
                            <a href="#" data-toggle="tooltip" title=<?php echo $u_name ?>><i class="fa fa-user"></i><span>Opdrachtgever</span></a>
                            <a href="#" data-toggle="tooltip" title=<?php echo $deadline ?>><i class="fa fa-calendar-o"></i><span>Deadline</span></a>
                          </span>
                        </span>
                      </span>
                    </li>


                    <?php
         }
                      ?>

                    </ul>
						</div>
					</div>

				</div>

			</div>
      <?php include 'includes/footer.php'; ?>


		</div>

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

		<!-- Examples -->
		<script src="js/examples/examples.portfolio.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
  --><script>
$( document ).ready(function() {
   $('.project').click(function(event) {
  var id = $(this).attr('data-id')
     $.ajax({
         type: "POST",
         url: "project_overzicht.php",
         data: {id: id},
         success: function(data) {
           $('.mfp-content').html(data)
           console.log(id);
         }
      })
   });
    });
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

	</body>
</html>
