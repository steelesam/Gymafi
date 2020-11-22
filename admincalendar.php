<?php
 session_start();
 include('conn.php');

 $diary = "SELECT * FROM Diary";

 $result = $conn->query($diary);

 if(!$result){
   echo $conn->error;
 }
?>
<?php
        // Sends user back to login page if not correct credentials
        if(!isset($_SESSION['administrator'])){
           header('location:login.php');
        }
    ?>

<!DOCTYPE html>
<html>

  <!-- Imports -->
  <head>
    <title>Gymafi</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="calendar/theme3.css"/>  
    <link rel="stylesheet" href="calendar/demo.css"/>
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
  </head>
  <style>
    body {
    background-image: url(images/welcomepageback.jpg) !important;
    background-repeat: no-repeat !important;
    background-position: center !important;
    background-size: cover !important;
  }
</style>
  <body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-transparent">
        <div class="container-fluid">
            <a href="#"><i class="fas fa-dumbbell fa-lg"></i></a>
            <a class="nav-link grow" href="admindash.php">DASHBOARD</a>
            <a href="#"><i class="fas fa-calendar-alt fa-lg"></i></a>
            <a class="nav-link grow" href="adminsetcal.php">MAKE APPOINTMENT</a>
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
<br><br><br><br>

    <div id="caleandar">
    </div>
    <script type="text/javascript" src="calendarJS/caleandar.js"></script>
    <script>

  // Calendar output/JS
    <?php
      echo "var eventsarray = [";
        
        while($row = $result->fetch_assoc()){
            $title = $row['Title'];
            $theday = $row['Date'];
            $id = $row['EntryID'];
            $userid = $row['UserID'];
            $username = $row['Username'];
            
            $d = new DateTime( $theday );
            $d -> modify('-1 month');
            $newd = $d -> format('Y, m, d');
            $newday = date('Y, m-1, d', strtotime($theday));
            echo " {'Date': new Date($newday), 'Title': '$username','Link': 'admindiarydetails.php?rowid=$id'}, ";

        }
     echo " ]; ";
     
     ?>
      var settings = { NavShow: true,  EventTargetWholeDay: false};
      var cal_element = document.getElementById('caleandar');
      caleandar(cal_element, eventsarray, settings);
    </script>

  </body>
</html>