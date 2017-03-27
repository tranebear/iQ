<?php
//require_once __DIR__ . '/DataPump.php';
/**
 * Created by PhpStorm.
 * User: Renat
 * Date: 27.03.2017
 * Time: 12.27
 */

/**
 * These are required to ensure that the PDO object in the class is able to work correctly
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */
class DataPumpTest extends PHPUnit_Extensions_Database_TestCase
{
    /**
     * This is the object that will be tested
     * @var DataPump
     */
    protected $object;

    /**
     * only instantiate pdo once for test clean-up/fixture load
     * @var PDO
     */
    static private $pdo = null;

    /**
     * only instantiate PHPUnit_Extensions_Database_DB_IDatabaseConnection once per test
     * @var type
     */
    private $conn = null;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(){
        $this->object = new DataPump();

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(){

    }

    protected function getConnection(){
        if ($this->conn === null){
            if(self::$pdo === null){
                self::$pdo = new PDO('mysql:dbname=testing_database;host=localhost', 'dbUserName', 'dbPassword');;
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, 'iQ_testing');
        }
        return $this->conn;
    }

    protected function getDataSet(){
        return $this->createMySQLXMLDataSet(__DIR__ . '/datapump.xml');
    }

    /**
     * This is here to ensure that the database is working correctly
     */
    public function testDatabaseConnection(){
        $this->getConnection() ->createDataSet(array('products'));
        $prod = $this->getDataSet();
        $queryTable = $this->getConnection()->createQueryTable(
            'products', 'SELECT * FROM * products';
        );
        $expectedTable = $this->getDataSet()->getTable('products');
        //Here we check that the table in the database matches the data in the XML file
        $this->assertTablesEqual($expectedTable, $queryTable);
    }

    /**
     * This is where you can put your actual tests
     */

}