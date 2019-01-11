$(document).ready(function () {
    $('#registration_form').submit(function() {
        var url = "register_submit2.php";
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
        window.location.href = "login_form.php";
    } else {
        alert(data.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};