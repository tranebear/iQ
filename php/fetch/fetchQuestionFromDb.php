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
    	/*Returning: <div>Question ID: questionTekst   UpVoteButton, <div>totalvote</div> DownVoteButton</div><br>*/
        echo "<div class='questionBox' id='".$row["id"]."'>" . "Question " . $row["id"] . ": " . $row["question_text"]. "<button onClick='upVoteButton(".$row["id"].")'>Up vote</button>". "<div class='totalVotes' id='".$row["id"]."'>".$row["totalvote"]."</div>". "<button onClick='downVoteButton(".$row["id"].")'>Down vote</button>" . "</div>" . "<br>";
    }
} else {
    echo "0 results";
}
// Close connection
$conn->close();

?>