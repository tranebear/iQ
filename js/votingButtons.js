
var upVote;
var downVote;

function upVoteButton(id, button) {
    var totalVoteNumber = document.getElementById(id).parentNode.getElementsByClassName('totalVotes')[0];

    if(totalVoteNumber.innerHTML != null){
        upVote = parseInt(totalVoteNumber.innerHTML);
    }

    upVote += 1;
    totalVoteNumber.innerHTML = upVote;

    $.ajax({
    	url:"../php/update/updateUpVoteButton.php?id=" + id, //the page containing php script
	    type: "POST", //request type
	});

    $(button).attr('disabled','disabled');

}


function downVoteButton(id, button) {
    var totalVoteNumber = document.getElementById(id).parentNode.getElementsByClassName('totalVotes')[0];

    if(totalVoteNumber.innerHTML != null){
        downVote = parseInt(totalVoteNumber.innerHTML);
    }

    downVote -= 1;
    totalVoteNumber.innerHTML = downVote;

    $.ajax({
    	url:"../php/update/updateDownVoteButton.php?id=" + id, //the page containing php script
	    type: "POST", //request type
	});

    $(button).attr('disabled','disabled');
}
