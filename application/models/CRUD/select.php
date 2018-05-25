<?php

class select extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function t_join() {
		$this->db->select('*');
		$this->db->from('news_info');
		$this->db->join('news_status', 'news_info.news_id = news_status.news_id');
		$this->db->join('news_reporter', 'news_info.news_id = news_reporter.news_id');
	}

	public function select_received() {

		$this->t_join();
		$this->db->where('news_status.status', 'completed');
		$query = $this->db->get();
		return $query;

	}

	public function select_asigned() {
		$this->t_join();
		$this->db->where('news_status.status', 'asigned');
		$query = $this->db->get();
		return $query;

	}

	public function select_pending() {
		$this->db->select('*');
		$this->db->from('news_info');
		$this->db->join('news_status', 'news_info.news_id = news_status.news_id');
		$this->db->where('news_status.status', 'pending');
		$query = $this->db->get();
		return $query;

	}

	// -----------------------------------------------------------------//

	public function t_joinall() {
		$this->db->select('*');
		$this->db->from('news_info');
		$this->db->join('news_reporter', 'news_info.news_id = news_reporter.news_id');
	}

	public function get_all_completed($id) {

		$this->t_joinall();
		$this->db->join('news_completed', 'news_info.news_id = news_completed.news_id');

		$this->db->where('news_info.news_id', $id);
		$query = $this->db->get();
		return $query;

	}

	public function get_all_asigned($id) {

		$this->t_joinall();
		$this->db->where('news_info.news_id', $id);
		$query = $this->db->get();
		return $query;

	}

	public function get_all_pending($id) {

		$this->db->select('*');
		$this->db->from('news_info');
		$this->db->where('news_id', $id);
		$query = $this->db->get();
		return $query;

	}

	public function get_status($news_id) {

		$this->db->select('status');
		$this->db->from('news_status');
		$this->db->where('news_id', $news_id);
		return $this->db->get();

	}

	public function get_Ada_Derana_payment() {
		$this->db->select('payment_per_news');
		$this->db->from('channel_payment');
		$this->db->where('channel', 'Ada_Derana');
		$Ada_Derana_Payment = $this->db->get();
		return $Ada_Derana_Payment;}

	public function get_24_7_payment() {
		$this->db->select('payment_per_news');
		$this->db->from('channel_payment');
		$this->db->where('channel', 'News_24_7');
		$Ada_Derana_Payment = $this->db->get();
		return $Ada_Derana_Payment;}

	public function get_last_newsid() {
		$query = $this->db->query('SELECT news_id FROM news_info ORDER BY news_id DESC LIMIT 1');
		$result = $query->result_array();

		$index = $result[0];
		$str = ($index['news_id']);
		$int = (int) $str;

		return $int;
	}

}

?>


