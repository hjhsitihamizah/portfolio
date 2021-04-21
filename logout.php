<?php 
session_start();
require 'db_connection.php';
$sessionID = mysqli_real_escape_string($con,$_SESSION['sessionID']);
$sql2 =  "UPDATE `user_information` SET `sessionID` = '0' WHERE `sessionID` = '$sessionID'";
session_destroy();
$con->query($sql2);
header("Location: login.php");
?>