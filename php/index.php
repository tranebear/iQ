<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<!-- Width=device-width sets the widt of the page to follow the screen-width of the device. initial-scale=1 sets the initial zoom level when the page is first loaded by the browser-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Links up to the bootstrap css-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Links to css stylesheet-->
	<link type="text/css" rel="stylesheet" href="../css/style.css">

	<!-- This is the ajax / jquery library packet. It allows us to use ajax and jquery in the code -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- This is bootstrap library packet. It allowas us to use bootstrap in the code -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>iQ</title>


</head>
<body>
<!-- div element for questions, input, buttons and header-->

	<h1>iQ</h1>
	<h5>- Helps questioning for you!</h5>

	<!-- The questionForm shows here-->
	<?php include 'forms/questionForm.php';?>
	

	<!-- The react buttons will be shown here -->
	<?php include 'forms/reactButtonForms.php';?>

	<div id = "upVoteContent">
		<!-- Highest voted questions will appear here -->
        <script src="../js/topVotedQuestion.js"></script>
	</div>
	<div id = "content">
        <!-- New questions from the database will appear here-->
    </div>

	<!-- Here are the js file included. Have to be included at the bottom. -->
	<script src="../js/reactButtons.js"></script>
	<script src="../js/votingButtons.js"></script>
	<script src="../js/submitButton.js"></script>
	<script src="../js/setColorInQuestionBoxes.js"></script>
    <script src="../js/resetCountersAndQuestions.js"></script>


	<script type="text/javascript">
		// This is the ajax loading for the question. The last parameter is how often the .load()
		// function is going to load the questions. It is in milliseconds.

        var highestID = 0;


        //Extend jQuery
        $.fn.exists = function () {
            return this.length !== 0;
        };

        function resetHighestID() {
            if (!$(".questionBox").exists()) {
                highestID = 0;
            }
        }

        resetHighestID();

        setInterval(resetHighestID,1000);

        //Check every second for new questions
        setInterval(function(){
            $.ajax({
                url: 'fetch/fetchQuestionFromDb.php?c=d&highestID=' + highestID,
                cache: false
            })
                .done(function( html ) {
                    $( "#content" ).prepend(html);
                    highestID = $("#content").children().first().data("id");
                });
        }, 1000);


        //Update totalvotes for each question every second.
        setInterval(function(){
            $("#content").children().each(function() {
                var id = $(this).data("id");
                $.ajax({
                    url: 'fetch/fetchTotalvotesFromDb.php?id=' + id
                })
                    .done(function(votes) {
                        $(".totalVotes" + id).html(votes);
                    });
            });
        }, 1000);

	</script>
</body>
</html>