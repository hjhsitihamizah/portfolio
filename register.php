<?php 
require "db_connection.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email_check']) && $_POST['email_check'] == 1) {

    // validate email

    $email = mysqli_real_escape_string($con, $_POST['email']);

    $sqlcheck = "SELECT * FROM user_information WHERE email = '$email' ";

    $checkResult = $con->query($sqlcheck);

    // check if email already taken
    if($checkResult->num_rows > 0) {
        echo "Sorry! Email has already registered. Please try another.";
    }
}else{

$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];

//set default timezone
date_default_timezone_set('Asia/Brunei');
$current_date = date('Y-m-d H:i:s');
echo $current_date;

// //check email
// $sql = "SELECT * FROM user_information WHERE email = '$email'";
// $result = $con->query($sql);
// //if email exist
// if(mysqli_num_rows($result)>0) {
//     echo "Email has been taken, use alternative email";
    
// //if email not exist
// }else{
    echo "email is not exist, insert data to db can be proceed";
    $password = password_hash($password,PASSWORD_DEFAULT);
    $insert = "INSERT INTO user_information (username, h_address, email, pass, date_register) 
    VALUES ('$username', '$address', '$email','$password', '$current_date')";

    if($con->query($insert))
    {
        echo "new record created successfully";
        header("Location: index.php");
        exit;
    }
    else
    { 
        echo "error: " . $insert . "<br>" . $con->error ; 
    }

    $con->close();
}
// }
?>