<?php
class Jawatan extends CI_Model {
	public function list() {
		$sql = "select * from jawatan";
		return $this->db->query($sql)->result();
	}
}
