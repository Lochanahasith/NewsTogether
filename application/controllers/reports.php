<?php
/**
 *
 */
class Reports extends CI_Controller {

	public function select_telecasted() {
		$this->load->view('reports/select_telecasted');

	}

	public function monthly_telecasted() {
		$month = $this->input->get('month');
		$this->load->model('Reports/Telecasted');
		$result = $this->Telecasted->monthly_telecasted($month);

		if ($result != false) {
			$data['news_info'] = $this->Telecasted->monthly_telecasted($month);
			$this->load->view('Reports/telecasted_news', $data);
		} else {
			$this->session->set_flashdata('Telecasted_news', 'No telecasted news');
			redirect('Reports/select_telecasted');
		}
	}
	public function select_rejected() {
		$this->load->view('reports/select_monthly_rejected');

	}
	public function rej_news_details() {
		$month = $this->input->get('month');

		$this->load->model('Reports/Rejected');
		$result = $this->Rejected->all_rejected($month);
		if ($result != false) {
			$data['rej_news_info'] = $this->Rejected->all_rejected($month);

			$this->load->view('Reports/rejected_news', $data);
		} else {
			$this->session->set_flashdata('rej_news', 'No rejected news');
			redirect('Reports/select_rejected');
		}

	}
	public function select_summary() {
		$this->load->view('reports/select_monthly_summary');

	}
	public function get_monthly_summary() {
		//var_dumrepo_id);
		$month = $this->input->get('month');

		$this->load->model('Reports/Monthly_summary');
		$data1['tel_count'] = $this->Monthly_summary->all_telecasted_count($month);
		$data2['rej_count'] = $this->Monthly_summary->all_rejected_count($month);
		$data3['total_salary'] = $this->Monthly_summary->Total_salary($month);
		$new_array = array_merge($data1, $data2, $data3);

		$this->load->view('reports/monthly_summary', $new_array);

	}

}

?>