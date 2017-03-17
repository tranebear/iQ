
var upVote;
var downVote;

// if(document.getElementById("speak_up_counter").innerHTML != null){
// 	upVote 
// = parseInt(document.getElementById("speak_up_counter").innerHTML);
// }

// if(document.getElementById("not_understand_counter").innerHTML != null){
// 	downVote = parseInt(document.getElementById("not_understand_counter").innerHTML);
// }


function upVoteButton(id) {
    // upVote += 1;
    // document.getElementById("speak_up_counter").innerHTML = upVote;

    $.ajax({
    	url:"../php/update/updateUpVoteButton.php?id=" + id, //the page containing php script
	    type: "POST", //request type
	});
   
    //return id != null;
};

//connect to testUpVoteButtonFunc.js
module.exports = upVoteButton;

function downVoteButton(id) {

    // downVote += 1;
    // document.getElementById("not_understand_counter").innerHTML = downVote;
    $.ajax({
    	url:"../php/update/updateDownVoteButton.php?id=" + id, //the page containing php script
	    type: "POST", //request type
	});
};
