
var speakUpClicks;
var notUnderstandClicks;
var writeCleanerClicks;

if(document.getElementById("speak_up_counter").innerHTML != null){
	speakUpClicks = parseInt(document.getElementById("speak_up_counter").innerHTML);
}

if(document.getElementById("not_understand_counter").innerHTML != null){
	notUnderstandClicks = parseInt(document.getElementById("not_understand_counter").innerHTML);
}

if(document.getElementById("write_cleaner_counter").innerHTML != null){
	writeCleanerClicks = parseInt(document.getElementById("write_cleaner_counter").innerHTML);
}

function speakUp() {
    speakUpClicks += 1;
    document.getElementById("speak_up_counter").innerHTML = speakUpClicks;
    $.ajax({
    	url:"../php/update/updateSpeakCounterToDb.php", //the page containing php script
	    type: "POST", //request type
	});
};

function notUnderstand() {
    notUnderstandClicks += 1;
    document.getElementById("not_understand_counter").innerHTML = notUnderstandClicks;
    $.ajax({
    	url:"../php/update/updateNotUnderstandCounterToDb.php", //the page containing php script
	    type: "POST", //request type
	});
};

function writeCleaner() {
    writeCleanerClicks += 1;
    document.getElementById("write_cleaner_counter").innerHTML = writeCleanerClicks;
    $.ajax({
    	url:"../php/update/updateWriteCounterToDb.php", //the page containing php script
	    type: "POST", //request type
	});
};


<script type="text/javascript">

    //Loading the voting amount from db
    setInterval(function(){
        $('#speak_up_counter').load('http://org.ntnu.no/tdt4140iq/iQ/php/fetch/fetchSpeakCounterFromDb.php');
    }, 10000);

    setInterval(function(){
        $('#not_understand_counter').load('http://org.ntnu.no/tdt4140iq/iQ/php/fetch/fetchNotUnderstandCounterFromDb.php');
    }, 10000);

    setInterval(function(){
        $('#write_cleaner_counter').load('http://org.ntnu.no/tdt4140iq/iQ/php/fetch/fetchWriteCounterFromDb.php');
    }, 10000);

</script>