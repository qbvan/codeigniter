<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}
require ('mail/PHPmailer.php');
class Sendmail extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->load->view('sendmail_view');
	}
	public function do_send() {
		$ten       = $this->input->post('ten');
		$nguoinhan = $this->input->post('nguoinhan');
		$noidung   = $this->input->post('noidung');

		//Load composer's autoloader
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
		$mail->setFrom('qbvan@emily.jp', 'Emily Blog Admin');
		$mail->addAddress($nguoinhan, 'qbvan');// Add a recipient
		// $mail->addAddress('ellen@example.com');// Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		//Attachments
		$mail->addAttachment('/var/tmp/file.tar.gz');// Add attachments
		$mail->addAttachment('/tmp/image.jpg', 'new.jpg');// Optional name

		//Content
		$mail->isHTML(true);// Set email format to HTML
		$mail->Subject = $ten;
		$mail->Body    = $noidung;
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if($ten =='' || $nguoinhan == '' || $nodung == '' ) {
			return false;
		} else {
				if ($mail->send()) {
				echo 'Message has been sent';
			} else {
				echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
		}
		
	}
}
/* End of file Sendmail.php */
/* Location: ./application/controllers/Sendmail.php */