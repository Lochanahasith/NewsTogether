<?php

class Rejected extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function all_rejected($month) {
		$this->db->select('*');
		$this->db->from('news_rejected');
		$this->db->join('news_info', 'news_info.news_id = news_rejected.news_id');
		$this->db->join('news_reporter', 'news_info.news_id = news_reporter.news_id');
		$this->db->where('Month(news_info.date)', $month);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query;
		} else {
			return false;
		}

	}

}

?>