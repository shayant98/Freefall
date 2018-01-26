<?php
  session_start();

  if(!empty($_POST)){
    include 'dbc.php';

     $project_name = mysqli_real_escape_string($conn, $_POST['project_name']);
     $project_tags = mysqli_real_escape_string($conn, $_POST['project_tags']);
     $project_price = mysqli_real_escape_string($conn, $_POST['project_price']);
     $project_disc = mysqli_real_escape_string($conn, $_POST['project_disc']);
     $project_owner = $_SESSION['u_id'];
     $date = date("Y-m-d");

     $sql = mysqli_query($conn,"INSERT INTO fr_projects(project_name, project_disc, project_tags, project_owner, project_price, project_deadline, status)
       VALUES('$project_name','$project_disc','$project_tags','$project_owner','$project_price','$date','0')");

  if ($sql) {
    header("Location: ../nieuwe_project.php");
  }else {
    echo mysqli_error($conn);


  }
}

 ?>
