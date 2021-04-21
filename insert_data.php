<?php
include 'header.php';

$name = $con ->real_escape_string(secure($_POST['name']));
$work = $con ->real_escape_string(secure($_POST['work']));
$address = $con ->real_escape_string(secure($_POST['address']));
$email = $con ->real_escape_string(secure($_POST['email']));
$work1_from = $con ->real_escape_string(secure($_POST['work1_date_from']));
$work1_to = $con ->real_escape_string(secure($_POST['work1_date_to']));
$work2_date_from = $con ->real_escape_string(secure($_POST['work2_date_from']));
$work2_date_to = $con ->real_escape_string(secure($_POST['work2_date_to']));
$experience_1 = $con ->real_escape_string(secure($_POST['experience_1']));
$experience_2 = $con ->real_escape_string(secure($_POST['experience_2']));
$position_1 = $con ->real_escape_string(secure($_POST['position_1']));
$position_2 = $con ->real_escape_string(secure($_POST['position_2']));

$date1 = strtotime($work1_from);
// echo "<br>".$work1_from."<br>";

echo "<br>".$work1_to."<br>";
$date3 = strtotime($work2_date_from);
$date4 = strtotime($work2_date_to);
$work1_from = date('Y/m/d',$date1);
$work2_date_from = date('Y/m/d',$date3);
$work2_date_to = date('Y/m/d',$date4);
echo "<br>";
echo $name;
echo "<br>";
echo $work;
echo "<br>";
echo $email;
echo "<br>";
echo $work1_from;
echo "<br>";
echo $work1_to ;
echo "<br>";
echo $work2_date_from ;
echo "<br>";
echo $work2_date_to ;
echo "<br>";
echo $experience_1 ;
echo "<br>";
echo $experience_2 ;
echo "<br>";
echo $position_1;
echo "<br>";
echo $position_2; 

function secure($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql2 = "INSERT INTO portfolio (username, work, work1_date_from, work1_date_to, work2_date_from, work2_date_to, exp1, exp2, position1, position2) 
    VALUES ('$name','$work','$work1_from','$work1_to','$work2_date_from','$work2_date_to','$experience_1','$experience_2','$position_1','$position_2')";


if($con->query($sql2))
{
    $msg =  "new record created successfully";
    header("Location: copy_portfolio.php");
    exit;

}
else
{
    $msg = "error: " . $sql2 . "<br>" . $con->error . "<br";
}
$con->close();



?>