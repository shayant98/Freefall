<?php
session_start();
include 'dbc.php';
  if (!empty($_GET)) {
  echo  $proj_id = $_GET['id'];
  echo  $u_id = $_SESSION['u_id'];

    $sql = mysqli_query($conn,"UPDATE fr_projects
            SET status='1', freelancer=$u_id
              WHERE id=$proj_id");
  }else {
    echo "p";
  }

 ?>
