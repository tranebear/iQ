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


function getQuestionsWithIdHigherThan($highestID) {
    $sql2 = "SELECT * FROM `QUESTION` WHERE `id` > $highestID ORDER BY `id` DESC";

    global $conn;

//the connection is happend here
    $result = $conn->query($sql2);

//if there is more than 0 rows in the databse, fetch the rows. it its generating each question in a div
    $content = "";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            /*Returning: <div><div>Question ID: questionTekst</div>   <div> UpVoteButton, <div>totalvote</div> DownVoteButton</div></div><br>*/
            $content .= "<div class='questionBox' data-id='".$row["id"]."'><div class='questionText' id='".$row["id"]."'>" . "Question " . $row["id"] . ": " . $row["question_text"]."</div>" . "<div class='votebuttons'>" . "<button class='upVoteButton' onClick='upVoteButton(".$row["id"].")'>Up vote</button>". "<div class='totalVotes' id='".$row["id"]."'>".$row["totalvote"]."</div>". "<button class='downVoteButton' onClick='downVoteButton(".$row["id"].")'>Down vote</button>" . "</div></div>";
        }
    }
    return $content;
// MySQL query for to the database. Fetching counter.
}

echo getQuestionsWithIdHigherThan($_GET["highestID"]);
// Close connection
$conn->close();

?>


