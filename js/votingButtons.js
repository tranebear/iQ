
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

<<<<<<< HEAD
//connect to testUpVoteButtonFunc.js
module.exports = upVoteButton;

function downVoteButton(id) {
>>>>>>> 72d32288e786396aab86639062fae06296281ad1
    // downVote += 1;
    // document.getElementById("not_understand_counter").innerHTML = downVote;
    $.ajax({
    	url:"../php/update/updateDownVoteButton.php?id=" + id, //the page containing php script
	    type: "POST", //request type
	});
};
