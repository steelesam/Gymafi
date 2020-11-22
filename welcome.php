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
<nav class="navbar navbar-expand-md navbar-dark bg-transparent">
        <div class="container-fluid">
            <a href="inbox.php"><i class="fas fa-envelope fa-lg"></i></a>
            <a class="nav-link grow" href="inbox.php">INBOX</a>
            <a href="inbox.php"><i class="fas fa-file-image fa-lg"></i></a>
            <a class="nav-link grow" href="viewfiles.php">FILES</a>
            <a href="inbox.php"><i class="far fa-check-circle fa-lg"></i></a>
            <a class="nav-link grow" href="apply.php">APPLY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link grow" href="profile.php">PROFILE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="calc.php">MACROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="tracker.php">TRACKER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="usercalendar.php">CALENDAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="sendemail.php">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="logout.php">LOGOUT <i class="fas fa-user"></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <?php
        session_start();

        // Sends user back to login page if not correct credentials
        if(!isset($_SESSION['adminusers'])){
           header('location:login.php');
        }
    ?>

       <!-- Welcome Dashboard -->
   <div class="container-fluid padding postloginpage">
        <div class="row aboutwelcome text-center">
            <div class="col-12 myabouttext">
                <h1 class="display-4">Welcome to GYMAFI <i class="fas fa-dumbbell fa-sm"></i></h1>
                <hr>
                <div class="col-12">
                </div>
            </div>
        </div>

        <div class='container-fluid padding mythree'>
        <div class='row text-center padding'>
            <div class='col-xs-12 col-sm-6 col-md-4 mytrain grow'>
            <a href='profile.php'><i class='fas fa-dumbbell'></i></a>
                <h3>PERSONAL PROFILE</h3>
                <p>View or customise your profile to be in line with your personal goals.</p>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-4 myfood grow'>
                <a href='calc.php'><i class='fas fa-apple-alt'></i></a>
                <h3>MACRO CALCULATOR</h3>
                <p>We offer guidance on how to implement a healthy diet, with a calculator that tracks your macros.</p>
            </div>
            <div class='col-sm-12 col-md-4 mytrack grow'>
                <a href='tracker.php'><i class='fas fa-chart-line'></i></a>
                <h3>TRACKING SYSTEM</h3>
                <p>Track your body composition, weights lifted, and cardio times.</p>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-4 mytrain grow'>
            <a href='usercalendar.php'><i class='fas fa-calendar-alt'></i></a>
                <h3>CALENDAR</h3>
                <p>View your personal calendar to keep track of your schedule.</p>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-4 myfood grow'>
                <a href='sendemail.php'><i class='fas fa-phone'></i></a>
                <h3>CONTACT TRAINER</h3>
                <p>Contact your personal trainer directly should you need more answers.</p>
            </div>
            <div class='col-sm-12 col-md-4 mytrack grow'>
                <a href='logout.php'><i class='fas fa-sign-out-alt'></i></a>
                <h3>LOGOUT</h3>
                <p>Log out out of your current GYMAFI session.</p>
            </div>
        </div>
        </div>
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