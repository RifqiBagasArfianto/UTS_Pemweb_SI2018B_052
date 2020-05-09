<?php
 
class dataLocation {
	private $_db;

	public function __construct(database $db) {
		$this->_db = $db;
	}

	public function getLocation() {
		return "<pre>".print_r($this->_db->get("location", ""))."</pre>";
	}
}

require "database.php";

$DB = new database();

$datauser = new dataLocation($DB);

$datauser->getLocation();

?>
