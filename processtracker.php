<?php
    session_start();
    include('conn.php');

    $userid = $_SESSION['userid'];
    $bench = $conn->real_escape_string($_POST["bench"]);
    $squat = $conn->real_escape_string($_POST["squat"]);
    $deadlift = $conn->real_escape_string($_POST["deadlift"]);
    $ohp = $conn->real_escape_string($_POST["ohp"]);
    $timeran= $conn->real_escape_string($_POST["timeran"]);
    $date= $conn->real_escape_string($_POST["date"]);
    //$date = date('d-m-Y", H:i:S');

    $insertquery= "INSERT INTO Progress (ProgressID, UserID, BenchPress, Squat, Deadlift, OverheadPress, TimeRan, DateDone) 
    VALUES (null, $userid, $bench, $squat, $deadlift, $ohp, $timeran, '$date')";

    $result = $conn->query($insertquery);

    if(!$result){
               
        echo $conn->error;

    } else {
                header('location:tracker.php');
    }
    ?>