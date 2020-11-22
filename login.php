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

    <!-- Login Section -->
    <div class="container-fluid padding myloginpage">
        <div class="row aboutwelcome text-center">
            <div class="col-12 abouttext">
                <div class = "col-12 mylogin">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-md-4">
                            <form action = 'login.php' method = 'POST'>
                            <div class="form-group">
                            <label for="usernamelog"><h5>Username</h5></label>
                            <i class="fas fa-user"></i>
                            <input type="input" name = "userfield" class="form-control" id="loginusername" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                            <label for="loginpwd"><h5>Password</h5></label>
                            <i class="fas fa-key"></i>
                            <input type="password" name = "passfield" class="form-control" id="loginpwd" placeholder="Enter password">
                            </div>
                            <div class="form-check">
                            </div>
                            <div id="registerbutton">
                            <button type="submit" name = "loginsubmit" class="btn btn-lg btn-warning">LOGIN</button>
                            <button onclick="window.location.href = 'register.php';"
                            type="button" class="btn btn-outline-light btn-lg">REGISTER</button>
                            <p id = "space">  </p>
                            </div>
                            

                            <?php
                            session_start();
                                if(isset($_POST['userfield'])){
                                    include('conn.php');

                                    $username = $_POST['userfield'];
                                    $passw = $_POST['passfield'];

                                    $authuser = "SELECT Password FROM Users WHERE Username = '$username'";
                                    $resultuser = $conn->query($authuser);
                                    $numrowsuser = $resultuser->num_rows;
                                    while($row=$resultuser->fetch_assoc()){
                                        $hash = $row['Password'];
                                    }

                                    $authadmin = "SELECT * FROM Admins WHERE AdminUsername = '$username' AND AdminPassword = '$passw'";
                                    $resultadmin = $conn->query($authadmin);
                                    $numrowsadmin = $resultadmin->num_rows;

                                        if($numrowsuser>0 && password_verify($passw, $hash)){
                                            $_SESSION['adminusers'] = $username;
                                           
                                            header('location:welcome.php');

                                            if(isset($_SESSION['administrator'])){
                                                unset($_SESSION['administrator']);
                                            }

                                            } elseif($numrowsadmin>0){
                                                $_SESSION['administrator'] = $username;

                                                header('location:admindash.php');

                                                if(isset($_SESSION['adminusers'])){
                                                    unset($_SESSION['adminusers']);
                                                }

                                            }
                                            
                                            else {
                                                echo "<p id = 'incorrectpass'>*Incorrect username or password, please try again.</p>";
                                            }
                                            
                                        }
                                    ?>
                                    </form>
                         </div>
                         
                     <div class="col-4"></div>
                     
                </div>
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