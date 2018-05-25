<?php

/**
 *
 */
class Model_user extends CI_Model {

	function LoginUser() {
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$respond = $this->db->get('admin');

		if ($respond->num_rows() == 1) {
			return $respond->row(0);

		} else {
			return false;
		}

	}
}
?>