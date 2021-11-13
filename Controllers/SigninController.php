<?php
require_once __DIR__ . "/../Models/SigninModel.php";

class SigninController extends BaseController
{
    private $signinDtb = NULL;
    public function __construct()
    {
        $this->signinDtb = new SigninModel;
    }
    public function index()
    {
        $this->view('Views/Signin.php');
    }
    public function handle()
    {
        if (isset($_POST['signinsubmit'])) {
            $email = $_POST['email'];
            $mk = $_POST['password'];
            $user = $this->signinDtb->findUser($email);
            $user_arr = $user->fetch_row();
            $pass = $user_arr[3];
            $display = $user_arr[1];
            $phone = $user_arr[4];
            $id = $user_arr[0];
            if ($user->num_rows && $pass == $mk) {
                setcookie("sf-useronlineid", $id, time() + (86400 * 7), "/");
                setcookie("sf-useronlinename", $display, time() + (86400 * 7), "/");
                setcookie("sf-useronlinephone", $phone, time() + (86400 * 7), "/");
                header("location: index.php");
            } else {
                $this->view('Views/SigninErr.php');
            }
        }
    }
}
