<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>iQ</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <link type="text/css" rel="stylesheet" href="textfield.css"> -->
	
</head>
<body>
	<?php include 'insert/insertQuestionToDb.php';?>

	<?php include 'forms/questionForm.php';?>

	<?php include 'forms/reactButtonForms.php';?>


	<div id = "content">
        <!-- Her kommer spørsmålene som nye div-er.-->
    </div>

    <script src="../js/reactButtons.js"></script>

    <script type="text/javascript">

		setInterval(function(){
		   $('#content').load('http://org.ntnu.no/tdt4140iq/iQ/php/fetch/fetchQuestionFromDb.php');
		}, 10000);
    </script>
</body>
</html>