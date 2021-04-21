<?php 
require 'db_connection.php';
$q = $_GET['q'];

$sql = "SELECT * FROM portfolio WHERE id ='$q'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        // OUTPUT FETCH FROM user_information table
        while ($row = $result->fetch_assoc()) {
            $emailSelect = $row['email'];
            echo $emailSelect;
        }
    }


?>