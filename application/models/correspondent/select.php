<?php

class Select extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function det_join() {
		$this->db->select('*');
		$this->db->from('reporter_info');
		$this->db->join('reporter_district', 'reporter_info.repo_id = reporter_district.repo_id');
		$this->db->join('reporter_login', 'reporter_info.repo_id = reporter_login.repo_id');
		$query = $this->db->get();
		return $query;

	}

}

?>