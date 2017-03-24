var now = new Date();
var millisTillNextHour = new Date(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(), now.getMinutes(), now.getSeconds()+10, 0) - now;
if (millisTillNextHour < 0) {
    millisTillNextHour += 3600000;
}
function cleanDB() {
    $(document).load('http://org.ntnu.no/tdt4140iq/iQ/php/update/updateDbCleanser.php');
    setTimeout(cleanDB,100000);
}
setTimeout(cleanDB,millisTillNextHour);
