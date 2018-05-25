<?php

class Personal_details extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function view_p_details($repoid) {
		$this->db->select('*');
		$this->db->from('reporter_info');
		$this->db->join('reporter_district', 'reporter_info.repo_id = reporter_district.repo_id');
		$this->db->join('reporter_login', 'reporter_info.repo_id = reporter_login.repo_id');
		$this->db->where('reporter_info.repo_id ', $repoid);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->row();
		}

	}

	public function cor_delete($id) {
		return $this->db->delete('reporter_info', ['repo_id' => $id]);

	}

}

?>