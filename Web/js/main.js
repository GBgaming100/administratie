var RFIDtag = "";

$(document).ready(function () {
    cardProcess = false;
    if (cardProcess == false) {
        setInterval(function () {
            getRFIDtag()
        }, 500);
    }else{

    }
});
//gets the RFID tag that the arduino has saved
function getRFIDtag() {
    $.ajax({
        url: "http://192.168.0.40/", //IP of Arduino
        type: "GET",
        dataType: 'json',
        // crossDomain: true,

        success: function (data) {
            data = data["RFIDtag"];
            RFIDtag = data;
            checkDB();
        }
    });
}
//Checks if the RFID tag already exists in the database then decides with the output to register or let the person choose for the notes.
function checkDB() {
    $.ajax({
        type: "POST",
        url: "inc/checkDB.php",
        data: {rfidTag: RFIDtag},
        success :function (data) {
            console.log(data);
            if (data == true){
                window.location.replace("Choose.php");
            } else if(data == false){
                window.location.replace("Register.php");
            }

        }
    })
}
