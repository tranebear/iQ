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

// Escape user inputs for security, it request the question div from questionForm.php
$question = $conn->real_escape_string($_GET['question']);
 
// MySQL query for to the database. It inserts questions from the input textfield to mysql database
// The value is NULL because the user are not going to set the id by them self. 
// In MySQL, we have said that id have Auto Increment for each insert
$sql = "INSERT INTO `yntran_iq_db`.`QUESTION` (`id`, `question_text`) VALUES (NULL,'$question')";

//Checks if the query is true, if true --> insert last id to database
if($conn->query($sql) === true){
	$last_id = $conn->insert_id;
	
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}

// Close connection
$conn->close();

?>