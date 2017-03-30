<?php

interface InterfaceQuestionDOTest
{
	//Don't know what $isHome is for. Yet. 
	public function getQuestions($questionId); 
}

class QuestionDO implements InterfaceQuestionDOTest
{
	public function getQuestions($questionId){
		$db = new PDO("mysql:host=localhost;dbname=yntran_iq_db","yntran_iq","iqerbest");

		$result = $db->query("SELECT question_text FROM QUESTION WHERE id='" . $questionId . "'");
		$question = string();
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$question = $row;
		$result->closeCursor();

		return $question;
	}
}
?>