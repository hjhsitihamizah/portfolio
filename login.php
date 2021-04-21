<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css file -->
    <link rel="stylesheet" href="css/signup.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- js file -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/signup.js"></script>

    <title>Login</title>
    <style>
    .text-danger{
        color: red;
        line-height: 3.0;
        text-align: center;
        text-decoration: none;
        width: 100%;
        max-width: 340px;
        padding-left: 25%;
        
    }
    .padding{
        padding-top: 0;
        padding-right: 5%;
        margin-right: 0;
        max-width: 240px;
        width: 240px;
        position: fixed;
        right: 0;
        transform: translate3d(0, 500px, 0);
        -webkit-animation: arrive 500ms ease-in-out 0.9s forwards;
        animation: arrive 500ms ease-in-out 0.9s forwards;
    }
    </style>
</head>

<body>

    <div class="user">
        <div class="form__group padding">
            <input id="signUp" name="signUp" type="submit" value="Sign Up" class="btn" style="border-radius: 15px;" />
        </div>
        
        <header class="user__header">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
            <h1 class="user__title">Registration form</h1>            
        </header>
        
        <form id="userForm" class="form" action="login_process.php" method="post">

            <div class="form__group">
                <input id="email" name="email" type="email" placeholder="Email" class="form__input" />
            </div>
           
            <div class="form__group">
                <input id="password" name="password" type="password" placeholder="Password" class="form__input" />
            </div>

            <input class="btn" type="submit" id="loginBtn" value="Register"> </input>
        </form>
        <div id="div1" class="text-danger"></div>

        
    </div>
</body>
<script>
$(document).ready(function(){
    $('#email').blur(function() {
        var email = $('#email').val();

        //if the field is null then return
        if (email == "") {
            return;
        }
        //send ajax request if the field is not empty
        $.ajax({
            url: 'login_process.php',
            type: 'post',
            data: {
                'email': email,
                'email_check': 1,
            },

            success: function(response) {
                //clear span before error message
                $('#email_error').remove();

                //adding span after textbox with error message
                $('#div1').after("<span id='email_error' class='text-danger'>" + response + "</span>");
            },
            error: function(e) {
                $("#result").html("Error E1");
            }
        })
    })
    $("#signUp").click(function(){
        window.location.href="signup.php";
    });
})
</script>
</html>