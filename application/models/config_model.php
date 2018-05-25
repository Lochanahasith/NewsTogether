<?php

/**
 *
 */
class config_model extends CI_Model {

	function get_channel_payment() {
		$this->db->select('*');
		$this->db->FROM('channel_payment');
		$query = $this->db->get();
		return $query;
	}

	function update_payment($adn,$n247){

		$this->db->set('payment_per_news',$adn);
		$this->db->where('channel','Ada_Derana');
		$query=$this->db->update('channel_payment');

		$this->db->set('payment_per_news',$n247);
		$this->db->where('channel','News_24_7');
		$query=$this->db->update('channel_payment');
		return $query;

	}
}
?>