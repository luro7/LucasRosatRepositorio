<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
			//$this->user="c1531094_barber";$this->pass="51VOzupuru";$this->host="localhost";$this->ddbb="c1531094_barber";
			$this->user="root";$this->pass="";$this->host="localhost";$this->ddbb="barberia_db";
    }

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		mysqli_set_charset($con, "utf8");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}

