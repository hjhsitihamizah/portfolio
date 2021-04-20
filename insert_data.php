<?php
session_start();
require "db_connection.php";

$name = $con ->real_escape_string(secure($_POST['name']));
$work = $con ->real_escape_string(secure($_POST['work']));
$address = $con ->real_escape_string(secure($_POST['address']));
$email = $con ->real_escape_string(secure($_POST['email']));
$work1_from = $con ->real_escape_string(secure($_POST['work1_from']));
$work1_to = $con ->real_escape_string(secure($_POST['work1_to']));
$work2_date = $con ->real_escape_string(secure($_POST['work2_date']));
$experience_1 = $con ->real_escape_string(secure($_POST['experience_1']));
$experience_2 = $con ->real_escape_string(secure($_POST['experience_2']));
$position_1 = $con ->real_escape_string(secure($_POST['position_1']));
$position_2 = $con ->real_escape_string(secure($_POST['position_2']));

echo $email;
$_SESSION["email"] = $email;

function secure($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql_e = "SELECT * FROM user_information WHERE email='$email'";
$result = $con->query($sql_e);
if(mysqli_num_rows($result)>0){
    $msg = "Email has already registered, try to use another email instead ";
}
else{
    $sql2 = "INSERT INTO user_information (username, work, h_address, email, date_from, date_to, work2_date, exp1, exp2, position1, position2) 
        VALUES ('$name','$work','$address','$email','$work1_from','$work1_to','$work2_date','$experience_1','$experience_2','$position_1','$position_2')";
    

        if($con->query($sql2))
        {
            $msg =  "new record created successfully";
            // header("Location: copy_portfolio.php");
            exit;
        
        }
        else
        {
            $msg = "error: " . $sql2 . "<br>" . $con->error . "<br";
        }
        $con->close();
}


?>