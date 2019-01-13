$(document).ready(function () {
    $('#registration_form').submit(function() {
        var url = "/social_media/index.php/login/register_submit";
        var data = $('#registration_form').serialize();
        $.ajax(url, {
            data: data,
            success: registration_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var registration_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        alert(data.message);
        window.location.href = "/social_media/index.php/home/home";
    } else {
        alert(data.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};