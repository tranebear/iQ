<?php
require_once "../vendor/autoload.php";
require_once __DIR__ . "/../src/QuestionDO.php";
require_once __DIR__ . "/../src/Database.php";

use PHPUnit\Framework\TestCase;

class QuestionDOTest extends TestCase
{   
    private $deleteIds;

    public function __construct() {
        $this->deleteIds = [];
    }

    public function testDataBaseConnection() {
        $database = new \Database();
        $database->connect();
        $connection = $database->getConnection();

        $this->assertNotNull($connection);
    }

    public function testGetQuestion(){
        $questionDO = new QuestionDO();
        $question = $questionDO->getQuestions(1);
        $this->assertEquals( 
            array('id' => 1, "question_text" => "What is Scrum?"), 
            $question
        );
    }

    public function testInsertQuestion() {
        // Insert a new question and get the ID for the new question in the database
        $questionDO = new QuestionDO();
        $new_question_id = $questionDO->insertQuestion();

        // Fetch the question from the database using the ID from the insert
        $question = $questionDO->getQuestions($new_question_id);
        $this->assertEquals( 
            array('id' => $new_question_id, "question_text" => "Foobar"), 
            $question
        );

        $this->deleteIds[] = $new_question_id;
    }

    protected function tearDown() {
        $database = new \Database();
        $database->connect();
        $connection = $database->getConnection();

        $connection->query('DELETE FROM QUESTION WHERE id IN (' . implode(',', $this->deleteIds) . ')');
    }

    


}