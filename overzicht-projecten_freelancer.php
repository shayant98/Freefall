<?php
  session_start();
  include 'api/dbc.php';
 ?>
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

    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Naam</th>
          <th>Beschrijving</th>
          <th>Opdrachtgever</th>
          <th>Salaris</th>
          <th>deadline</th>
          <th>Project Status</th>
          <th>Freelancer</th>
          <th>Status</th>
        </tr>

      </thead>
      <tbody>
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM fr_projects");
          while ($row = mysqli_fetch_array($sql)) {
            $id = $row['id'];
            $name = $row['project_name'];
            $disc = $row['project_disc'];
            $owner = $row['project_owner'];
            $price = $row['project_price'];
            $deadline = $row['project_deadline'];
            ?>
            <tr>
              <th class="<?php echo $id ?>"><?php echo $id ?></th>
              <td><?php echo $name ?></td>
              <td><?php echo $disc ?></td>
              <td><?php echo $owner ?></td>
              <td><?php echo $price ?></td>
              <td><?php echo $deadline ?></td>
              <td><?php if ($row['status'] == '1' ){
                echo "Aangenomen";
              } ?></td>
              <td><?php echo $_SESSION['u_first'] ?></td>
              <td><?php if ($row['comp_status'] == '2') {
                echo "O | O";
              }elseif ($row['comp_status'] == '1') {
                echo "Goedkeuren van Opdrachtgever nog";
              }else {
                ?>
                <form class="" action="api/goedkeuring_process.php?proj=<?php echo $id ?>" method="post">
                    <button type="submit" class='btn btn-success mr-xs mb-sm' name='btnAfrondenFree'>Afronden</button>
                </form>

                <?php
              } ?></td>
            </tr>

            <?php
          }

         ?>
      </tbody>
    </table>


    </div>
  <?php
    include 'includes/footer.php';
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

  <!-- Theme Custom -->
  <script src="js/custom.js"></script>

  <!-- Theme Initialization Files -->
  <script src="js/theme.init.js"></script>



</html>
