<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Tin_model extends CI_Model {

	public $variable;

	public function __construct() {
		parent::__construct();

	}
	public function insertTin($tendanhmuc) {
		$data = array(
			'tendanhmuc' => $tendanhmuc,
		);
		$dl = $this->db->insert('danhmuctin', $data);
		return $this->db->insert_id($dl);
	}
	public function loadTin() {
		//lấy danh mục.
		$this->db->select('*');
		$dl = $this->db->get('danhmuctin');
		$dl = $dl->result_array();
		return $dl;//chuyển dữ liệu lấy được thành mảng và return.
	}
	public function getDataById($id) {
		$this->db->select('*');
		$this->db->where('id', $id);
		$dl = $this->db->get('danhmuctin');//gan bien $dl cho du lieu lay duoc tu bang danhmuctin where id = $id
		$dl = $dl->result_array();
		return $dl;
	}
	public function updateDataById($id, $tendanhmuc) {
		$this->db->where('id', $id);
		$data = array(
			'id'         => $id,
			'tendanhmuc' => $tendanhmuc,
		);
		$kq = $this->db->update('danhmuctin', $data);
		return $kq;
	}
	public function deleteById($id) {
		$this->db->where('id', $id);
		return $this->db->delete('danhmuctin');
	}

	public function getTin() {
		//lấy tin
		$this->db->select('*');
		$ketqua = $this->db->get('tintuc');
		$kq     = $ketqua->result_array();
		return $kq;
	}
	public function insertBangTin($tieude, $iddanhmuc, $noidungtin) {
		$data = array(
			'tieude'     => $tieude,
			'iddanhmuc'  => $iddanhmuc,
			'noidungtin' => $noidungtin,
		);
		$kq = $this->db->insert('tintuc', $data);
		return $this->db->insert_id($kq);
	}
	public function selectTinById($id) {
		$this->db->select('*');
		$this->db->where('id', $id);
		$tin = $this->db->get('tintuc');
		$tin = $tin->result_array();
		return $tin;
	}
	public function updateTinById($id, $tieude, $iddanhmuc, $noidungtin) {
		$this->db->where('id', $id);
		$dulieu = array(
			'tieude'     => $tieude,
			'iddanhmuc'  => $iddanhmuc,
			'noidungtin' => $noidungtin,
		);
		return $this->db->update('tintuc', $dulieu);
	}
	public function deleteTinById($id) {
		$this->db->where('id', $id);
		return $this->db->delete('tintuc');
	}
	//viết model lây tên danh mục thông qua iddanhmuc giống nhau giữu hai bảng .
	//theo cách ràng buộc dữ liệu trong mysql ;
	//lấy danh mục tin theo id.
	public function getTenDanhMucById($id) {
		$this->db->select('*');
		$this->db->from('danhmuctin');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		//join từ bẳng danhmuctin vơi bảng tintuc. nơi idanhmuc vơid id của bảng danhmuctin bằng nhau. ràng buộc dữ liệu thông qua id trùng nhau.
		$this->db->where('tintuc.id', $id);
		$kq  = $this->db->get();
		$kq  = $kq->result_array();
		$ten = $kq[0]['tendanhmuc'];
		return $ten;
	}
	public function getIdDanhMucById($id) {
		$this->db->select('*');
		$this->db->from('danhmuctin');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		//join từ bẳng danhmuctin vơi bảng tintuc. nơi idanhmuc vơid id của bảng danhmuctin bằng nhau. ràng buộc dữ liệu thông qua id trùng nhau.
		$this->db->where('tintuc.id', $id);
		$kq  = $this->db->get();
		$kq  = $kq->result_array();
		$id = $kq[0]['iddanhmuc'];
		return $id;
	}


	//lay tin truyeen ra Front-end.
	public function layTin($perpage) {

		$this->db->select('*');
		$this->db->order_by('ngaytao', 'desc');

		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id', 'left');
		$kq = $this->db->get('danhmuctin', $perpage, 0);//lay tin tu vi tri thu 0
		$kq = $kq->result_array();

		return $kq;
	}
	public function soTrang($perpage) {
		//truyền biến số trang.đếm số record trong bảng, chia tổng số record cho số tin 1 trang ra số trang,
		$count = $this->db->get('tintuc');
		$count = $count->result_array();
		$total = count($count);
		//so trang bang tong so chia cho so tin trong mot trang,
		$page = ceil($total/$perpage);//so trang tin
		return $page;
	}
	public function loadTinTheoTrang($trangthumay, $perpage) {
		//load thu tu tin theo chi so trang tin hien tai,
		//vd .neu trang 3 thi load tin tu vi tri 4; (3-1)*2tintronng1trang;
		$this->db->select('*');
		$this->db->order_by('ngaytao' , 'desc');
		$this->db->join('tintuc', 'tintuc.iddanhmuc = danhmuctin.id' , 'left');
		//tinh ra vi tri ma tin duoc layl;
		$vitri = ($trangthumay-1)*$perpage;
		$ketqua = $this->db->get('danhmuctin', $perpage, $vitri);
		//lấy tin từ bảng danhmuctin với 2 tin/1trang và từ vị trí = $vitri;
		$ketqua = $ketqua->result_array();
		return $ketqua;
	}
	//chuc nang dang ky nguoi dung 

	public function dangKyThanhVien($name, $email, $password, $role) {
			$data = array(
				'name' => $name,
				'email' => $email,
				'password' => $password,
				'role' => $role
			);
			$kq = $this->db->insert('user', $data);
			return $this->db->insert_id($kq);
	}
	 
	public function userInFor($where = array()) {
			$this->db->where($where);
			$result = $this->db->get('user');
			return $result->row();
	}




}

/* End of file Tin_model.php */
/* Location: ./application/models/Tin_model.php */