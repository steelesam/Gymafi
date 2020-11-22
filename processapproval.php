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

    while($row = $result->fetch_assoc()){
        $username = $row['Username'];
        $firstname = $row['FirstName'];
        $lastname = $row['LastName'];
        $date = $row['DateOfApplication'];
    }

    $insertquery= "INSERT INTO Clients (ClientID, UserID, Username, FirstName, LastName, DateApproved) 
    VALUES (null, $userid, '$username', '$firstname', '$lastname', '$date')";

    $result2 = $conn->query($insertquery);

    if(!$result2){
               
        echo $conn->error;
    } 

    $deletequery = "DELETE FROM Applications WHERE UserID = '$userid'";

    $result3 = $conn->query($deletequery);

    if(!$result3){
        echo $conn->query;
    } else {
        header('location:adminapplications.php');
    }

    ?>