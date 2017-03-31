<?php

require __DIR__ . '/Database.php';

class QuestionDO
{
	private $db;

	public function __construct() {
		$database = new \Database();
		$database->connect();
		$this->db = $database->getConnection();
	}

	public function getQuestions($questionId) {
		$result = $this->db->query("SELECT id, question_text FROM QUESTION WHERE id='" . $questionId . "'");
		$question = [];
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$question = $row;
		$result->closeCursor();

		return $question;
	}

	public function insertQuestion() {
		$statement = $this->db->prepare("INSERT INTO QUESTION (question_text, totalvote) VALUES(:text, :vote)");
		$statement->execute(array(
		    "text" => "Foobar",
		    "vote" => 0
		));

		return $this->db->lastInsertId();
	}
}
?>