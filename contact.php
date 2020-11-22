
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
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent>
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

    <!-- Title -->
    <div class="container-fluid padding mycontact">
        <div class="row contactwelcome text-center">
            <div class="col-12 mycontacttext">
                <h1 class="display-4">Contact <i class="fas fa-plug"></i></h1>
                <hr>
                <div class="col-12">
                    <p class="lead">A core part of our philosophy here at GYMAFI is communication. We understand that
                        learning to change your lifestyle doesnt happen overnight, and there is a lot to learn. That's why
                        we encourage our clients to stay in touch as much as possible - we want to help. Through our state of 
                        the art web application, communication has never been easier. Talk to your trainer directly through the 
                        website and any issues or questions you have can be addressed right along with your personal
                        progression profile!
                    </p>
                        <p class = "lead">
                        If you are not currently a member of GYMAFI but want to get in touch with our dedicated team, not to 
                        worry! Just contact us through one of our many active social media links below or at: 
                    </p>
                        <ul class = "phonemail lead grow" style = "list-style-type:none">
                            <li> (e) gymafi@gmail.co.uk</li>
                            <li> (ph) 01210 999 999 </li>
                        </ul>
                    <hr>

                </div>
            </div>
        </div>

        <!-- Connect Social Media links-->
        <div class="container-fluid padding ">
                    <div class="row text-center padding">
                        <div class="col-12">
                            <h2 id="socialhead">Connect</h2>
                        </div>
                        <div class="col-12 social padding">
                            <a href="#"><i class="fab fa-facebook-f grow"></i></a>
                            <a href="#"><i class="fab fa-instagram grow"></i></a>
                            <a href="#"><i class="fab fa-twitter grow"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g grow"></i></a>
                            <a href="#"><i class="fab fa-linkedin grow"></i></a>
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