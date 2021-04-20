<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css file -->
    <link rel="stylesheet" href="css/signup.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- js file -->
    <script type="text/javascript" src="js/signup.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Login</title>
    <style>
    .text-danger{
        color: red;
        line-height: 3.0;
    }
    </style>
</head>

<body>

    <div class="user">
        <header class="user__header">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
            <h1 class="user__title">Registration form</h1>            
        </header>
        
        <form id="userForm" class="form" action="register.php" method="post">
            <div class="form__group">
                <input name="username" type="text" placeholder="Username" class="form__input" />
            </div>

            <div class="form__group">
                <input id="email" name="email" type="email" placeholder="Email" class="form__input" />
            </div>

            <div class="form__group">
                <input name="address" type="text" placeholder="Place Country" class="form__input" />
            </div>

            <div class="form__group">
                <input name="password" type="password" placeholder="Password" class="form__input" />
            </div>

            <input class="btn" type="submit" id="registerBtn" value="Register"> </input>
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
            url: 'register.php',
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
})
</script>
</html>