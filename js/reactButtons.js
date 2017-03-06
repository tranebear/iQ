
var clicks;
if(document.getElementById("speak_up_counter").innerHTML != null){
	clicks = parseInt(document.getElementById("speak_up_counter").innerHTML);
}

function onClick() {
    clicks += 1;
    document.getElementById("speak_up_counter").innerHTML = clicks;
};


// var div_contents = $("#speak_up_counter").html();
// $.post('updateCounterToDb.php', { contents: div_contents });