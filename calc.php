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
    <?php
        session_start();
        // Sends user back to login page if not correct credentials
        if(!isset($_SESSION['adminusers'])){
           header('location:login.php');
        }
    ?>

      <!-- Title -->
   <div class="container-fluid padding postloginpage">
        <div class="row aboutwelcome text-center">
            <div class="col-12 myabouttext">
                <h1 class="display-4">Calculate Macros <i class="fas fa-apple-alt fa-sm"></i></h1>
               <h3 id = "youarelogged">Figure out what foods you need based on your goals.</h3>
                <hr>
            </div>
        </div>

        <?php

        include('conn.php');

        $username = $_SESSION['adminusers'];
        $read = "SELECT * FROM Users WHERE Username = '$username'";
        $result = $conn->query($read);

        if(!$result){
            echo $conn->error;
        }

        while($row = $result->fetch_assoc()){
            $first_name = $row["FirstName"];
            $last_name = $row["LastName"];
            $age = $row["Age"];
            $height = $row["Height"];
            $weight = $row["Weight"];
            $gender = $row["Gender"];
            $id = $row['UserID'];
        }

        // Calculation formula from: 
        // https://itsourcecode.com/free-projects/php-project/how-to-create-simple-calorie-calculator-using-php/
        // Lines 29 and 35 - rest of code modified to fit my own calculator

        switch ($gender){
            case 'Female':
            $gender= 655 + (10 * $weight ) + (2 * $height) - (4.7 * $age);

            // Maintain weight
            $gender = (int)$gender;
            $protein = $gender/3;
            $protein = (int)$protein;
            $carbs = $gender/2;
            $carbs = (int)$carbs;
            $fats = $gender/5;
            $fats = (int)$fats;

            // Build muscle
            $totalbuild = $gender+250;
            $totalbuild = (int)$totalbuild; 
            $proteinbuild = $totalbuild/3;
            $proteinbuild = (int)$proteinbuild;
            $carbsbuild = $totalbuild/2;
            $carbsbuild = (int)$carbsbuild;
            $fatsbuild = $totalbuild/5;
            $fatsbuild = (int)$fatsbuild;

            // Lose weight
            $totallose = $gender-250;
            $totallose = (int)$totallose;
            $proteinlose = $totallose/3;
            $proteinlose = (int)$proteinlose;
            $carbslose = $totallose/2;
            $carbslose = (int)$carbslose;
            $fatslose = $totallose/5;
            $fatslose = (int)$fatslose;
           echo " <div class='row aboutwelcome text-center'>
           <div class='col-12 myabouttext'>
           <h3>$first_name, based on your latest profile update your current estimated daily metabolic rate is $gender.</h3>
           <h3 id = 'youarelogged'>This means that you need roughly $gender calories a day to maintain your current weight of $weight kg.</h3>
   </div>
</div>
                <div class='container-fluid padding mythree'>
                    <div class='row text-center padding'>
                        <div class='col-xs-12 col-sm-6 col-md-4 mytrain'>
                        <i class='fas fa-balance-scale'></i>
                            <h1>MAINTAIN WEIGHT</h1>
                            <h3>TOTAL CALORIES: $gender</h3>
                            <h3>PROTEIN: $protein</h3>
                            <h3>CARBOHYDRATES: $carbs</h3>
                            <h3>FATS: $fats</h3>
                        </div>
                <div class='col-xs-12 col-sm-6 col-md-4 myfood'>
                    <i class='fas fa-dumbbell'></i>
                        <h1>BUILD MUSCLE</h1>
                        <h3>TOTAL CALORIES: $totalbuild</h3>
                        <h3>PROTEIN: $proteinbuild</h3>
                        <h3>CARBOHYDRATES: $carbsbuild</h3>
                        <h3>FATS: $fatsbuild</h3>
                    </div>
                <div class='col-sm-12 col-md-4 mytrack'>
                    <i class='fas fa-calendar-alt'></i>
                        <h1>LOSE WEIGHT</h1>
                        <h3>TOTAL CALORIES: $totallose</h3>
                        <h3>PROTEIN: $proteinlose</h3>
                        <h3>CARBOHYDRATES: $carbslose</h3>
                        <h3>FATS: $fatslose</h3>
                    </div>
                    </div>
                    </div>";
            
            
            break;
            case 'Male':
            $gender=66 + (13.7 *$weight) + (6.5 * $height) - (6.8 * $age);
            
            // Maintain weight
            $gender = (int)$gender;
            $protein = $gender/3;
            $protein = (int)$protein;
            $carbs = $gender/2;
            $carbs = (int)$carbs;
            $fats = $gender/5;
            $fats = (int)$fats;

            // Build muscle
            $totalbuild = $gender+250;
            $totalbuild = (int)$totalbuild; 
            $proteinbuild = $totalbuild/3;
            $proteinbuild = (int)$proteinbuild;
            $carbsbuild = $totalbuild/2;
            $carbsbuild = (int)$carbsbuild;
            $fatsbuild = $totalbuild/5;
            $fatsbuild = (int)$fatsbuild;

            // Lose weight
            $totallose = $gender-250;
            $totallose = (int)$totallose;
            $proteinlose = $totallose/3;
            $proteinlose = (int)$proteinlose;
            $carbslose = $totallose/2;
            $carbslose = (int)$carbslose;
            $fatslose = $totallose/5;
            $fatslose = (int)$fatslose;

            echo " <div class='row aboutwelcome text-center'>
                        <div class='col-12 myabouttext'>
                        <h3>$first_name, based on your latest profile update your current estimated daily metabolic rate is $gender.</h3>
                        <h3 id = 'youarelogged'>This means that you need roughly $gender calories a day to maintain your current weight of $weight kg.</h3>
                </div>
            </div>
            <div class='container-fluid padding mythree'>
            <div class='row text-center padding'>
            <div class='col-xs-12 col-sm-6 col-md-4 mytrain'>
            <i class='fas fa-balance-scale'></i>
                <h1>MAINTAIN WEIGHT</h1>
                <h3>TOTAL CALORIES: $gender</h3>
                <h3>PROTEIN: $protein</h3>
                <h3>CARBOHYDRATES: $carbs</h3>
                <h3>HEALTHY FATS: $fats</h3>
            </div>
            <div class='col-xs-12 col-sm-6 col-md-4 myfood'>
            <i class='fas fa-dumbbell'></i>
            <h1>BUILD MUSCLE</h1>
            <h3>TOTAL CALORIES: $totalbuild</h3>
                <h3>PROTEIN: $proteinbuild</h3>
                <h3>CARBOHYDRATES: $carbsbuild</h3>
                <h3>HEALTHY FATS: $fatsbuild</h3>
        </div>
            <div class='col-sm-12 col-md-4 mytrack'>
            <i class='fas fa-calendar-alt'></i>
            <h1>LOSE WEIGHT</h1>
            <h3>TOTAL CALORIES: $totallose</h3>
                <h3>PROTEIN: $proteinlose</h3>
                <h3>CARBOHYDRATES: $carbslose</h3>
                <h3>HEALTHY FATS: $fatslose</h3>
        </div>
            </div>
            </div>";
            
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