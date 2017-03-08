
var upVote;
var downVote;

// if(document.getElementById("speak_up_counter").innerHTML != null){
// 	upVote 
// = parseInt(document.getElementById("speak_up_counter").innerHTML);
// }

// if(document.getElementById("not_understand_counter").innerHTML != null){
// 	downVote = parseInt(document.getElementById("not_understand_counter").innerHTML);
// }


function upVoteButton(button) {
    // upVote += 1;
    // document.getElementById("speak_up_counter").innerHTML = upVote;
    var parent = button.parentElement.id;
    console.log('Dette er id-en til button sin forelder:' + parent);

    //hente id til parent div her
    $.get( "../php/update/updateUpVoteButton.php" );

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
