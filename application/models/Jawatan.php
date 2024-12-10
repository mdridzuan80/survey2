<?php
class Jawatan extends CI_Model {
	public function list() {
		$sql = "select * from jawatan where status = 1";
		return $this->db->query($sql)->result();
	}
}
