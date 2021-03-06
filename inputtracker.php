<!doctype html>
<html lang='en'>
<head>

    <!-- Imports -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100&display=swap' rel='stylesheet'>
    <link rel='shortcut icon' href='code_icon copy.png' type='image/x-icon' />
    <link rel='stylesheet' href='gui.css' type='text/css'>
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'
    integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src='https://kit.fontawesome.com/bd73f651fd.js' crossorigin='anonymous'></script>
    <link rel='icon' href='dumbbelllogo.png'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
        integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
    <title>Gymafi</title>
</head>
<body>

<!-- Navigation -->
<nav class='navbar navbar-expand-md navbar-dark bg-transparent'>
        <div class='container-fluid'>
            <a href='#'><i class='fas fa-dumbbell fa-lg'></i></a>
            <a class='nav-link grow' href='welcome.php'>DASHBOARD</a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarResponsive'>
                <ul class='navbar-nav ml-auto'>
                    <li class='nav-item active'>
                        <a class='nav-link grow' href='profile.php'>PROFILE</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link grow' href='calc.php'>MACROS</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link grow' href='tracker.php'>TRACKER</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link grow' href='usercalendar.php'>CALENDAR</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link grow' href='sendemail.php'>CONTACT</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link grow' href='logout.php'>LOGOUT <i class='fas fa-user'></i></a>
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

       <!-- Title -->
   <div class='container-fluid padding postloginpage'>
        <div class='row aboutwelcome text-center'>
            <div class='col-12 myabouttext'>
                <h1 class='display-4'>Update Tracker <i class='fas fa-chart-line fa-lg'></i></h1>
               <h3 id = 'youarelogged'>Update your latest fitness achievements.</h3>
                <hr>
                <div class='col-12'>
                </div>
            </div>
        </div>

        <?php
            include('conn.php');
            $user = $_SESSION['adminusers'];
            $userid = $_SESSION['userid'];
            $read = "SELECT * FROM Progress WHERE UserID = '$userid'";
            $result = $conn->query($read);

            if(!$result){
                echo $conn->error;
            }

            while($row = $result->fetch_assoc()){
                $bench = $row['BenchPress'];
                $squat = $row['Squat'];
                $deadlift = $row['Deadlift'];
                $ohp = $row['OverheadPress'];
                $run = $row['TimeRan'];
                $date = $row['DateDone'];

            }
                echo "
    <div class='row aboutwelcome text-center'>
            <div class='col-12 abouttext'>
                <div class = 'col-12 mylogin'>
                    <div class='row'>
                        <div class='col-4'></div>
                        <div class='col-md-4'>
                        <form action = 'processtracker.php' method = 'post'>
                            <div class='form-group trackstats'>
                            <label for='benchform'><h5>Bench Press</h5></label>
                            <input value='' class='form-control' id='benchid'  name = 'bench' placeholder = 'Bench Press (kg)''>
                            </div>
                            <div class='form-group trackstats'>
                            <label for='squatform'><h5>Squat</h5></label>
                            <input value='' class='form-control' id='squatid'  name = 'squat' placeholder = 'Squat (kg)''>
                            </div>
                            <div class='form-group trackstats'>
                            <label for='deafliftform'><h5>Deadlift</h5></label>
                            <input value='' class='form-control' id='deafliftid' name='deadlift' placeholder = 'Deadlift (kg)''>
                            </div>
                            <div class='form-group trackstats'>
                            <label for='ohpform'><h5>Overhead Press</h5></label>
                            <input value='' class='form-control' id='ohpid' name='ohp' placeholder = 'Overhead Press (kg)''>
                            </div>
                            <div class='form-group trackstats'>
                            <label for='timeranform'><h5>Time Ran</h5></label>
                            <input value='' class='form-control' id='timeid' name='timeran'placeholder = 'Time Ran (minutes)''>
                            </div>
                            <div class='form-group trackstats'>
                            <label for='dateform'><h5>Date Achieved</h5></label>
                            <input type='date' class='form-control' id='datepicker' name='date' placeholder = 'yyyy/mm/dd''>
                            </div>
                            <div id='registerbutton'>
                            <button type='submit' name = 'updatetracker' class='btn btn-lg btn-warning'>ENTER</button>
                            </div>
                            <div class='form-check'>
                            </div>
                            </form>
                         </div>
                     <div class='col-4'></div>
                </div>
            </div>
        </div>
    </div>

    ";
?>
</body>

<!-- Imports -->
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'
    integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN'
    crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'
    integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'
    crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'
    integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl'
    crossorigin='anonymous'></script>
</html>