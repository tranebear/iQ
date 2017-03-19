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
//Commenting this line out because phpStorm does not like it
//$speakCount = $conn->real_escape_string($_REQUEST['speak_up_counter']);

// MySQL query for to the database. Fetching counter.
$sql1 = "SELECT counter  FROM REACT_BUTTONS WHERE button_name = 'not_understand'";

//the connection is happend here
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);

//shows the counter
echo $row["counter"];

// Close connection
$conn->close();

?>
