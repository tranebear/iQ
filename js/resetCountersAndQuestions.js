var now = new Date(); // Make new Date() - object
var diffUTC = now.getHours() - now.getUTCHours();
var hour = new Date(now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate(), now.getUTCHours()+diffUTC+1, 0, 0); //Next hour in UTC Time
var millisToNextHour = hour - now; // Next hour in milliseconds

if (millisToNextHour > 0) {
    //console.log("Minutes until database cleaner runs: " + millisToNextHour/(1000*60));
    setTimeout(cleanDB, millisToNextHour);
}

// The function which calls to the php-file that truncates the QuestionTable in the DB.
function cleanDB() {
    $.get('../php/update/updateDbCleanser.php');
    // The rest of the code removes what is in the feed
    document.getElementById("content").innerHTML = "";
    if ($(".questionBox").exists()) {
        $("#content").children().each(this.parentNode.removeChild(this));
    }
    setTimeout(cleanDB, 3600000);
}

// Masse måter som ikke funker under her:
/*
setTimeout(cleanDB(),millisToNextHour);

function cleanDB() {
    $.ajax({
        url: '../php/update/updateDbCleanser.php',
        timeout: 3600000,
        complete: console.log("Truncate")
    })
    .done(

        //setTimeout(cleanDB,3600000)
    )
}*/
/*
setTimeout(cleanDB(),millisToNextHour);

function cleanDB() {
    setInterval(function () {
        $.ajax({
            method: 'get',
            url: '../php/update/updateDbCleanser.php'
        });
    }, 3600000);
}
*/


    /*time = new Date();
    if (time.getUTCHours() < 16 + diffUTC && time.getUTCHours() > 7 + diffUTC) {
        console.log(time);
        $(document).load('../php/update/updateDbCleanser.php');//'http://org.ntnu.no/tdt4140iq/iQ/php/update/updateDbCleanser.php'
        setTimeout(cleanDB(),3600000);
    }*/
