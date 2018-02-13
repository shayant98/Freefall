<?php
  include 'dbc.php';

  if (isset($_POST)) {


    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $id = htmlspecialchars($id);

  $sql = mysqli_query($conn, "SELECT * FROM fr_trouble WHERE id = $id");
  if (mysqli_num_rows($sql) < 1) {
    header("Location: ../trouble.php?error");
  }else {
    $sql = mysqli_query($conn, "UPDATE fr_trouble SET status = '1' WHERE id = $id");
    header("Location: ../trouble.php");
  }



  }

 ?>
