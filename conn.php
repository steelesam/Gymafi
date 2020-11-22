<?php
//declare password
$pw="P3jlrRj7y1g5wbT4";

//declare MySQL username
$user = "ssteele16";

//declare webserver
$webserver = "ssteele16.lampt.eeecs.qub.ac.uk";

//declare DB  
$db = "ssteele16";

//mysqli api library in PHP to connect to the DB
$conn = new mysqli($webserver, $user, $pw, $db);

if($conn->connect_error){
    echo "Connection failed: ".$conn->connect_error;
}