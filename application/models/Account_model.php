<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Account_model extends CI_Model {

	public $variable;

	public function __construct() {
		parent::__construct();

	}
	public function check($email, $password) {
		$this->db->select('*');
		$where = array(
			'email'    => $email,
			'password' => $password,
		);
		$this->db->where($where);
		$kq = $this->db->get('user');
		if ($kq->num_rows() == 1) {
			$row = $kq->row();

			$data = array(
				'username' => $row->name,
				'email'    => $row->email,
				'password' => $row->password,
				'ngaytao'  => $row->ngaytao,
				'role'     => $row->role
			);
			return $data;
		} else {
			return false;
		}
	}

}

/* End of file Account_model.php */
/* Location: ./application/models/Account_model.php */