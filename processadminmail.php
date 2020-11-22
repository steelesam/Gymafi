<?php

   session_start();
   include('conn.php');

   if(!isset($_SESSION['administrator'])){
       header('location:login.php');
   }

   $sender = $conn->real_escape_string($_POST['name']);
   $subject = $conn->real_escape_string($_POST['subject']);
   $recipient = $conn->real_escape_string($_POST['recipient']);
   $msg = $conn->real_escape_string($_POST['message']);
   $date = $conn->real_escape_string($_POST['date']);

   $query = "INSERT INTO Mail (MailID, UserID, MsgSubject, MsgContent, Date, Sender) 
   VALUES (null, $recipient, '$subject', '$msg', '$date', '$sender')";

   $result = $conn->query($query);

   if(!$result){
       echo $conn->error;
   } else {
        header('location:admindash.php');
   }

?>   