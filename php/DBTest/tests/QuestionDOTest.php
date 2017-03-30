<?php
require_once "../vendor/autoload.php";
//require_once "../src/QuestionDO.php";

use PHPUnit\Framework\TestCase;

class QuestionDOTest extends TestCase
{   

    public function getConnection(){
        $db = new PDO(
            "mysql:host=mysql.stud.ntnu.no;dbname=yntran_iq_db","yntran_iq","iqerbest");
        return $this->createDefaultDBConnection($db, "yntran_iq_db");
    }

    public function getDataSet(){
        return $this->createMySQLXMLDataSet("seed.xml");
    }

    public function getTable($tableName)
    {
        if (!isset($this->tables[$tableName])) {
            throw new InvalidArgumentException("$tableName is not a table in the current database.");
        }

        return $this->tables[$tableName];
    }

    public function testGetQuestion(){
        $questionDO = new QuestionDO();
        $question = $questionDO->getQuestions(1);
        $this->assertEquals( 
            array('id' => 1, "questions_text" => "What is Scrum?"), $question);
    }

    public function testDataBaseConnection()
    {
        $this->getConnection()->createDataSet(array('QUESTION'));
        $prod = $this->getDataSet();
        $queryTable = $this->getConnection()->createQueryTable(
            'QUESTION', 'SELECT * FROM QUESTION'
        );
        $expectedTable = $this->getDataSet()->getTable('QUESTION');
        //Here we check that the table in the database matches the data in the XML file
        $this->assertTablesEqual($expectedTable, $queryTable);
    }


}