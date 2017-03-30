<?php
require_once "PHPUnit/Autoload.php";
require_once "QuestionDO.php"; //Samme som ArticleDAO.php i eksempel?

class QuestionDOTest extends PHPUnit_Extensions_Database_TestCase
{   

    public function getConnection(){
        $db = new PDO(
            "mysql:host=localhost;dbname=yntran_iq_db","yntran_iq","iqerbest");
        return $this->createDefaultDBConnection($db, "yntran_iq_db");
    }

    public function getDataSet(){
        return $this->createMySQLXMLDataSet("..\..\seed.xml");
    }

    public function testGetQuestion{
        $questionDO = new QuestionDO();
        $question = $questionDO->getQuestions(1);
        $this->assertEquals(
            array('id' => 1, "questions_text" => "What is Scrum?")),
            $question);
    }


}