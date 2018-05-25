<?php

class corRegModel extends CI_Model {
/*
public function do_upload() {
$config['upload_path'] = './images/';
$config['allowed_types'] = 'gif|jpg|png';
$config['max_size'] = 2000;
$config['max_width'] = 10240;
$config['max_height'] = 7680;
$this->load->library('upload', $config);
if (!$this->upload->do_upload('corImage')) {
$error = array('error' => $this->upload->display_errors());
//   var_dump($error);
//   $this->load->view('test/upload_form', $error);
} else {
$data = array('upload_data' => $this->upload->data());
//   $this->load->view('test/upload_success', $data);
return $data;
}
}
 */
	function insertData() {
		/*$info = $this->do_upload();
		$filename = $info['upload_data']['file_name']; */
		$query = $this->db->query('SELECT repo_id FROM reporter_info ORDER BY repo_id DESC LIMIT 1');
		$result = $query->result_array();

		$index = $result[0];
		$str = ($index['repo_id']);
		$int = (int) $str;
		$repo_id = $int + 1;
		var_dump($repo_id);

		$data1 = array(
			'repo_id' => $repo_id,
			'nic' => $this->input->post('nic', TRUE),
			'name' => $this->input->post('name', TRUE),
			'mobile' => $this->input->post('mobile', TRUE),
			'address' => $this->input->post('address', TRUE),
			'email' => $this->input->post('email', TRUE),

		);
		//print_r($data1);
		//die();
		$this->db->insert('reporter_info', $data1);

		$data2 = array(
			'repo_id' => $repo_id,
			'district' => $this->input->post('district'),

		);
		$this->db->insert('reporter_district', $data2);

		$data3 = array(
			'repo_id' => $repo_id,
			'username' => $this->input->post('username', TRUE),
			'password' => $this->input->post('password', TRUE),

		);
		return $this->db->insert('reporter_login', $data3);

	}
}

?>