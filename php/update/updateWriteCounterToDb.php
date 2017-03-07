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

//$speak_count = $_POST['div_contents']
// Escape user inputs for security
//$speak_count = $conn->real_escape_string($_REQUEST['speak_up_counter']);

// attempt update query execution

mysqli_query($conn, "UPDATE REACT_BUTTONS SET counter=counter+1 WHERE button_name = 'write_clearer'");

// $sql = "UPDATE REACT_BUTTONS SET counter='9' WHERE button_name = 'speak_up'";

// if (mysqli_query($conn, $sql)) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . mysqli_error($conn);
// }


// Close connection
$conn->close();

?>