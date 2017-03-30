<?php
require_once "../vendor/autoload.php";
//require_once "../src/QuestionDO.php";

use PHPUnit\Framework\TestCase;

class QuestionDOTest extends TestCase
{   

    public function getConnection(){
        $db = new PDO(
            "mysql:host=localhost;dbname=yntran_iq_db","yntran_iq","iqerbest");
        return $this->createDefaultDBConnection($db, "yntran_iq_db");
    }

    public function getDataSet(){
        return $this->createMySQLXMLDataSet("..\..\seed.xml");
    }

    public function testGetQuestion(){
        $questionDO = new QuestionDO();
        $question = $questionDO->getQuestions(1);
        $this->assertEquals( 
            array('id' => 1, "questions_text" => "What is Scrum?"), $question);
    }


}