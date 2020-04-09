<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    
<body style="background-color:#343b40;">
    <! Backgorund Color>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Login">

    <title>Welcome</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }
            p {
                color: white;
                font-size: 25px;
            }

            h1 {
                color: white;
                font-size: 50px;
            }
    </style>
</head>

    <body style="background-color:#284759;">
    <! Backgorund Color>
    
<body>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a href="index.html" class="navbar-brand">Oceanic Zones</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Menu Items ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                        <a href="SunlightZone.html" class="nav-item nav-link active">Sunlight Zone</a>
                        <a href="TwilightZone.html" class="nav-item nav-link active">Twilight Zone</a>
                        <a href="MidnightZone.html" class="nav-item nav-link active">Midnight Zone</a>
                        <a href="AbyssalZone.html" class="nav-item nav-link active">Abyssal Zone</a>
                        <a href="HadalZone.html" class="nav-item nav-link active">Hadal Zone</a>
                        <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Menu Items ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                    </div>
                    <div class="navbar-nav ml-auto">
                        <a href="login.php" class="nav-item nav-link active">Login</a> <!Remember Login.html if goes other  goes bad>
                        <a href="register.php" class="nav-item nav-link active">Sign Up</a>
                    </div>
                </div>
            </nav>
        
    <div class="page-header">
        <h1>Hello <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b> welcome to the Oceanic Zones website.</h1>
    </div>
    <img src="images/Welcom_Page1.jpg" alt="Picture of Oceanic Zones" height="35%" width="35%">

</body>

</html>