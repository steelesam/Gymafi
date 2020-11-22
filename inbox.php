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
            <a href="inbox.php"><i class="fas fa-dumbbell fa-lg"></i></a>
            <a class="nav-link grow" href="welcome.php">DASHBOARD</a>
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

    <!-- Title Section -->
    <div class="container-fluid padding postloginpage">
            <div class="row aboutwelcome text-center">
                <div class="col-12 myabouttext">
                    <h1 class="display-4">My Inbox <i class="fas fa-envelope fa-sm"></i></h1>
                    <hr>
                    <h3>Read all of your messages from your personal trainer.</h3>
                    <br>
                    <br>
                </div>
            </div>

    <?php
        session_start();
        // Sends user back to login page if not correct credentials
        if(!isset($_SESSION['adminusers'])){
           header('location:login.php');
        }

        include('conn.php');

        $username = $_SESSION['adminusers'];

        $query= "SELECT UserID FROM Users WHERE Username = '$username'";
        $result = $conn->query($query);

        if(!$result){
            echo $conn->error;
        }

        // Retrieving userID of current logged in user
        while($row = $result->fetch_assoc()){
            $userID = $row['UserID'];
            $_SESSION['userid'] = $userID;
        }

        $msgquery = "SELECT * FROM Mail WHERE UserID = $userID";
        $msgresult = $conn->query($msgquery);

        if(!$msgresult){
            echo $conn->error;
        } 
        
        while($row = $msgresult->fetch_assoc()){
            $mailid = $row['MailID'];
            $uid = $row['UserID'];
            $sender = $row['Sender'];
            $subject = $row['MsgSubject'];
            $content = $row['MsgContent'];
            $date = $row['Date'];
            $fdate = date("d-m-Y", strtotime($date));
            echo "<div class='table-responsive-md'>
                    <table style = 'width:100%'> 
                    <tr>
                        <th style = 'text-align:center'><h3><i class='fas fa-envelope'></i> To:</h3></th>
                        <th style = 'text-align:center'><h3><i class='fas fa-envelope'></i> From:</h3></th>
                        <th style = 'text-align:center'><h3>Mail Number:</h3></th>
                        <th style = 'text-align:center'><h3>Date Received:</h3></th>
                        <th style = 'text-align:center'><button type='submit' name = 'openmsg' class='btn btn-success'>
                        <a href = 'openmsg.php?id=$mailid' style = 'text-decoration:none; color:black'>OPEN<a/></button></th>
                    </tr>
                    <tr>
                        <td style = 'text-align:center'><h4>$username</h4></th>
                        <td style = 'text-align:center'><h4>$sender</h4></th>
                        <td style = 'text-align:center'><h4>$mailid</h4></th>
                        <td style = 'text-align:center'><h4>$fdate</h4></th>
                        <td style = 'text-align:center'><button type='submit' name = 'deletemsg' class='btn btn-danger'>
                        <a href = 'deletemsg.php?id=$mailid' style = 'text-decoration:none; color:black'>DELETE<a/></button></td>
                    </tr>
                    </table>
                    </div>
                    <br>
                    <br>";
        }

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