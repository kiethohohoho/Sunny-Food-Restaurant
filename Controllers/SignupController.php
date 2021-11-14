<?php
require_once __DIR__ . "/../Models/SignupModel.php";
require_once __DIR__ . "/../src/PHPMailer.php";
require_once __DIR__ . "/../src/SMTP.php";
require_once __DIR__ . "/../src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SignupController extends BaseController
{
    private $signupDtb = NULL;
    private $status = NULL;

    public function __construct()
    {
        $this->signupDtb = new SignupModel;
    }
    public function index()
    {
        $this->view('Views/Signup.php');
    }
    public function handle()
    {
        if (isset($_POST['signupsubmit'])) {
            $fu = $_POST['fullname'];
            $em = $_POST['email'];
            $pa = $_POST['password'];
            $ph = $_POST['phonenumber'];
            $id = substr($em, 0, strrpos($em, '@'));
            setcookie("fu", $fu, time() + (300), "/");
            setcookie("em", $em, time() + (300), "/");
            setcookie("pa", $pa, time() + (300), "/");
            setcookie("ph", $ph, time() + (300), "/");
            setcookie("id", $id, time() + (300), "/");

            //gửi email
            $maxacnhan = rand(11111, 99999);
            setcookie("maxacnhan", $maxacnhan, time() + (300), "/");
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls";
            $mail->Port = "587";
            $mail->Username = "sunnyfoodvietnam@gmail.com";
            $mail->Password = "sunnyfoodvietnam123";
            $mail->CharSet = "UTF-8";
            $mail->Subject = "Xác minh tài khoản Sunny Food";
            $mail->setFrom('sunnyfoodvietnam123@gmail.com');
            $mail->isHTML(true);
            $mail->Body = "<h1>Đây là mã xác nhận tài khoản Sunny Food của bạn: $maxacnhan</h1>";
            $mail->addAddress($em);
            $emailStatus = $mail->send();
            if ($emailStatus) {
                $this->view('Views/XacNhanEmail.php');
                $mail->smtpClose();
            } else {
                $this->view('Views/SignupErr.php');
                $mail->smtpClose();
            }
        }
        if (isset($_POST['OTP-submit'])) {
            if ($_POST['OTP'] === $_COOKIE['maxacnhan']) {
                $md5pass = md5($_COOKIE['pa']);
                $this->status = $this->signupDtb->insertCustomer($_COOKIE['id'], $_COOKIE['fu'], $_COOKIE['em'], $md5pass, $_COOKIE['ph'], $_COOKIE['ad']);
                if ($this->status) {
                    echo " 
                    <script>
                        alert('dang ki thanh cong')
                    </script> ";
                    header("location: index.php?controller=signin");
                } else {
                    echo "Đăng Ký Tài Khoản Thất Bại !!!";
                }
            }
        }
    }
}
