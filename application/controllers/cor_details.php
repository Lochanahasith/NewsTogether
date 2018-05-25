<?php

class Cor_details extends CI_Controller {
	public function index() {

		$this->load->model('correspondent/Select');

		$data['cor_info'] = $this->Select->det_join();
		$this->load->view('correspondent/cor_details', $data);
	}

	public function personal_details($repo_id) {

		$this->load->model('correspondent/Personal_details');
		//$p_info = $this->Personal_details->view_p_details($repo_id);

		//$this->load->view('correspondent/personal_details_view', ['p_info' => $p_info]);
		$data['p_info'] = $this->Personal_details->view_p_details($repo_id);
		//print_r($data);
		$this->load->view('correspondent/personal_details_view', $data);
	}

	public function acc_news_details($id) {

		$this->load->model('correspondent/cor_news_details');
		//
		$result = $this->cor_news_details->view_news($id);
		if ($result != false) {
			$data['news_info'] = $this->cor_news_details->view_news($id);
			$this->load->view('correspondent/cor_news_details', $data);
		} else {
			$this->session->set_flashdata('acc_news', 'No Accepted news');
			redirect('Cor_details/index');
		}

	}
	public function rej_news_details($id) {

		$this->load->model('correspondent/cor_news_details');
		//
		$result = $this->cor_news_details->rejected($id);
		if ($result != false) {
			$data['rej_news_info'] = $this->cor_news_details->rejected($id);

			$this->load->view('correspondent/cor_rejected', $data);
		} else {
			$this->session->set_flashdata('rej_news', 'No rejected news');
			redirect('Cor_details/index');
		}

	}

	// view salary month selection

	public function cor_salary($repo_id) {

		$data['id'] = $repo_id;
		$this->load->view('correspondent/view_salary_details', $data);
		//print_r($data);

	}

	// get salary
	public function get_cor_salary($repo_id) {
		//var_dump($repo_id);
		$month = $this->input->get('month');

		$this->load->model('correspondent/cor_news_details');
		$data['salary'] = $this->cor_news_details->cor_salary($repo_id, $month);

		$this->load->view('correspondent/payment', $data);

	}

	public function view_acc_rej($news_id) {
		$this->load->model('correspondent/cor_news_details');
		$data['news_info'] = $this->cor_news_details->acc_rej_view($news_id);
		$this->load->view('correspondent/acc_rej_info', $data);
	}

	public function edit_cor($repo_id) {
		$this->load->model('correspondent/Personal_details');
		$data['cor_info'] = $this->Personal_details->view_p_details($repo_id);
		$this->load->view('correspondent/update_cor_details', $data);
	}

	public function update_cor($id) {

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('nic', 'NIC No', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile No', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		//$this->form_validation->set_rules('passwordAgain', 'Password Again', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Error in updating the record');
			redirect('Cor_details/index');

		} else {

			$this->load->model('correspondent/personal_details_update');
			$response = $this->personal_details_update->cor_Update($id);

			if ($response) {
				$this->session->set_flashdata('success', 'Record successfully Updated ');
				redirect('Cor_details/index');
			} else {
				$this->session->set_flashdata('errordb', 'Error in database update');
				redirect('Cor_details/index');
			}

		}
	}

	public function delete_cor($id) {

		$this->load->model('correspondent/Personal_details');

		if ($this->Personal_details->cor_delete($id)) {
			redirect('cor_details/index');
		}

	}

}

?>