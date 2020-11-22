<?php

   session_start();
   include('conn.php');

   if(!isset($_SESSION['adminusers'])){
       header('location:login.php');
   }
   
    $mailid = $_GET['id'];

    $deletequery = "DELETE FROM Mail WHERE MailID = '$mailid'";

    $result2 = $conn->query($deletequery);

    if(!$result2){
        echo $conn->error;
    } else {
        header('location:inbox.php');
    }

    ?>