<?php
    session_start();
?>

<!doctype html>
<html lang="en">

<!-- Imports -->

<head>
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
            <a href="#"><i class="fas fa-dumbbell fa-lg"></i></a>
            <a class="nav-link grow" href="index.php">GYMAFI</a>
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
    <!-- Title Section -->
   <div class="container-fluid padding myspecialities">
        <div class="row aboutwelcome text-center">
            <div class="col-12 myabouttext">
                <h1 class="display-4">Specialities <i class="fas fa-heartbeat"></i></h1>
                <hr>
                <div class="col-12">
                    <p class="lead">Here at GYMAFI, we pride ourselves on being able to say that we truly put the client 
                        first. We understand that everybody is different, and everybody has their own individual needs. 
                        This is why we utilise training methods such as SMART goals. A goal should have five key components: SMART, MEASURABLE, ACHIEVABLE, REALISTIC, TIME BASED.</p>
                        <p class = "lead">
                        By following these key
                        training concepts, we provide a platform for our clients that helps them not only achieve their personal
                        goals, but feel good about doing it too. 
                    </p>
                </div>
            </div>
        </div>

    <!-- Cards -->
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4 grow">
                <div class="card">
                    <img class="card-img-top" src="images/aboutback.jpg">
                    <div class="card-body">
                        <h4 class="card-title">STRENGTH TRAINING</h4>
                        <p class="card-text">Whether you are an aspiring bodybuilder, powerlifter, olympic weightlifter, or 
                            just want to look good naked, there is a program waiting to be designed for your needs!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grow">
                <div class="card">
                    <img class="card-img-top" src="images/rehab.jpg">
                    <div class="card-body">
                        <h4 class="card-title">REHABILITATION</h4>
                        <p class="card-text">Sometimes, our bodies can be our own worst enemies. Here at GYMAFI,
                            we take recovery seriously and have a wealth of knowledge just waiting to help fix you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grow">
                <div class="card">
                    <img class="card-img-top" src="images/sprint.jpg">
                    <div class="card-body">
                        <h4 class="card-title">SPORTS SPECIFIC TRAINING</h4>
                        <p class="card-text">If you're training for a triathlon, building power for rugby, or looking 
                            to build greater flexibility and core strength for gymnastics, we have a tailored plan for you.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
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