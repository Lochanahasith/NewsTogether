<?php

class insert extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function add_news_model($status_array, $data_array) {

		$this->db->insert('news_info', $data_array);
		$this->db->insert('news_status', $status_array);

	}

}

?>