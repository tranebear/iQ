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


// attempt update query execution
mysqli_query($conn, "UPDATE REACT_BUTTONS SET counter=counter+1 WHERE button_name = 'write_clearer'");


// Close connection
$conn->close();

?>