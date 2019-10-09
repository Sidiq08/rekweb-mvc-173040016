<?php 

class Mahasiswa_model {
	//dbh = data handle

	private $table = 'Mahasiswa';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getAllMahasiswa(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}
}