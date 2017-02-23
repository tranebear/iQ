<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>iQ</title>
    <link type="text/css" rel="stylesheet" href="textfield.css">
	<script src="textfield.js"></script>
</head>
<body>
	<?php include 'insertToDb.php';?>
	
	<?php include 'form.php';?>

	<div id = "content">
    	<?php include 'fetchFromDb.php';?>
        <!-- Her kommer spørsmålene som nye div-er.-->
    </div>
</body>
</html>