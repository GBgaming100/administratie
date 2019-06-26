$(document).ready(function () {
    $( "#inputState" ).change(function() {
        show_selected();
    });

    $( ".js_stats_sick" ).change(function() {
        addStats(1);
    });

    $( ".js_stats_absent" ).change(function() {
        addStats(2);
    });

    $( ".js_stats_late" ).change(function() {
        addStats(3);
    });

});

function header() {
    window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.replace("/Administratie/thanks.php");

    }, 100);
}

function show_selected() {
    var selector = document.getElementById('inputState');
    var value = selector[selector.selectedIndex].value;

    if (value == 5){
        $( ".js_ExtraTime" ).removeClass( "d-none" );
    } else{
        $(".js_ExtraTime").addClass("d-none")
    }
}

function addStats( kindOfStat){
    $.ajax({
        type: "POST",
        url: "inc/addStats.php",
        data: {kindOfStat: kindOfStat},
        success :function (data) {
        }
    })
}