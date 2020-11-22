<!--
WEB DEVELOPMENT PROJECT CSC7062
AUTHOR: SAMUEL STEELE
STUDENT NUMBER: 40282308
-->

<!--Quick note to apologise for lack of folders/directories, I foolishly did not try to manage files until very late 
in the project and when trying to put all files in admin/users/conn/styles folders and move all links to appropriate directories
using ../ etc I got sent to the depths of error message hell and don't have time to fix it all as im finishing features.
Sorry if you find it difficult to navigate through file structure whilst marking-->


<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Imports -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="code_icon copy.png" type="image/x-icon" />
    <link rel="stylesheet" href="gui.css" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bd73f651fd.js" crossorigin="anonymous"></script>
    <link rel="icon" href="dumbbelllogo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Gymafi</title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent sticky-top">
        <div class="container-fluid">
            <a href="#"><i class="fas fa-dumbbell fa-lg"></i></a>
            <a class="nav-link grow" href="#">GYMAFI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link grow" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="login.php">LOGIN <i class="fas fa-user"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Image Slider -->
    <div id="slidescontainer">
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/gym3t.jpg">
                    <div class="carousel-caption">
                        <h1 class="display-2">GYMAFI</h1>
                        <h2>PERSONAL TRAINING</h2>
                        <p></p>
                        <button onclick="window.location.href = 'about.php';"
                         type="button" class="btn btn-outline-light btn-lg">EXPLORE</button>
                        <button onclick="window.location.href = 'login.php';"
                        type="button" class="btn btn-warning btn-lg">LOG IN</button>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/gym2.jpg">
                    <div class="carousel-caption">
                        <h1 class="display-2">GYMAFI</h1>
                        <h2>PERSONAL TRAINING</h2>
                        <p></p>
                        <button onclick="window.location.href = 'about.php';"
                         type="button" class="btn btn-outline-light btn-lg">EXPLORE</button>
                         <button onclick="window.location.href = 'login.php';"
                        type="button" class="btn btn-warning btn-lg">LOG IN</button>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/gym1.jpg">
                    <div class="carousel-caption">
                        <h1 class="display-2">GYMAFI</h1>
                        <h2>PERSONAL TRAINING</h2>
                        <p></p>
                        <button onclick="window.location.href = 'about.php';"
                         type="button" class="btn btn-outline-light btn-lg">EXPLORE</button>
                         <button onclick="window.location.href = 'login.php';"
                        type="button" class="btn btn-warning btn-lg">LOG IN</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
    <div class="container-fluid">
        <div class="row jumbotron" id="myjumb">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
               <p class="lead" id="firstline"> Improving your life has never been easier!</p>
               <p class = "lead"> If you are not already a member of GYMAFI then
                 click the REGISTER button below and simply follow the instructions from our dedicated login service.
                </p>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                    <div id="buttonlorem">
                    <button onclick="window.location.href = 'register.php';"
                        type="button" class="btn btn-warning btn-lg">REGISTER</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="container-fluid padding mycongrats">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Congratulations! <i class="far fa-check-circle"></i></h1>
                <hr>
                <div class="col-12">
                    <p class="lead">You have taken the first step to becoming the best version of yourself.
                        It's no secret that a healthy body equals a healthy mind, yet so many of us struggle to make the initial 
                        steps to better ourselves mentally and physically. Here at GYMAFI we pride ourselves on helping our clients
                        begin this transition and work with them to tailor the experience to their individual needs.
                    </p>
                </div>
            </div>
        </div>
    
    <!-- Three Column Section -->
    <div class="container-fluid padding mythree">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4 myfood grow">
                <i class="fas fa-apple-alt"></i>
                <h3>FOOD PLANS</h3>
                <p>We offer guidance on how to implement a healthy diet, with a calculator that tracks your macros.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mytrain grow">
                <i class="fas fa-dumbbell"></i>
                <h3>TRAINING PLANS</h3>
                <p>We'll show you how to tailor your workouts to your personal goals.</p>
            </div>
            <div class="col-sm-12 col-md-4 mytrack grow">
                <i class="fas fa-chart-line"></i>
                <h3>TRACKING</h3>
                <p>With our sophisticated web application, you can simply log in and view your progress through our system!</p>
            </div>
        </div>
        </div>
        <hr class="my-4">
    </div>

</body>

<!-- Imports -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>