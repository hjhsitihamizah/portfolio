<?php
session_start();
require 'db_connection.php';
$sessionID = $_SESSION['sessionID'];

if($_SESSION == "" || $_SESSION == NULL){
    header("Location: login.php");
}
$emailRow = array();
$sql_e = "SELECT * FROM portfolio";
$result = $con->query($sql_e);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $emailRow[] = $row;
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $selectedEmail = secure($_POST['selectUser']);
    
}
function secure($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel='icon' href='res/flower.jpg' type='image/x-icon'>
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto";
        }

        /* Style the header */
        .header {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: left;
        }

        .btn {
            border-radius: 5px;
            text-align: center;
            background-color: teal;
            color: lightgrey;
            border: none;
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
    <title>Portfolio</title>
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
                        <img src="res/polar.jpg" alt="Avatar" style="width: 100%">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                            <h2>Mich</h2>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Back-End Developer</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>@workplace</p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>portfolio@test.co</p>
                        <!-- <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>7001000</p> -->
                        <hr>

                        <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
                        <p>PHP</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width: 90%">90%</div>
                        </div>
                        <p>HTML</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                                <div class="w3-center w3-text-white">80%</div>
                            </div>
                        </div>
                        <p>MySQL</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">80%</div>
                        </div>
                        <p>CSS</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
                        </div>
                        <p>JavaScript</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:60%">60%</div>
                        </div>
                        <br>

                        <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
                        <p>Malay</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                        </div>
                        <p>English</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:70%"></div>
                        </div>
                        <br>
                    </div>
                </div><br>

                <!-- end left colum -->
            </div>

            <!-- right column -->
            <div class="w3-twothird">
                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Back End Developer</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Feb 2021 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
                        <p style="text-align: justify">She provides the logic for server-side web application and implement the security and data protection. Design and implement the data storage solutions to the appropriate systems or web application.</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>Bookshop Assistant</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Oct 2020 - Jan 2021</h6>
                        <p style="text-align: justify">She provided sales service to the customer by suggesting the bestselling books cater to the customer's needs. She also handling the shop POS system and managing the stock inventory.</p>
                        <br>
                    </div>
                </div>

                <div class="w3-container w3-card w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
                    <div class="w3-container">
                        <h5 class="opacity"><b>W3Schools.com</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
                        <p>Web development! where all ages learns</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="opacity"><b>Universiti Brunei Darussalam</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2016 - 2020</h6>
                        <p>Bachelor Degree</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="opacity"><b>Universiti Teknologi Brunei</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
                        <p>Higher National Diploma</p><br>
                    </div>
                </div>

                <div class="w3-container w3-card w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-plus-square-o fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Create Your Own Portfolio</h2>
                    <div class="w3-container">
                        <!-- <h5 class="opacity"><b>kkkk</b></h5> -->
                        <a href="media_1.php">
                            <h6 class="w3-text-teal"><i class="fa fa-link fa-fw w3-margin-right"></i>Create portfolio</h6>
                        </a>
                        <form action="saved_portfolio.php" method="post">
                            <select name="selectUser" onclick="selectFnc(this.value)" id="selectUser">
                                <?php
                                echo "<option value='' selected>Select the page</option>";
                                $selected = json_encode($emailRow['email']);
                                
                                foreach ($emailRow as $tre) {
                                    $user = $tre['username'];                                    
                                    $id = $tre["id"];
                                    
                                    echo "<option value='$id'>$user</option>";
                                    // echo "<option value='$email'>$email</option>";
                                }

                                ?>

                            </select>
                            <button class="btn" type="submit">Submit</button>
                            
                        </form>
                        <div id="txt" class="w3-text-teal" >Text Appear Here</div>
                        <br>
                    </div>
                </div>
                <!-- End right column -->
            </div>

            <footer class="w3-container w3-teal w3-center w3-margin-top">
                <p>Find me on social media.</p>
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
                <p>This Page is An Example</p>
                </p>
            </footer>
        </div>
    </div>
    <script>
        //select drone model
        function selectFnc(str) {
            
            if (str == "") {
                document.getElementById("txt").innerHTML = "";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txt").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "email_select.php?q=" + str, true);
            xmlhttp.send();
        }

        
    </script>
</body>

</html>