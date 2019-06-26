$(document).ready(function () {
    $( ".js_submit" ).click(function() {
        $.ajax({
            type:"POST",
            url:"inc/registerDB.php",
            data: $(".registerForm").serialize(),
            success: function (data) {
                console.log(data);
                window.location.replace("inc/sessionData.php");
            }
        })
    });
});