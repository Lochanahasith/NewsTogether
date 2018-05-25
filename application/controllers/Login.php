<?php

class Login extends CI_Controller {

	public function LoginUser() {

		if (!isset($this->session->loggedin)) {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('Login');
			} else {

				$this->load->model('Model_user');
				$result = $this->Model_user->LoginUser();

				if ($result != false) {

					$user_data = array(
						'user_id' => $result->id,
						'username' => $result->username,
						'email' => $result->email,

						'loggedin' => TRUE,

					);
					$this->session->set_userdata($user_data);
					//print_r($_SESSION);

					//$this->session->set_flashdata('Welcome', 'Welcome back');
					redirect('home/index');

				} else {

					//$data["error"]="Invalid User Id and Password combination";
					//$this->load->view('Login',$data);
					$this->session->set_flashdata('errmsg', 'Invalid Username or Password');

					redirect('Login/LoginUser');
				}

			}

		} else {
			redirect('home/index');

		}

	}
	public function LogoutUser() {
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('loggedin');
		redirect('Login/LoginUser');
	}
}
?>