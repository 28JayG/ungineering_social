$(document).ready(function () {

    $('#login_form').submit(function() {
        var url = "login_submit.php";
        var data = $('#login_form').serialize();
        $.ajax(url, {
            data: data,
            success: login_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var login_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        alert(data.message);
        window.location.href = "dashboard.php";
    } else if(!data.success && data.mode==3){
        alert("Login failed\nCheck your email or password");
    } else{
        alert("Not registered");
    }
};

var on_error = function () {
    alert("something went wrong");
};