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


function getQuestionMax() {
    $sql = "SELECT * FROM `QUESTION` ORDER BY `QUESTION`.`totalvote` DESC LIMIT 1;";

    global $conn;

//the connection is happend here
    $result = $conn->query($sql);

//if there is more than 0 rows in the databse, fetch the rows. it its generating each question in a div
    $upVoteContent = "";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            /*Returning: <div><div>Question ID: questionTekst</div>   <div> UpVoteButton, <div>totalvote</div> DownVoteButton</div></div><br>*/
            $upVoteContent = "<div id='topVoted' data-id='".$row["id"]."'><div id='topText'><span id='left'>Top Rated Question</span><span id='right'>Total Votes</span></div><div id='topVotedText' id='".$row["id"]."'>" . $row["question_text"]."</div>" . "<div id='topVotedTotalVotes'".$row["id"]."'>".$row["totalvote"]."</div>" . "</div>";
        }
    } else {
        $upVoteContent = "<div id='topVoted'><div id='topVotedText'> A new thread has started</div></div>";
    }
    return $upVoteContent;
// MySQL query for to the database. Fetching counter.
}

echo getQuestionMax();
// Close connection
$conn->close();

?>


