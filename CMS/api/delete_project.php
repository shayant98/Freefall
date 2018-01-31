<?php
include 'dbc.php';

if (!empty($_GET['id'])) {
  $id = $_GET['id'];
}else {
  echo "Geen Project gekozen";
}
 ?>
