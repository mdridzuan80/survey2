<?php
class Gred extends CI_Model {
	public function list() {
		$sql = "select `id`, `nama` from `gred` order by `order`";
		return $this->db->query($sql)->result();
	}
}
