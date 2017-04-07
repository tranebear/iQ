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

function setReactButtons() {
    $query = "UPDATE REACT_BUTTONS SET counter = 0;";

    global $conn;

    $result = $conn->query($query);

    return $result;
}

function truncateQuestions() {
    $query1 = "TRUNCATE TABLE QUESTION;";

    global $conn;

    $result = $conn->query($query1);

    return $result;
}

echo setReactButtons();
echo truncateQuestions();



// Close connection
$conn->close();

?>