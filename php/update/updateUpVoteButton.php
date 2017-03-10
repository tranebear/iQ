<?php
// Define login information to database
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

//fetch id from votingButtons.js
$pid = $_GET["id"];

// MySQL query for to the database. It updates totalvote +1 when clicked
mysqli_query($conn, "UPDATE QUESTION SET totalvote=totalvote+1 WHERE id = '$pid'");



// Close connection
$conn->close();

?>