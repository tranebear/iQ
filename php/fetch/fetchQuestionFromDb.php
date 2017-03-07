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


$sql2 = "SELECT * FROM `QUESTION` ORDER BY `id` DESC";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Question " . $row["id"] . ": " . $row["question_text"]. "<br>";
    }
} else {
    echo "0 results";
}
// Close connection
$conn->close();

?>