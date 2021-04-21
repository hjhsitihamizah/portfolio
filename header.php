<?php 
session_start();
require "db_connection.php";
$sessionID =  mysqli_real_escape_string($con, $_SESSION['sessionID']);
// echo $sessionID;

?>