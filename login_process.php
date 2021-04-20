<?php 
require "db_connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email_check']) && $_POST['email_check'] == 1) {

    // validate email

    $email = mysqli_real_escape_string($con, $_POST['email']);

    $sqlcheck = "SELECT * FROM user_information WHERE email = '$email' ";

    $checkResult = $con->query($sqlcheck);

    // check if email already taken
    if($checkResult->num_rows > 0) {
        header("Location: index.php");
    }
}



?>