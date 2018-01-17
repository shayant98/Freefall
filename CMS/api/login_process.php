<?php
session_start();


  if (isset($_POST['submit'])) {
    include '../../api/dbc.php';

     $username = mysqli_real_escape_string($conn, $_POST['username']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);


    //Error Handlers
    if (empty($username) || empty($password)) {
      header("Location: ../index.php?login=empty");
      exit();
    }else {
      $sql = "SELECT * FROM fr_admin WHERE username = '$username'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck < 1) {
        header("Location: ../index.php?login=error");
        exit();
      }else {
        if ($row = mysqli_fetch_assoc($result)) {
          //De-Hashing moet hier gedaan worden
          if ($password != $row['password']) {
            header("Location: ../index.php?login=error");
            exit();
          }elseif ($password == $row['password']) {
            //login the user here
            $_SESSION['a_name'] = $row['id'];
            $_SESSION['a_surname'] = $row['name'];
            $_SESSION['a_username'] = $row['surname'];


              header("Location: ../dashboard.php");
              exit();
          }
        }
      }
    }
  }else {
    header("Location: ../index.php?login=error");
    exit();
  }
 ?>
