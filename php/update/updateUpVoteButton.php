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
//$parentId = $_GET['parent'];

$pid = $_GET["id"];


mysqli_query($conn, "UPDATE QUESTION SET totalvote=totalvote+1 WHERE id = '$pid'");


// if(isset($_POST['parent']))
// {	
// 	echo "hei2";
//     $pid = $_POST['parent'];
//     echo $pid;
//     mysqli_query($conn, "UPDATE QUESTION SET totalvote=totalvote+1 WHERE id = '$pid'");
//     // Do whatever you want with the $uid
// }
// attempt update query execution



// Close connection
$conn->close();

?>