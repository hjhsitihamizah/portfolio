const button = document.querySelector('.btn')
const form = document.querySelector('.form')

$(document).ready(function() {
    $("#registerBtn").click(function() {
        $.ajax({
            url: "register.php",
            type: "POST",
            cache: false,
            data: $("#userForm").serialize(),
            success: function(result) {
                $("#div1").html(result);
            }
        });
    });



})