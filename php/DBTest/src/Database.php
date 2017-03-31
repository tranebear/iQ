<?php
class Database
{
	private $db;

	public function connect(){
		$this->db = new PDO("mysql:host=mysql.stud.ntnu.no;dbname=yntran_iq_db","yntran_iq","iqerbest");
	}

	public function getConnection() {
		return $this->db;
	}
}