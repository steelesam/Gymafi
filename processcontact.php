<?php

session_start();
        if(!isset($_SESSION['adminusers'])){
           header('location:login.php');
        }

if(isset($_POST['sendemail'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "ssteele16@qub.ac.uk";
    $headers = "From: ".$mailfrom;
    $text = "You have received an email through GYMAFI from ".$name.".\n\n".$message;

    mail($mailTo,$subject,$text,$headers);
    header("location:welcome.php?mailsent");


}

?>