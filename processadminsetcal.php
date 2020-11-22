<?php

   session_start();
   include('conn.php');

   if(!isset($_SESSION['administrator'])){
       header('location:login.php');
   }

   $userid = $conn->real_escape_string($_POST['id']);
   $title = $conn->real_escape_string($_POST['title']);
   $date = $conn->real_escape_string($_POST['date']);
   $username = $conn->real_escape_string($_POST['name']);
   $time = $conn->real_escape_string($_POST['time']);
   

   $query = "INSERT INTO Diary (EntryID, UserID, Username, Title, Date, Time) 
   VALUES (null, $userid, '$username', '$title', '$date', '$time')";

   $result = $conn->query($query);

   if(!$result){
       echo $conn->error;
   } else {
        header('location:admincalendar.php');
   }

?>   