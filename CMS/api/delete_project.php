<?php
include 'dbc.php';

if (!empty($_GET['id'])) {
  $id = $_GET['id'];

  $sql = mysqli_query($conn, "DELETE FROM fr_projects
WHERE id=$id");
header("Location: ../projecten.php");
}else {
  echo "Geen Project gekozen";
}
 ?>
