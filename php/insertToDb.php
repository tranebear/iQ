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
$question = $conn->real_escape_string($_REQUEST['question']);
 
// attempt insert query execution
$sql = "INSERT INTO `yntran_iq_db`.`QUESTION` (`id`, `question_text`) VALUES (NULL,'$question')";

if($conn->query($sql) === true){
	$last_id = $conn->insert_id;
    //echo "Records inserted successfully. Last inserted ID is: " . $last_id;
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}

// Close connection
$conn->close();

?>