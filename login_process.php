<?php 
require "db_connection.php";
//generate random strings for sessionID
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 16)
{
    $input_length = strlen($input);
    $random_string = '';
    for ($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}
$sessionID = mysqli_real_escape_string($con,generate_string($permitted_chars, 50));
$_SESSION['sessionID'] = $sessionID;

$email =  mysqli_real_escape_string($con, $_POST['email']);


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email_check']) && $_POST['email_check'] == 1) {

    // validate email

    $email = mysqli_real_escape_string($con, $_POST['email']);

    $sqlcheck = "SELECT * FROM user_information WHERE email = '$email' ";

    $checkResult = $con->query($sqlcheck);

    // echo "Email entered is not exist";
    // // check if email already taken
    if($checkResult->num_rows > 0) {
        echo "";
    }else{
        echo "Email entered is not exist";
    }
}else{
    $password =  mysqli_real_escape_string($con, $_POST['password']);
    //$sql is the MySQL query. have to use single quote for lgn_email as it uses variable from this php file.
    $sql = "SELECT * FROM user_information WHERE email='$email'";
    //the result contained the db connection and query(sql) is for running the string query
    $result = $con->query($sql);
    if($result->num_rows > 0){
        while($row  = $result->fetch_assoc()){
            $hash = $row['pass'];
            if(password_verify($password,$hash)){
                $sql2 =  "UPDATE `user_information` SET `sessionID` = '$sessionID' WHERE `user_information`.`email` = '$email'";
                $con->query($sql2);
                header("Location: index.php");
                exit;
            }else{
                echo "incorrect username or password";
            }
        }
    }else{
        trigger_error($con->error);
    }




  
}




?>