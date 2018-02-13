<?php

  include 'dbc.php';
  if (isset($_POST)) {
     $id = mysqli_real_escape_string($conn, $_GET['id']);
    $problem = mysqli_real_escape_string($conn, $_POST['problem']);

    $sql  = mysqli_query($conn, "SELECT access_level FROM fr_users WHERE id = $id");
    while ($row = mysqli_fetch_array($sql)) {
      $access_level = $row['access_level'];
    }




if ($access_level == '1') {
  $sql = mysqli_query($conn, "INSERT INTO fr_trouble (problem, status, user_id)
  VALUES ('$problem', '0', '$id')");

  header("Location: ../overzicht_opdrachtgever.php");
}elseif ($access_level == '2') {
  $sql = mysqli_query($conn, "INSERT INTO fr_trouble (problem, status, user_id)
  VALUES ('$problem', '0', '$id')");

  header("Location: ../overzicht_freelancer.php");
}else {
  header("Location: ../index.php");
}


  }

 ?>
