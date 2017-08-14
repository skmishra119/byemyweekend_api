<?php
class db {
	private $dbhost = 'localhost';
	private $dbuser = 'root';
	private $dbpass = '';
	private $dbname = 'bmweek';

	public function connect(){
		$my_con_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
		$dbCon = new PDO($my_con_str, $this->dbuser, $this->dbpass);
		$dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbCon;
	}

}