<?php
session_start();


  if (isset($_POST['submit'])) {
    include 'dbc.php';

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    //Error Handler
    if (empty($username) || empty($password)) {
      header("Location: ../index.php?login=empty");
      exit();
    }else {
      $sql = "SELECT * FROM fr_users WHERE username = '$username'";
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
            $_SESSION['u_id'] = $row['id'];
            $_SESSION['u_first'] = $row['name'];
            $_SESSION['u_last'] = $row['surname'];
            $_SESSION['u_email'] = $row['email'];
            $_SESSION['u_username'] = $row['username'];
            $_SESSION['u_salary'] = $row['salary'];
            $_SESSION['u_level'] = $row['access_level'];

            if ($row['access_level'] == 1) {
              header("Location: ../overzicht_opdrachtgever.php");
              exit();
            }elseif ($row['access_level'] == 2) {
              header("Location: ../overzicht_freelancer.php");
              exit();
            }
          }
        }
      }
    }
  }else {
    header("Location: ../index.php?login=error");
    exit();
  }
 ?>
