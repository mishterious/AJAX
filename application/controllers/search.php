<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function search_info()
	{
		$email = $this->input->post('search');

		$this->load->model('Search_model');
		// $this->Search_model->get_student_by_email($email);

		$result = $this->Search_model->get_all_students($email);

		$this->session->set_userdata('result', $result); 
		// $this->load->view('home');
		echo json_encode($result);
	

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

?>