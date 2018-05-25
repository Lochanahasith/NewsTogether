<?php
/**
 *
 */
class config extends CI_Controller {

	public function index() {
		$this->load->model('config_model');
		$data['payment_info'] = $this->config_model->get_channel_payment();

		$this->load->view('config.php', $data);

	}

	public function update_config() {
		$adn = $this->input->get('Ada_Derana');
		$n247 = $this->input->get('News_24_7');

		$this->load->model('config_model');
		$result = $this->config_model->update_payment($adn, $n247);

		if ($result) {
			$this->session->set_flashdata('rates', 'Successfully Updated');
			redirect('config/index');
		} else {
			$this->session->set_flashdata('err', 'Error in update');
			redirect('config/index');

		}
	}

}

?>