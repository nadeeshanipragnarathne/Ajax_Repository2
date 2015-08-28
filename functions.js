$(function () {
    $("#submit_login").click(function () {
        var username = $("#username").val();
//        validate the error message for insert the username 
        if (username == "") {
            $('.errormess').html('Please Insert Your Username');
            return false;
        }
//        validate the error message for insert the password 
        var password = $("#password").val();
        if (password == "") {
            $('.errormess').html('Please Insert Your Password');
            return false;
        }
//        validate the error message for enter the username and password both
        var dataString = '&username=' + username + '&password=' + password;
        $.ajax({
            type: "POST",
            url: 'login.php',
            data: dataString,
            dataType: "html",
            success: function (data) {
              
                
                if (data == 0) {
//                    validate the error message for  the username or password is wrong 
                    $('.errormess').html('<b style="color:red;">you are not logged.</b>');
                } else {
//                    login to the profile if the username and password both are correct
                    $('.errormess').html('<b style="color:green;">you are logged. wait for redirection</b>');
                    document.location.href = 'private.php';
                }
            }
        });
        return false;
    });
});