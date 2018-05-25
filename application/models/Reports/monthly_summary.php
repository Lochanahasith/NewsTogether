<?php

class Monthly_summary extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function all_telecasted($month) {

		$this->db->select('*');
		$this->db->from('news_telecasted');
		$this->db->join('news_reporter', 'news_telecasted.news_id = news_reporter.news_id');

		$this->db->where('Month(news_telecasted.telecast_date)', $month);
		$query = $this->db->get();

		return $query->num_rows();

	}

	public function all_telecasted_count($month) {

		$this->db->select('*');
		$this->db->from('news_telecasted');
		$this->db->join('news_reporter', 'news_telecasted.news_id = news_reporter.news_id');

		$this->db->where('Month(news_telecasted.telecast_date)', $month);
		$query = $this->db->get();

		return $query->num_rows();

	}

	public function all_rejected_count($month) {
		$this->db->select('*');
		$this->db->from('news_rejected');
		$this->db->join('news_info', 'news_info.news_id = news_rejected.news_id');
		$this->db->join('news_reporter', 'news_info.news_id = news_reporter.news_id');
		$this->db->where('Month(news_info.date)', $month);
		$query = $this->db->get();

		return $query->num_rows();

	}

	public function Total_salary($month) {

		$this->db->select('*');
		$this->db->from('news_telecasted');
		$this->db->where('Month(news_telecasted.telecast_date)', $month);
		$query = $this->db->get();

		return $query;

	}

}

?>