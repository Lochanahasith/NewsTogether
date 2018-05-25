<?php

class add extends CI_Controller {
	public function index() {

		$this->load->view('add_news');

	}

	public function get_news_id() {

	}

	public function add_news() {

		$this->load->model('CRUD/select');
		$data = $this->select->get_last_newsid();

		$news_id = $data + 1;

		$title = $this->input->get('title');
		$venue = $this->input->get('venue');
		$description = $this->input->get('description');
		$date = $this->input->get('date');
		$time = $this->input->get('time');
		$district = $this->input->get('district');
		$due_date = $this->input->get('due_date');
		$due_time = $this->input->get('due_time');

		$data_array = array(
			'news_id' => $news_id,
			'title' => $title,
			'venue' => $venue,
			'description' => $description,
			'date' => $date,
			'time' => $time,
			'district' => $district,
			'due_date' => $due_date,
			'due_time' => $due_time,
		);

		$status_array = array(
			'news_id' => $news_id,
			'status' => 'pending',
		);

		$this->load->model('CRUD/insert');
		$this->insert->add_news_model($status_array, $data_array);
		$this->session->set_flashdata('add_news', 'Successfully added');
		redirect('add/index');

	}

}

?>