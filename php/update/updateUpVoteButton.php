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

$parentId = $_GET['parent'];

// attempt update query execution
mysqli_query($conn, "UPDATE QUESTION SET totalvote=totalvote+1 WHERE id = '$parentId'");


// Close connection
$conn->close();

?>