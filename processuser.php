<?php
    session_start();
    include('conn.php');

    $username = $conn->real_escape_string($_POST["username"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $pwd = $conn->real_escape_string($_POST["pwd"]);
    $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
    $firstname = $conn->real_escape_string($_POST["firstname"]);
    $lastname = $conn->real_escape_string($_POST["lastname"]);
    $age = $conn->real_escape_string($_POST["age"]);
    $height = $conn->real_escape_string($_POST["height"]);
    $weight = $conn->real_escape_string($_POST["weight"]);
    $gender = $conn->real_escape_string($_POST["gender"]);

    $insertquery= "INSERT INTO Users (UserID, Username, Email, Password, FirstName, LastName, Age, Height, Weight, Gender) 
    VALUES (null, '$username','$email','$hashedpwd','$firstname','$lastname', $age, $height, $weight,'$gender')";

    $result = $conn->query($insertquery);

    if(!$result){
               
        echo $conn->error;

    } else {
        
        header('location:login.php');

    }
    ?>


