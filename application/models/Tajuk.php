<?php
class Tajuk extends CI_Model {

	public $title;
	public $content;
	public $date;

	public function first() {
		$sql = "select id, code, tajuk, keterangan from tajuk limit 1";
		return $this->db->query($sql);
	}

	public function item($uuid) {
		$sql = "select id, code, tajuk, keterangan from tajuk where code = ? limit 1";
		return $this->db->query($sql,[$uuid]);
	}
	
	public function get_last_ten_entries()
	{
			$query = $this->db->get('entries', 10);
			return $query->result();
	}

	public function insert_entry()
	{
			$this->title    = $_POST['title']; // please read the below note
			$this->content  = $_POST['content'];
			$this->date     = time();

			$this->db->insert('entries', $this);
	}

	public function update_entry()
	{
			$this->title    = $_POST['title'];
			$this->content  = $_POST['content'];
			$this->date     = time();

			$this->db->update('entries', $this, array('id' => $_POST['id']));
	}

}
