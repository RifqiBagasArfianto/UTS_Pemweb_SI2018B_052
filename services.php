<?php
class services {
	private $_db;
	public function __construct(database $db) {
		$this->_db = $db;
	}

	public function add($data) {
		$data["photo"] = $this->addphoto($data["photo"]);
		$this->_db->insert('product', $data);
	}

	public function update($data, $where) {
		$data["photo"] = $this->addphoto($data["photo"]);
		$this->_db->update('product', $data, $where);
	}

	public function addphoto($data) {
		$namaFile = $data['photo']['name'];
		$namaSementara = $data['photo']['tmp_name'];
		$dirUpload = "../assets/uploads/";
		$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
		return $namaFile;
	}

	public function delete($table, $where) {
		$this->_db->delete('product', $where);
	}
}