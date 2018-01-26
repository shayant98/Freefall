<?php
  session_start();
  include 'api/dbc.php';

 ?>


<!DOCTYPE html>
<html lang="en">
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

  <h2>Projecten</h2>

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
    <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
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

             <li class="col-md-3 col-sm-6 col-xs-12 isotope-item <?php echo $row['project_tags']; ?>">
               <div class="portfolio-item">
                 <a href="portfolio-single-small-slider.html">
                   <span class="thumb-info thumb-info-lighten">
                     <span class="thumb-info-wrapper">
                       <img src="img/projects/project.jpg" class="img-responsive" alt="">
                       <span class="thumb-info-title">
                         <span class="thumb-info-inner"><?php echo $name ?></span>
                         <span class="thumb-info-type"><?php echo $u_name ?></span>
                       </span>
                       <span class="thumb-info-action">
                         <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                       </span>
                     </span>
                   </span>
                 </a>
               </div>
             </li>





           <?php
}
             ?>

           </ul>
           </div>
  </div>

</div>
<?php include "includes/footer.php";
?>
</body>
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

		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="js/views/view.home.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.demos.js"></script>

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
</html>
