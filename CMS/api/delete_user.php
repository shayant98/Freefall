<?php
include 'dbc.php';

if (!empty($_GET['id'])) {
  $id = $_GET['id'];

  $sql = mysqli_query($conn, "DELETE FROM fr_users
WHERE id=$id");
header("Location: ../gebruikers.php");
}else {
  echo "Geen Project gekozen";
}
 ?>
