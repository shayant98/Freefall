<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>

<body class="gray-bg">


    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div >
          
            <div class="card">
<div class="card-block">
            <div class="text-center">
                <img src="../img/logo_freefall2.png" class="rounded mx-auto d-block" alt="...">
            </div>

            <form class="m-t" role="form" action="api/login_process.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Gebruikersnaam">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Wachtwoord">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" name="submit">Login</button>
            </form>
</div>
</div>
            <!-- <div class="text-center">

                <h1 class="logo-name">Freefall</h1>

            </div> -->
            <!-- <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            </p>
            <p>Login in. To see it in action.</p> -->
            <!-- <form class="m-t" role="form" action="api/login_process.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Gebruikersnaam">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Wachtwoord">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" name="submit">Login</button>
            </form> -->
            <!-- <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p> -->
        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
