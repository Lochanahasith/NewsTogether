<?php
/**
 *
 */
class Registration extends CI_Controller {

	public function index() {
		$this->load->view('corReg');
	}

	public function regUser() {

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('nic', 'NIC No', 'required|is_unique[reporter_info.nic]');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile No', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[reporter_info.email]');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[reporter_login.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passwordAgain', 'Password Again', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('corReg');
			//$this->session->set_flashdata('error', 'Error in Registration');
			//redirect('Registration/index');
		} else {

			$this->load->model('corRegModel');
			$response = $this->corRegModel->insertData();

			if ($response) {
				$this->session->set_flashdata('success', 'You have registered successfully');
				redirect('Registration/index');
			} else {
				$this->session->set_flashdata('errordb', 'Error in database insertion');
				redirect('Registration/index');
			}

			/*$this->session->set_flashdata('msg', 'Registered successfully');
				redirect('Registration/index');*/

		}

	}

}

?>