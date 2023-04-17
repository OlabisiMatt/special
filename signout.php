<?php
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: ../index.php");
exit;
?>


<!-- ?php

include 'component/connect.php';

setcookie('user_id', '', time() - 1, '/');

header('location:index.php');

exit;
?> -->