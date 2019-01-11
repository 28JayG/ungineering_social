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
    /*$().scroll(function(){
        var url="homepage_scroll.php";
        var data=$().serialize();
        $.ajax(url,{
            data:data,
            success:scroll_success;
            error:on_error;
            type="POST";
        });
        
    });*/
});


var status_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        window.location.href = "homepage.php";
    } else {
        alert(response.message);
    }
};


var on_error = function () {
    alert("something went wrong");
};
