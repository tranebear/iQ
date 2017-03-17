
function submit(question) {
    //document.getElementById("question").submit();

    $.ajax({
    	url:"../php/insert/insertQuestionToDb.php?question=" + question, //the page containing php script
	    type: "POST", //request type
	});
};
