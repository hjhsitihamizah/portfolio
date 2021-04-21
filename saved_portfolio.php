<?php
include "header.php";

$id = secure($_POST['selectUser']);
function secure($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql_e = "SELECT * FROM user_information WHERE sessionID ='$sessionID'";
$result = $con->query($sql_e);
if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['username'];
        $address = $row['h_address'];
        $email = $row['email'];
        $registerDate = $row['date_register'];
    }
}
    $date5 = strtotime($registerDate);
    $registerDate = date("d-m-Y", $date5);


$sql2 = "SELECT * FROM portfolio WHERE username='$name'";
$result2 = $con->query($sql2);
if($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $work = $row['work'];
        $work1_from = $row['work1_date_from'];
        $work1_to = $row['work1_date_to'];
        $work2_date_from = $row['work2_date_from'];
        $work2_date_to = $row['work2_date_to'];
        $experience_1 = $row['exp1'];
        $experience_2 = $row['exp2'];
        $position_1 = $row['position1'];
        $position_2 = $row['position2'];
    }

    $date1 = strtotime($work1_from);
    $work1_from = date("d-m-Y", $date1);
    $date3 = strtotime($work2_date_from);
    $work2_date_from = date("d-m-Y", $date3);
    $date4 = strtotime($work2_date_to);
    $work2_date_to = date("d-m-Y", $date4);
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel='icon' href='res/flower.jpg' type='image/x-icon'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,00&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Source Sans Pro', sans-serif;
        }

        /* Style the header */
        .header {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: left;
        }

        .a-no-underline {
            text-decoration: none;
        }
        .logout{
            top: 5%;
            right: 5%;
            color: #008080;
            position: absolute;
        }
    </style>
</head>

<body class="w3-light-grey">
    <!-- page container -->
    <div class="w3-content w3-margin-top" style="max-width: 1400px;">
        <!-- the grid -->
        <div class="w3-row-padding">
            <div class="header">
                <!-- <h1 class="w3-text-grey w3-padding-16">Home</h1> -->
                <a href="index.php" class="a-no-underline">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-home fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Home</h2>
                </a>
                <a href="logout.php" class="a-no-underline">
                    <h6 class="logout">Logout</h6>
                </a>
                <!-- <p>Resize the browser window to see the responsive effect.</p> -->
            </div>
            <!-- left column -->
            <div class="w3-third">
                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src="res/polar.jpg" alt="polar" style="width: 100%;">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                            <h2><?php echo "$name"; ?></h2>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "$work"; ?></p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "$address"; ?></p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo "$email"; ?></p>
                        <!-- <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>7001000</p> -->
                        <hr>
                    </div>
                </div><br>
            <!-- end left column -->
            </div>

            <!-- right column -->
            <div class="w3-twothird">
                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b><?php echo "$position_1";?></b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo "$work1_from -";?> <span class="w3-tag w3-teal w3-round"><?php echo "$work1_to";?></span></h6>
                        <p style="text-align: justify"><?php echo "$experience_1";?></p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b><?php echo "$position_2";?></b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo "$work2_date_from - $work2_date_to";?></h6>
                        <p style="text-align: justify"><?php echo "$experience_2";?></p>
                        <br>
                    </div>
                </div>

                <div class="w3-container w3-card w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Register</h2>
                    
                    <div class="w3-container">
                        <h5 class="opacity"><b>Register since</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $registerDate;?></h6>
                        <br>
                    </div>
                </div>

            <!-- end right column   -->
            </div>

            <footer class="w3-container w3-teal w3-center w3-margin-top">
                <p>Powered by <?php echo "$name";?></a>
                </p>
            </footer>
        </div>
    </div>


</body>

</html>