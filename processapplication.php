<?php

   session_start();
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

    $userid = $_SESSION['userid'];
    $username = $conn->real_escape_string($_POST["usernameapp"]);
    $firstname = $conn->real_escape_string($_POST["firstnameapp"]);
    $lastname = $conn->real_escape_string($_POST["lastnameapp"]);
    $date = $conn->real_escape_string($_POST["dateapp"]);

    $insertquery= "INSERT INTO Applications (ApplicationID, UserID, Username, FirstName, LastName, DateOfApplication) 
    VALUES (null, $userid, '$username', '$firstname', '$lastname', '$date')";

    $result = $conn->query($insertquery);

    if(!$result){
               
        echo $conn->error;

    } else {
                header('location:welcome.php');
    }
    ?>