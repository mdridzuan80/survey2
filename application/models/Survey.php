<?php
class Survey extends CI_Model {
	public function add($data) {
		return $this->db->insert("survey",$data);
	}
}
