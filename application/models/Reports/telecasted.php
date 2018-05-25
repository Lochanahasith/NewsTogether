<?php

class Telecasted extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function monthly_telecasted($month) {
		$this->db->select('*');
		$this->db->from('news_telecasted');
		$this->db->join('news_info', 'news_info.news_id = news_telecasted.news_id');
		$this->db->join('news_reporter', 'news_info.news_id = news_reporter.news_id');
		$this->db->where('Month(news_telecasted.telecast_date)', $month);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query;
		} else {
			return false;
		}

	}

}

?>