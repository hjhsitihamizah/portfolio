<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = secure($_POST['name']);
    $work = secure($_POST['work']);
    $address = secure($_POST['address']);
    $email = secure($_POST['email']);
    $work1_from = secure($_POST['work1_from']);
    $work1_to = secure($_POST['work1_to']);
    $work2_date = secure($_POST['work2_date']);
    $experience_1 = secure($_POST['experience_1']);
    $experience_2 = secure($_POST['experience_2']);
    $position_1 = secure($_POST['position_1']);
    $position_2 = secure($_POST['position_2']);
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
    <title>Portfolio</title>
    
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

        .a-no-underline {
            text-decoration: none;
        }
       #userForm{
        margin-right: 0em;
       }
       
    </style>
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {
                // alert("The submit button is clicked");
                $("#userForm").serialize();
            })
        })
    </script>
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
            <form id="userForm" action="insert_data.php" method="POST" >

                <!-- left column -->
                <div class="w3-third">
                    <div class="w3-white w3-text-grey w3-card-4">
                        <div class="w3-display-container">
                            <img src="res/polar.jpg" alt="Avatar" style="width: 100%">
                            <div class="w3-display-bottomleft w3-container w3-text-black">
                                <h2><input type="text" class="w3-twothird" name="name" placeholder="Name"></h2>
                            </div>
                        </div>
                        <div class="w3-container">
                            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><input type="text" name="work" placeholder="Work Place"></p>
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><input type="text" name="address" placeholder="Address"></p>
                            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><input type="email" name="email" placeholder="Email"></p>

                            <br>
                        </div>
                    </div><br>

                    <!-- end left colum -->
                </div>

                <!-- right column -->
                <div class="w3-twothird">
                    <div class="w3-container w3-card w3-white w3-margin-bottom">
                        <h2 class="w3-text-black w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
                        <div class="w3-container">
                            <h6 class="w3-opacity"><input type="text" name="position_1" placeholder="Latest Work Position"></h6>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><input type="text" name="work1_date_from" placeholder="dd/mm/yyyy"> - <input type="text" name="work1_date_to" placeholder="To"></h6>
                            <p style="text-align: justify"><textarea name="experience_1" id="" cols="55" rows="5" placeholder="Work Description"></textarea></p>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h6 class="w3-opacity"><input type="text" name="position_2" placeholder="Second Latest Work Position"></h6>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><input type="text" name="work2_date_from" placeholder="dd/mm/yyyy"> - <input type="text" name="work2_date_to" placeholder="dd/mm/yyyy"></h6>
                            <p style="text-align: justify"><textarea name="experience_2" id="" cols="55" rows="5" placeholder="Work Description"></textarea></p>
                            <br>
                        </div>
                    </div>

                    <div class="w3-container w3-card w3-white">
                        <h2 class="w3-text-black w3-padding-16"><i class="fa fa-plus-square-o fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Create Your Own Portfolio</h2>
                        <div class="w3-container">
                            <h6 class="w3-text-teal"><i class="fa fa-link fa-fw w3-margin-right"></i><input name="submit" id="submit" class="w3-text-teal" type="submit" value="Create Portfolio"></h6>
                            <br>
                        </div>
                    </div>
                    <!-- end right column -->
                </div>

                <footer class="w3-container w3-teal w3-center w3-margin-top">
                    <!-- <p>Powered by Mich</a>
                </p> -->
                </footer>
            </form>

        </div>


    </div>


</body>

</html>