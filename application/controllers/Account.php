<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Account extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('url', 'form'));
		$this->load->model('account_model');
	}
	public function index() {

	}
	public function login() {
		$email    = $this->input->post('email');
		$password = sha1($this->input->post('password'));
		$user     = $this->account_model->check($email, $password);

		if ($user) {
			$this->session->set_userdata('username', $user['username']);
			$this->session->set_userdata('email', $user['email']);
			$this->session->set_userdata('role', $user['role']);

			redirect('tin/danhmuctin', 'refresh');
		} else {
			$this->session->set_flashdata('log_error', 'Email or Password not correct!');
			redirect('home', 'refresh');
		}

	}
	public function logout() {
		$this->session->sess_destroy();
		redirect('slide', 'refresh');

	}

}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */