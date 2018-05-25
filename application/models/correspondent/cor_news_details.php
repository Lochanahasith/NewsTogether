<?php

class Cor_news_details extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function view_news($id) {
		$this->db->select('*');
		$this->db->from('news_reporter');
		$this->db->join('news_telecasted', 'news_reporter.news_id = news_telecasted.news_id');

		$this->db->where('news_reporter.repo_id ', $id);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query;
		} else {
			return false;
		}
	}

	public function acc_rej_view($id) {
		$this->db->select('*');
		$this->db->from('news_info');
		$this->db->where('news_info.news_id ', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		}

	}

	public function rejected($id) {
		$this->db->select('*');
		$this->db->from('news_reporter');
		$this->db->join('news_rejected', 'news_reporter.news_id = news_rejected.news_id');
		$this->db->join('news_info', 'news_info.news_id = news_rejected.news_id');
		$this->db->where('news_reporter.repo_id ', $id);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query;
		} else {
			return false;
		}

	}

	public function cor_salary($id, $month) {

		$this->db->select('*');
		$this->db->from('news_telecasted');
		$this->db->join('news_reporter', 'news_telecasted.news_id = news_reporter.news_id');
		$this->db->where('news_reporter.repo_id', $id);
		$this->db->where('Month(news_telecasted.telecast_date)', $month);
		$query = $this->db->get();

		return $query;

	}

}

?>