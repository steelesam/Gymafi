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
    <?php
        session_start();

        // Sends user back to login page if not correct credentials
        if(!isset($_SESSION['administrator'])){
           header('location:login.php');
        }
    ?>

<?php
include('conn.php');
    
echo "<div class='container-fluid padding postloginpage'>
        <div class='row aboutwelcome text-center'>
            <div class='col-12 myabouttext'>
                <h1 class='display-4'>Applications <i class='far fa-check-circle fa-sm'></i></h1>
                <hr>
                <h3>Approve or deny applications to become one of your registered clients.</h3>
                <div class='col-12'>  
                <br>
                <br>
                </div>
            </div>
        </div>";
    

    // Retrieving and displaying applications
    $appquery = "SELECT * FROM Applications";
    $appresult = $conn->query($appquery);
    if(!$appresult){
        echo $conn->error;
    }

    while($row = $appresult->fetch_assoc()){
        $appid= $row['ApplicationID'];
        $uid = $row['UserID'];
        $uname = $row['Username'];
        $fname = $row['FirstName'];
        $lname = $row['LastName'];
        $date = $row['DateOfApplication'];
        $fdate = date("d-m-Y", strtotime($date));

        echo "  <div class='table-responsive-md'>
                <table style = 'width:100%'> 
                <tr>
                    <th style = 'text-align:center'><h3><i class='fas fa-user fa-sm'></i> Application No.</h3></th>
                    <th style = 'text-align:center'><h3>User ID</h3></th>
                    <th style = 'text-align:center'><h3>Username</h3></th>
                    <th style = 'text-align:center'><h3>First Name</h3></th>
                    <th style = 'text-align:center'><h3>Last Name</h3></th>
                    <th style = 'text-align:center'><h3>Date of Application</h3></th>
                    <th style = 'text-align:center'><button type='submit' name = 'approve' class='btn btn-success'>
                    <a href = 'processapproval.php?useid=$uid' style = 'text-decoration:none; color:black'>APPROVE<a/></button></th>
                </tr>
                <tr>
                    <td style = 'text-align:center'><h4>$appid</h4></td>
                    <td style = 'text-align:center'><h4>$uid</h4></td>
                    <td style = 'text-align:center'><h4>$uname</h4></td>
                    <td style = 'text-align:center'><h4>$fname</h4></td>
                    <td style = 'text-align:center'><h4>$lname</h4></td>
                    <td style = 'text-align:center'><h4>$fdate</h4></td>
                    <td style = 'text-align:center'><button type='submit' name = 'reject' class='btn btn-danger'>
                    <a href = 'processdenial.php?useid=$uid' style = 'text-decoration:none; color:black'>REJECT<a/></button></td>
                </tr>
            </table>
            </div>
            <br>
        <br>";
        
    }
?>
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