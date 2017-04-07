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
            $upVoteContent = "<div class='questionBox' data-id='".$row["id"]."'><div class='questionText' id='".$row["id"]."'>" . $row["question_text"]."</div>" . "<div class='votebuttons'>" . "<button class='upVoteButton' onClick='upVoteButton(".$row["id"].", this)'>Up vote</button>". "<div class='totalVotes".$row["id"]."'>".$row["totalvote"]."</div>". "<button class='downVoteButton' onClick='downVoteButton(".$row["id"].", this)'>Down vote</button>" . "</div></div>";
        }
    }
    return $upVoteContent;
// MySQL query for to the database. Fetching counter.
}

echo getQuestionMax();
// Close connection
$conn->close();

?>


