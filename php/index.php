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
		
	</div>
	<div id = "content">
        <!-- New questions from the database will apear here-->
    </div>

	<!-- Here are the js file included. Have to be included at the bottom. -->
	<script src="../js/reactButtons.js"></script>
	<script src="../js/votingButtons.js"></script>
	<script src="../js/submitButton.js"></script>
	<script src="../js/setColorInQuestionBoxes.js"></script>


	<script type="text/javascript">
		// This is the ajax loading for the question. The last parameter is how often the .load()
		// function is going to load the questions. It is in milliseconds.
		setInterval(function(){
	   		$('#content').load('http://org.ntnu.no/tdt4140iq/iQ/php/fetch/fetchQuestionFromDb.php');
		}, 1000);


            var now = new Date();
            var millisTillNextHour = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 17, 25, 0, 0) - now;
            if (millisTillNextHour < 0) {
                millisTillNextHour += 3600000;
            }
            setTimeout(function () {
                setInterval(function () {
                    alert("Start");
                    $(document).load('http://org.ntnu.no/tdt4140iq/iQ/php/update/updateDbCleanser.php')
                },360000);
            }, millisTillNextHour);
	</script>
</body>
</html>