
var upVote;
var downVote;

// if(document.getElementById("speak_up_counter").innerHTML != null){
// 	upVote 
// = parseInt(document.getElementById("speak_up_counter").innerHTML);
// }

// if(document.getElementById("not_understand_counter").innerHTML != null){
// 	downVote = parseInt(document.getElementById("not_understand_counter").innerHTML);
// }


function upVoteButton() {
    // upVote += 1;
    // document.getElementById("speak_up_counter").innerHTML = upVote;

    $.ajax({
    	url:"../php/update/updateUpVoteButton.php", //the page containing php script
	    type: "POST", //request type
	});
};

function downVoteButton() {
    // downVote += 1;
    // document.getElementById("not_understand_counter").innerHTML = downVote;
    $.ajax({
    	url:"../php/update/updateDownVoteButton.php", //the page containing php script
	    type: "POST", //request type
	});
};
