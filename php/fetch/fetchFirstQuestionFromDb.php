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

function getNumberOfRows() {
    $sql = "SELECT COUNT('id') FROM 'QUESTION';";

    global $conn;

    $number = $conn->query($sql);

    if ($number != 0) {
        return getFirstQuestion();
    }

}

function getFirstQuestion() {
    $sql2 = "SELECT * FROM `QUESTION` ORDER BY `id` ASC LIMIT 1;";

    global $conn;


//the connection is happend here
    $result = $conn->query($sql2);

//if there is more than 0 rows in the database, fetch the rows. it is generating each question in a div
    $content = "";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            /*Returning: <div><div>Question ID: questionTekst</div>   <div> UpVoteButton, <div>totalvote</div> DownVoteButton</div></div><br>*/
            $content .= "<div class='questionBox' data-id='".$row["id"]."'><div class='questionText' id='".$row["id"]."'>" . $row["question_text"]."</div>" . "<div class='votebuttons'>" . "<button class='upVoteButton' onclick='upVoteButton(".$row["id"].", this)'><img src='../png/upvote.svg'></button>". "<div class='totalVotes".$row["id"]."'>".$row["totalvote"]."</div>". "<button class='downVoteButton' onClick='downVoteButton(".$row["id"].", this)'><img src='../png/downvote.svg'></button>" . "</div></div>";
        }
    }
    return $content;
// MySQL query for to the database. Fetching counter.
}

echo getNumberOfRows();
// Close connection
$conn->close();

?>


