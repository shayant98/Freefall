<?php
  include 'dbc.php';


  if (isset($_POST['btnAfrondenFree'])) {

    $proj_id = mysqli_real_escape_string($conn, $_GET['proj']);
     $sql = mysqli_query($conn, "UPDATE fr_projects SET comp_status = '1' WHERE id = $proj_id");
     header("Location: ../overzicht-projecten_freelancer.php");
  }
  if (isset($_POST['btnAfrondenOpdr'])) {

    $proj_id = mysqli_real_escape_string($conn, $_GET['proj']);
     $sql = mysqli_query($conn, "UPDATE fr_projects SET comp_status = '2' , status = '2' WHERE id = $proj_id");
     header("Location: ../overzicht-projecten_opdrachtgever.php");
  }

 ?>
