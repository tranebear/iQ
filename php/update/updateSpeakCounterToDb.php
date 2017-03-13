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

// MySQL query for to the database. It updates counter +1 when clicked
mysqli_query($conn, "UPDATE REACT_BUTTONS SET counter=counter+1 WHERE button_name = 'speak_up'");


// Close connection
$conn->close();

?>