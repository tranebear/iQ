<?php
$servername = "mysql.stud.ntnu.no";
$username = "yntran_iq";
$password = "iqerbest";
$dbname = "yntran_iq_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Escape user inputs for security
//$question = $conn->real_escape_string($_REQUEST['question']);

// MySQL query to the database.
$query1 = "TRUNCATE TABLE QUESTION;";
$query2 = "UPDATE REACT_BUTTONS SET counter = 0;";

//the connection happens here
$result1 = $conn->query($query1);
$result2 = $conn->query($query2);

// Close connection
$conn->close();

?>