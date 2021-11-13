<?php
use PHPMailer\PHPMailer\PHPMailer;

class EmailController extends BaseController
{
	public function sendEmail($email)
	{
		$maxacnhan = rand(11111, 99999);
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->Host = "smtp.gmail.com";
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls";
		$mail->Port = "587";
		$mail->Username = "sunnyfoodvietnam@gmail.com";
		$mail->Password = "sunnyfoodvietnam123";
		$mail->Subject = "Xác minh tài khoản Sunny Food";
		$mail->setFrom('sunnyfoodvietnam@gmail.com');
		$mail->isHTML(true);
		$mail->Body = "<h1>Đây là xác nhận tài khoản Sunny Food của bạn: $maxacnhan</h1>";
		$mail->addAddress($email);
		if ($mail->send()) {
			echo "Email Sent..!";
		} else {
			echo "Message could not be sent. Mailer Error: $this->mail->ErrorInfo";
		}
		$mail->smtpClose();
	}
	public function index()
    {
        $this->view('Views/Email.php');
    }
}
