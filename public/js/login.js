$(document).ready(function() {
    $('#login-form').submit(function(e) {
        $.ajax({
            type: 'post',
            url: '/ajax_login.php',
            data: $('#login-form').serialize(),
            success: function(html) {
                if(html == 'true') {
                    alert("Login successful");
                } else {
                    alert(html);
                }
            }
        });
    });
});
