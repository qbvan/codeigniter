<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}
class Home extends CI_Controller {
	//khai báo biến private dùng trong class home.
	//khai báo số lượng tin 1 trang dùng cho tất cả.
	private $soluongtin1trang;
	public function __construct() {
		parent::__construct();
		$this->load->library(array('form_validation', 'session'));
		$this->load->model('tin_model');
		$this->soluongtin1trang = 1;
		//khai báo theo kiêut hướng đối tượng lấy 2 tin hiển thị trong 1 trang;
	}
	public function index() {
		//kiem tra xem nguoi dung dang nhap hay chua
		$this->load->view('login');
	}

	public function datban() {
		echo 'Thông tin khách hàng đặt bàn và gửi mail thông báo đến quản trị web restaurant';
	}
	public function blog() {
		$tin = $this->tin_model->layTin($this->soluongtin1trang);
		//load model lấy tin.truyền biên 2tin ở trên vào,đây là dạng tổng quát. nên k cần khai báo nhiều lần,
		$this->session->set_userdata('admin', 'qbvan');
		$trang = $this->tin_model->soTrang($this->soluongtin1trang);
		$data  = array(
			'mangdulieu' => $tin,
			'sotrang'    => $trang,
		);
		$this->load->view('blog', $data);
	}
	public function addtin() {
		$this->load->view('danhmuctin_view');
	}
	public function page($trang) {
		$dulieu = $this->tin_model->loadTinTheoTrang($trang, $this->soluongtin1trang);
		//load model-> truyen bien $trang va $this->soluongtin1trang;
		//travedulieucuatungtrangtheostttinlayduoctubangcsdl;
		$trang = $this->tin_model->soTrang($this->soluongtin1trang);
		$data  = array(
			'mangdulieu' => $dulieu,
			'sotrang'    => $trang,
		);
		$this->load->view('blog', $data);
	}
	public function dangky() {
		$this->load->view('register');
	}
	public function register() {
		$name     = $this->input->post('name');
		$email    = $this->input->post('email');
		$password = sha1($this->input->post('password'));
		$role     = $this->input->post('role');

		$dl = $this->tin_model->dangKyThanhVien($name, $email, $password, $role);

		if ($dl) {
			$this->load->view('danhkythanhcong');
		} else {
			echo 'there are something wrong with you account';
		}
		//dangKyThanhVien
	}

	public function login() {

	}
}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */