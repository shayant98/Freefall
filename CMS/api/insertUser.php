<?php
  session_start();

  if(!empty($_POST)){
    include 'dbc.php';

     $name = mysqli_real_escape_string($conn, $_POST['name']);
     $surname = mysqli_real_escape_string($conn, $_POST['surname']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $username = mysqli_real_escape_string($conn, $_POST['username']);
     $password =mysqli_real_escape_string($conn, $_POST['password']);
     $function =mysqli_real_escape_string($conn, $_POST['function']);

     $sql = mysqli_query($conn,"INSERT INTO fr_users(name, surname, email, username, password, salary, access_level)
       VALUES('$name','$surname','$email','$username','$password','0','$function')");

  if ($sql) {
    header("Location: ../gebruikers.php");
  }else {
    echo mysqli_error($conn);


  }
}

 ?>
