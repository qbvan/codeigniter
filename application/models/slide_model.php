<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class slide_model extends CI_Model {

	public $variable;

	public function __construct() {
		parent::__construct();

	}
	public function loadData() {
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slide_topbanner');
		$dl = $this->db->get('homebanner');
		$dl = $dl->result_array();
		foreach ($dl as $key => $value) {
			$kq = $value['giatrithuoctinh'];
		}
		return $kq;
	}
	public function updateData($updates) {
		$this->db->where('tenthuoctinh', 'slide_topbanner');
		$dlupdate = array(
			'tenthuoctinh'    => 'slide_topbanner',
			'giatrithuoctinh' => $updates,
		);
		return $this->db->update('homebanner', $dlupdate);
	}
	public function booking($ten, $email, $sdt, $ngaydatban, $giodatban, $songuoi, $tinnhan) {
		//$this->db->get('datban');
		$data = array(
			'ten'        => $ten,
			'email'      => $email,
			'sdt'        => $sdt,
			'ngaydatban' => $ngaydatban,
			'giodatban'  => $giodatban,
			'songuoi'    => $songuoi,
			'tinnhan'    => $tinnhan,
		);
		$this->db->insert('datban', $data);
		$kq = $this->db->insert_id();
		return $kq;
	}

}

/* End of file slide_model.php */
/* Location: ./application/models/slide_model.php */