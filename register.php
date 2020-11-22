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

    <!-- Register Section -->
    <div class="container-fluid padding myloginpage">
        <div class="row aboutwelcome text-center">
            <div class="col-12 abouttext">
                <div class = "col-12 mylogin">
                <h1 class="display-4">Register Account <i class="fas fa-user"></i></h1>
               <h3 id = "youarelogged">Sign up and complete your personal profile.</h3>
                <hr>
                <div class="col-12 regpad">   
                </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-md-4 ">
                        <form action = 'processuser.php' method = "post">
                            <div class="form-group userreg">
                            <label for="inputUser1"><h5>Username</h5></label>
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-control" id="inputUser1"  name = "username" placeholder="Enter username">
                            </div>
                            <div class="form-group emailreg">
                            <label for="inputEmail1"><h5>Email address</h5></label>
                            <i class="fas fa-envelope"></i>
                            <input type="email" class="form-control" id="inputEmail1" 
                            aria-describedby="emailHelp" name = "email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                            <label for="inputPassword1"><h5>Password</h5></label>
                            <i class="fas fa-key"></i>
                            <input type="password" class="form-control" id="inputPassword1" name = "pwd" placeholder="Password">
                            </div>
                            <div class="form-group">
                            <label for="firstnameform"><h5>First name</h5></label>
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-control" id="firstnameid"  name = "firstname" placeholder="First name">
                            </div>
                            <div class="form-group">
                            <label for="lastnameform"><h5>Last name</h5></label>
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-control" id="lastnameid"  name = "lastname" placeholder="Last name">
                            </div>
                            <div class="form-group">
                            <label for="ageform"><h5>Age</h5></label>
                            <i class="fas fa-user"></i>
                            <input type="number" class="form-control" id="ageid" name="age" placeholder="Age">
                            </div>
                            <div class="form-group">
                            <label for="heightform"><h5>Height (cm)</h5></label>
                            <i class="fas fa-user"></i>
                            <input type="number" class="form-control" id="heightid" name="height" placeholder="Height (cm)">
                            </div>
                            <div class="form-group">
                            <label for="weightform"><h5>Weight (kg)</h5></label>
                            <i class="fas fa-user"></i>
                            <input type="number" class="form-control" id="weightid" name="weight" placeholder="Weight (kg)">
                            </div>
                            <div class="form-group">
                            <label for="genderform"><h5>Gender</h5></label>
                            <select id="genderid" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                            <i class="fas fa-user"></i>
                            </div>
                            <div class="form-check">
                            </div>
                            <div id="registerbutton">
                            <button type="submit" name = "submit" class="btn btn-lg btn-warning">REGISTER</button>
                            </div>
                            <p>*After successfully registering, you will be redirected to the login page and asked to sign in.</p>
                            </form>
                         </div>
                     <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<!-- Imports-->
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