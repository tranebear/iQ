<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>iQ</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <link type="text/css" rel="stylesheet" href="textfield.css"> -->
	
</head>
<body>
	<?php include 'insertToDb.php';?>

	<?php include 'form.php';?>

	<?php include 'reactButtonForms.php';?>


	<div id = "content">
        <!-- Her kommer spørsmålene som nye div-er.-->
    </div>

    <script src="../js/reactButtons.js"></script>

    <script type="text/javascript">

		setInterval(function(){
		   $('#content').load('http://org.ntnu.no/tdt4140iq/iQ/php/fetchFromDb.php');
		}, 100000000);
    </script>
</body>
</html>