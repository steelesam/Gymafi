<?php

session_start();
include('conn.php');

$user = $_SESSION['adminusers'];
$fname = $_POST['changefirstname'];
$lname = $_POST['changelastname'];
$age = $_POST['changeage'];
$height = $_POST['changeheight'];
$weight = $_POST['changeweight'];

$update = "UPDATE Users SET FirstName = '$fname', LastName = '$lname', Age = '$age', Height = '$height', Weight = '$weight' WHERE Username = '$user'";

$result = $conn->query($update);

if(!$result){
    echo $conn->error;
} else {
    header('location:profile.php');
}
?>