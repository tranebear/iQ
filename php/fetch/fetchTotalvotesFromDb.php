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


function getTotaltvotes($voteid) {

    $sql2 = "SELECT totalvote FROM `QUESTION` WHERE id = '$voteid'";

    global $conn;

//the connection is happend here
    $result = $conn->query($sql2);

//if there is more than 0 rows in the databse, fetch the rows. it its generating each question in a div
    $content = "";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $content .= $row["totalvote"];
        }
    }
    return $content;
// MySQL query for to the database. Fetching counter.
}

echo getTotaltvotes($_GET["id"]);
// Close connection
$conn->close();

?>


