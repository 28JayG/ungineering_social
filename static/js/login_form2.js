$(document).ready(function () {

    $('#login_form').submit(function() {
        var url = "/social_media/index.php/login/login_submit";
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
        window.location.href = "/social_media/index.php/home/home";
    } else if(!data.success && data.mode==2){
        alert("Not registered");
    } else{
        alert("Login failed\nCheck your email or password");
    }
};

var on_error = function () {
    alert("something went wrong");
};