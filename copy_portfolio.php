<?php 
session_start();
require "db_connection.php";

$email = $_SESSION["email"];

$sql_e = "SELECT * FROM user_information WHERE email='$email'";
$result = $con->query($sql_e);
if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['username'];
        $work = $row['work'];
        $address = $row['h_address'];
        // $email = $row['email'];
        $work1_from = $row['date_from'];
        $work1_to = $row['date_to'];
        $work2_date = $row['work2_date'];
        $experience_1 = $row['exp1'];
        $experience_2 = $row['exp2'];
        $position_1 = $row['position1'];
        $position_2 = $row['position2'];
    }
}
// session_destroy();
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
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo "$work2_date";?></h6>
                        <p style="text-align: justify"><?php echo "$experience_2";?></p>
                        <br>
                    </div>
                </div>

                <div class="w3-container w3-card w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-plus-square-o fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Database</h2>
                    <div class="w3-container">
                        
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