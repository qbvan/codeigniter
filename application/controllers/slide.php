<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}
require ('mail/PHPmailer.php');
class Slide extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('slide_model');
	}
	public function index() {
		//$this->load->view('addData_view');
		//thêm chức năng make đặt bàn thông qua email bỏ qua tính năng load view thêm mới json.
		$this->load->view('index_view');
	}
	public function addSlide() {
		$dl = $this->slide_model->loadData();
		$dl = json_decode($dl, true);
		if ($dl == null) {
			$dl = array();
		}

		//
		$target_dir    = "uploads/";
		$target_file   = $target_dir.basename($_FILES["image"]["name"]);
		$uploadOk      = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["image"]["tmp_name"]);
			if ($check !== false) {
				echo "File is an image - ".$check["mime"].".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["image"]["size"] > 5000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			 && $imageFileType != "gif") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
				echo "The file ".basename($_FILES["image"]["name"])." has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
		$image       = base_url()."uploads/".basename($_FILES["image"]["name"]);
		$tieude      = $this->input->post('tieude');
		$mota        = $this->input->post('mota');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');

		$kq = array(
			'tieude'      => $tieude,
			'mota'        => $mota,
			'button_link' => $button_link,
			'button_text' => $button_text,
			'image'       => $image,
		);
		array_push($dl, $kq);
		$dl = json_encode($dl);
		if ($this->slide_model->updateData($dl)) {
			$this->load->view('success');
		}
	}
	public function editSlide() {
		$dl = $this->slide_model->loadData();
		$dl = json_decode($dl, true);
		$dl = array('mangkq' => $dl);
		$this->load->view('editSlide_view', $dl);
	}
	public function doEdit() {
		$dl = $this->slide_model->loadData();
		$dl = json_decode($dl, true);//=> thành dạng mảng.
		//decode json tthành dạng mảng.
		//push mảng tam vào dl;
		//encode  lại thành json. insert vào csdl;

		$tieude      = $this->input->post('tieude');
		$mota        = $this->input->post('mota');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');
		$image       = $_FILES['slide_image']['name'];
		$imageTmp    = $_FILES['slide_image']['tmp_name'];
		//lấy tên của ảnh và file tạm

		$slide_image = array();
		/* khai báo mảng chứa dữ liệu ảnh cũ.
		nếu không thêm ảnh mới thì path ảnh cũ vẫn giữ nguyên. nếu thêm ảnh mới thì thay đổi đường đãn đén ảnh mới.
		 */
		$tatcaslide      = array();
		$slide_image_old = $this->input->post('slide_image_old');

		for ($i = 0; $i < count($image); $i++) {

			if (empty($image[$i])) {
				$slide_image[$i] = $slide_image_old[$i];
			} else {
				$path = 'uploads/'.$image[$i];
				//khai báo đường dẫn đến file ảnh.
				move_uploaded_file($imageTmp[$i], $path);
				//di chuyển file ảnh vật lý đến foldel uploads
				$slide_image[$i] = base_url()."uploads/".$image[$i];
				//xuất ra tên và đường dẫn của file mới update.
			}
			//duyệt mảng chứa số tiêu đề.
			$trunggian                = array();
			$trunggian['tieude']      = $tieude[$i];
			$trunggian['mota']        = $mota[$i];
			$trunggian['button_link'] = $button_link[$i];
			$trunggian['button_text'] = $button_text[$i];
			$trunggian['image']       = $slide_image[$i];
			array_push($tatcaslide, $trunggian);
			//push du lieu vao trong mang array.
		}
		$tatcaslide = json_encode($tatcaslide);
		if ($this->slide_model->updateData($tatcaslide)) {
			$this->load->view('success');
		};
	}
	public function list() {
		$dl = $this->slide_model->loadData();
		$dl = json_decode($dl, true);
		
		$dl = array('mangdl' => $dl); 
		$this->load->view('view_list', $dl);

	}
	public function datban() {
		$ten = $this->input->post('ten');
		$email = $this->input->post('email');
		$sdt = $this->input->post('sdt');
		
		$ngaydatban = $this->input->post('ngaydatban');
		$giodatban = $this->input->post('giodatban');
		//xử lý hiênt thị ngày tháng trong database . 
		$d = (string)$ngaydatban;
		$h = (string)$giodatban;
 		
 		$giodatban = $d. " " .$h;
		$songuoi = $this->input->post('songuoi');
		$tinnhan = $this->input->post('tinnhan');
		//lây thông tin input từ khách hang .
		//load model->truyen dữ liệu vào model.
		//thưc hiện insert dữ liệu và gửi mail xác nhân lại cho khách hàng,  
		$dl = $this->slide_model->booking($ten, $email, $sdt, $d, $giodatban, $songuoi, $tinnhan);
		if ($dl) {
				$this->load->view('bookings');
				include "mail/class.phpmailer.php";
			include "mail/class.smtp.php";

			$mail = new PHPMailer();
			$mail->isSMTP();// Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';
			// Specify main and backup SMTP servers
			$mail->SMTPAuth   = true;// Enable SMTP authentication
			$mail->Username   = 'binhminh.semangemdi.94@gmail.com';// SMTP username
			$mail->Password   = 'salyokjssatywmdx';// SMTP password
			$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted
			$mail->Port       = 587;// TCP port to connect to

			//Recipients
			$mail->setFrom('qbvan@emily.jp', 'Thong bao');
			$mail->addAddress('qbvan.hau.94@gmail.com');// Add a recipient
			// $mail->addAddress('ellen@example.com');// Name is optional
			// $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('cc@example.com');
			// $mail->addBCC('bcc@example.com');

			//Attachments
			$mail->addAttachment('/var/tmp/file.tar.gz');// Add attachments
			$mail->addAttachment('/tmp/image.jpg', 'new.jpg');// Optional name

			//Content
			$mail->isHTML(true);// Set email format to HTML
			$mail->Subject = 'Mr ' .$ten. ' was making reservation: at: ' .$ngaydatban ;
			$mail->Body    = 'Email : ' . $email . '<br>' . 'Phone number: ' . $sdt . '<br>' .' at: ' . $giodatban .'<br>'. ' with: ' .$songuoi. ' people ' . '<br>' . 'Message: ' .$tinnhan;
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if ($mail->send()) {
				echo 'Message has been sent';
			} else {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}

			} else {
				echo 'dat ban that bai xin moi thu lai';
			} 
	}
}
/* End of file slide.php */
/* Location: ./application/controllers/slide.php */