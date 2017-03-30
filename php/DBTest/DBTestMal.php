<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;

/**
* 
*/
abstract class Generic_Tests_DbTesting extends TestCase
{
	use TestCaseTrait;

	//only instantiate pdo once for test clean-up/fixture load
	private $pdo = null;

	//only instantiate PHPUnit_Extensions_Database_DB_IDatabaseConnection oncre per test
	private $conn = null;

	/**
     * @return PHPUnit_Extensions_Database_DB_IDatabaseConnection
     */

	final public function getConnection()
	{
		if ($this->conn === null) {
			if (self::$pdo == null) {
				self::$pdo = new PDO('mysql:dbname=yntran_iq_db;host=localhost', 'yntran_iq', 'dberbest');
			}
			$this->conn = $this->createDefaultDBConnection(self::$pdo, 'yntran_iq_db');
		}
		return $this->conn;
	}

	/**
     * @return PHPUnit_Extensions_Database_DataSet_IDataSet
     */

	/**
	*Defines how the initial state of the database should look before each test is executed.
	*/
	public function getDataSet(){
		return $this->createFlatXMLDataSet(dirname(__FILE__).'/_files/dbtesting.xml');

	}

}
?>

