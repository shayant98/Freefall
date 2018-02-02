<?php
  session_start();

  if(!empty($_POST)){
    include 'dbc.php';

     $post = mysqli_real_escape_string($conn, $_POST['post']);
     $date = date("Y-m-d");

     $sql = mysqli_query($conn,"INSERT INTO fr_posts (post,pst_date)
       VALUES('$post','$date')");

  if ($sql) {
    header("Location: ../posts.php");
  }else {
    echo mysqli_error($conn);


  }
}

 ?>
