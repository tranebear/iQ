var now = new Date(); // Make new Date() - object
var diffUTC = now.getHours() - now.getUTCHours();
var hour = new Date(now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate(), now.getUTCHours()+diffUTC+1, 0, 0); //Next hour in UTC Time
var millisToNextHour = hour - now; // Next hour in milliseconds

setTimeout(cleanDB(),millisToNextHour);

function cleanDB() {
    time = new Date();
    if (time.getUTCHours() < 16 + diffUTC && time.getUTCHours() > 7 + diffUTC) {
        $(document).load('http://org.ntnu.no/tdt4140iq/iQ/php/update/updateDbCleanser.php');
        setTimeout(cleanDB(),3600000);
    }
}


