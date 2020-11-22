<?php

   session_start();
   include('conn.php');

   if(!isset($_SESSION['administrator'])){
       header('location:login.php');
   }
   
    $userid = $_GET['useid'];

    $selectquery = "SELECT * FROM Applications WHERE UserID = '$userid'";
    $result = $conn->query($selectquery);
    if(!$result){
        echo $conn->error;
    }

    $deletequery = "DELETE FROM Applications WHERE UserID = '$userid'";

    $result2 = $conn->query($deletequery);

    if(!$result2){
        echo $conn->query;
    } else {
        header('location:adminapplications.php');
    }

    ?>