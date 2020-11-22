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
            <a href="inbox.php"><i class="fas fa-dumbbell fa-lg"></i></a>
            <a class="nav-link grow" href="inbox.php">INBOX</a>
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
   include('conn.php');

   if(!isset($_SESSION['adminusers'])){
       header('location:login.php');
   }
   
    $mailid = $_GET['id'];

    $query = "SELECT * FROM Mail WHERE MailID = '$mailid'";

    $result = $conn->query($query);

    if(!$result){
        echo $conn->error;
    } 

    while($row = $result->fetch_assoc()){
        $subject = $row['MsgSubject'];
        $content = $row['MsgContent'];
        $sender = $row['Sender'];

        echo "
        
        <div class='container-fluid padding postloginpage'>
            <div class='row aboutwelcome text-center'>
                <div class='col-12 myabouttext'>
                    <h3 class='display-4'><i class='fas fa-envelope fa-sm'></i> Subject: $subject </h3>
                    <hr>
                    <br>
                    <br>
                    <h3>$content</h3>
                    <br>
                    <br>
                    <h3>From, $sender</h3>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        ";
    }

    ?>

<br><br><br><br> <br><br><br><br>

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