$(document).ready(function () {
    $('#status_form').submit(function() {
        var url = "homepage_submit.php";
        var data = $('#status_form').serialize();
        $.ajax(url, {
            data: data,
            success: status_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var status_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        //alert(data.message);
        window.location.href = "homepage.php";
    } else {
        alert(data.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};
