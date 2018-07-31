<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Tin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('tin_model');
	}

	public function index() {

	}
	public function danhmuctin() {
		$kq = $this->tin_model->loadTin();

		$kq = array('mangdl' => $kq);

		$this->load->view('danhmuctin_view', $kq);
	}
	public function themdanhmuc() {
		$tendanhmuc = $this->input->post('tendanhmuc');
		// echo "<pre>";
		// var_dump($tendanhmuc);
		// echo "</pre>";
		// die();
		$this->load->model('tin_model');
		$kq = $this->tin_model->insertTin($tendanhmuc);
		if ($kq) {
			$this->load->view('thanhcong');
		} else {
			echo 'them moi tin that bai. xin kiem tra lai code';
		}
	}
	public function suadanhmuc($iddanhmuc) {
		$kq = $this->tin_model->getDataById($iddanhmuc);
		$kq = array('mangkq' => $kq);
		$this->load->view('editdanhmuc', $kq);
	}
	public function updateTin() {
		$id         = $this->input->post('id');
		$tendanhmuc = $this->input->post('tendanhmuc');

		$kq = $this->tin_model->updateDataById($id, $tendanhmuc);
		if ($kq) {
			$this->load->view('thanhcong');
		} else {
			echo 'update du lieu that bai';
		}

	}
	public function deleteDanhMuc($id) {
		$kq = $this->tin_model->deleteById($id);
		if ($kq) {
			$this->load->view('thanhcong');
		} else {
			echo 'xoa that bai, xem lai code';
		}
	}

	//thêm mới dữ liệu bằng ajax jquery theo kiêu single web application;
	public function addJquery() {
		$tendanhmuc = $this->input->post('tendanhmuc');
		$this->tin_model->insertTin($tendanhmuc);
		$idtin = $this->db->insert_id();
		echo json_encode($idtin);
	}
	public function quanlytin() {
		$kq = $this->tin_model->getTin();
		//load tin
		$kq2 = $this->tin_model->loadTin();
		//load danh muc.
		$dulieu = array(
			'mangtin'     => $kq,
			'mangdanhmuc' => $kq2,
		);
		$this->load->view('tin_view', $dulieu);
	}
	public function themTin() {
		$tieude     = $this->input->post('tieude');
		$iddanhmuc  = $this->input->post('iddanhmuc');
		$noidungtin = $this->input->post('noidungtin');
		$kq         = $this->tin_model->insertBangTin($tieude, $iddanhmuc, $noidungtin);
		if ($kq) {
			$this->load->view('thanhcong');
		} else {
			echo 'there is something wrong';
		}
	}
	public function editTin($id) {
		//function này dùng  để lây nội dung chi tiết của tin sau đó gán cho một mảng ,để truyền  dữ liệu sang view đê thưc hiện công việc  sửa dữlieuej.
		//sau đó dùng id đêr lấy tên danhmuc từ bảng danhmuc tin  bằng code từ bên model theo cách rang buộc dữ liệu.

		$kqs1 = $this->tin_model->selectTinById($id);//lấy tất cả dữ liệu tin theo id.

		$kqs2 = $this->tin_model->getTenDanhMucById($id);//lấy tên danh mcuc theo id,

		$kq = array(
			'mangtin'     => $kqs1,
			'mangdanhmuc' => $kqs2,
		);

		$this->load->view('edit_tin', $kq);
	}
	public function updateTinChiTiet() {
		$id         = $this->input->post('id');
		$tieude     = $this->input->post('tieude');
		$iddanhmuc  = $this->input->post('iddanhmuc');
		$noidungtin = $this->input->post('noidungtin');

		$kq = $this->tin_model->updateTinById($id, $tieude, $iddanhmuc, $noidungtin);
		if ($kq) {
			$this->load->view('thanhcong');
		} else {
			echo 'there is something wrong';
		}
	}
	public function deleteTinId($id) {
		$kq = $this->tin_model->deleteTinById($id);
		if ($kq) {
			$this->load->view('xoathanhcong');
		} else {
			echo 'there is something wrong with your code. please take a look again';
		}
	}

}

/* End of file Tin.php */
/* Location: ./application/controllers/Tin.php */