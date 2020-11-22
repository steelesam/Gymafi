<?php
        session_start();
        // Sends user back to login page if not correct credentials
        if(!isset($_SESSION['administrator'])){
           header('location:login.php');
        }
    ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Imports-->
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
            <a class="nav-link grow" href="admindash.php">DASHBOARD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link grow" href="adminviewclients.php">CLIENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="admincalendar.php">CALENDAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="adminsendemail.php">COMMUNICATE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="adminapplications.php">APPLICATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="adminlogout.php">LOGOUT <i class="fas fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Title Section-->
    <div class='container-fluid padding postloginpage'>
        <div class='row aboutwelcome text-center'>
            <div class='col-12 myabouttext'>
                <h1 class='display-4'>Set Appointment Slot <i class='fas fa-calendar-alt fa-sm'></i></h1>
                <hr>
                <h3>Set an appointment in your calendar and your client will be able to view it.</h3>
            </div>
        </div>

        <?php
        include('conn.php');

        echo "
        <div class='row aboutwelcome text-center'>
            <div class='col-12 abouttext'>
                <div class = 'col-12'>
                    <div class='row'>
                        <div class='col-4'></div>
                        <div class='col-4'>
                                <form class = 'contact-form' action = 'processadminsetcal.php' method = 'POST'>
                                <div class='form-group'>
                                <label for='name'><h5>User ID</h5></label>
                                <i class='fas fa-user'></i>
                                <input type='text' class='form-control' name = 'id' placeholder='Enter the User ID of the client'>
                                </div>
                                <div class='form-group'>
                                <label for='name'><h5>Username</h5></label>
                                <i class='fas fa-user'></i>
                                <input type='text' class='form-control' name = 'name' placeholder='Enter the Username of the client'>
                                </div>
                                <div class='form-group'>
                                <label for='title'><h5>Appointment Description</h5></label>
                                <input type='text' class='form-control' name = 'title'  placeholder='Enter your appointment description>
                                </div>
                                <div class='form-group'>
                                <label for='date'><h5>Date</h5></label>
                                <input type='date' class='form-control' name = 'date'  placeholder='yyyy-mm-dd'>
                                </div>
                                <div class='form-group'>
                                <label for='time'><h5>Time</h5></label>
                                <input type='time' class='form-control' name = 'time'  placeholder='Enter time of appointment'>
                                </div>
                                <br>
                                <br>
                                <div id='appointmentbutton'>
                                <button type='submit' name='makeappointment' class='btn btn-lg btn-warning'>MAKE APPOINTMENT</button>
                                </div>
                                </form>
                                <br><br><br>
                                <br><br><br>
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        "
        ?>

    <br><br><br><br><br>

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