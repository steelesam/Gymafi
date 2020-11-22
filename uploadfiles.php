<?php

include('conn.php');

$filedata = $_FILES['myfileupload']['tmp_name'];
$filename = $_FILES['myfileupload']['name'];
$filetype = $_FILES['myfileupload']['type'];
$recipient = $conn->real_escape_string($_POST['recipient']);


$moved = move_uploaded_file($filedata, "uploadedfiles/$filename");

if($moved){

    $insertimg = "INSERT INTO Files (UserID, path, typefile) VALUES ($recipient, '$filename', '$filetype')";
    $result = $conn->query($insertimg);
    header('location:admindash.php');

    if(!$result){
        echo $conn->error;
    }

} else {

    echo "Problem with uploading file: $filename";

}


?>