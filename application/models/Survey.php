<?php
class Survey extends CI_Model {
	public function add($data) {
		return $this->db->insert("survey",$data);
	}

	public function info($code) {
		$sql = "select * from survey where random = ?";
		return $this->db->query($sql,[$code]);
	}
}
