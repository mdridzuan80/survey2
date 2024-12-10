<?php
class Gred extends CI_Model
{
	public function list()
	{
		$sql = "select `id`, `nama` from `gred` order by `order`";
		return $this->db->query($sql)->result();
	}

	public function listActive()
	{
		$sql = "SELECT
				gred.id,
				gred.nama
			FROM
				jawatan
				INNER JOIN gred_jawatan ON jawatan.id = gred_jawatan.jawatan_id
				INNER JOIN gred ON gred.id = gred_jawatan.gred_id
			WHERE
				jawatan.`status` = 1
			ORDER BY
				gred.`order` ASC";
		return $this->db->query($sql)->result();
	}
}
