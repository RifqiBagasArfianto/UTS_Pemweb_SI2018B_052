<?php
 
class dataProduct {
	private $_db;

	public function __construct(database $db) {
		$this->_db = $db;
	}

	public function getProduct() {
		return "<pre>".print_r($this->_db->get("product", ""))."</pre>";
	}
}

require "database.php";

$DB = new database();

$datauser = new dataProduct($DB);

$datauser->getProduct();

?>
