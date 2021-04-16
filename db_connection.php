<?php 

    $localhost = "127.0.0.1"; // database server, check phpadmin for the port number
    $username = "root"; // db user name
    $password = ""; // db password
    $database = "port_db"; // db name
    $table = "user_information"; // table to access to
   
    // setting up db connection
    $con = new mysqli($localhost, $username, $password, $database);

    if(mysqli_connect_errno())
    {
        //if there is any error with the connection, stop the script and display error
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    
    
?>
