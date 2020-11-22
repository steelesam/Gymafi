<?php

    session_start();

    unset($_SESSION['adminusers']);

    header('location:index.php');

?>