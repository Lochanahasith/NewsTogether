<?php

class Personal_details_update extends CI_Model {

	function cor_Update($id) {

		$data1 = array(

			'nic' => $this->input->post('nic', TRUE),
			'name' => $this->input->post('name', TRUE),
			'mobile' => $this->input->post('mobile', TRUE),
			'address' => $this->input->post('address', TRUE),
			'email' => $this->input->post('email', TRUE),

		);
		//print_r($data1);
		//die();
		$this->db->where('repo_id', $id);
		$this->db->update('reporter_info', $data1);

		$data2 = array(

			'district' => $this->input->post('district'),

		);

		$this->db->where('repo_id', $id);
		$this->db->update('reporter_district', $data2);

		$data3 = array(

			'username' => $this->input->post('username', TRUE),
			'password' => $this->input->post('password', TRUE),

		);

		$this->db->where('repo_id', $id);
		return $this->db->update('reporter_login', $data3);

	}
}

?>