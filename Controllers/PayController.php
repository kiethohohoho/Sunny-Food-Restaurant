<?php
require_once __DIR__ . "/../Models/PayModel.php";

class PayController extends BaseController
{
    private $payDtb = NULL;
    public function __construct()
    {
        $this->payDtb = new PayModel;
    }
    public function index()
    {
        if (!isset($_COOKIE['sf-useronlineid'])) {
            header("location: index.php?controller=signin");
            return;
        }
        $this->view('Views/Pay.php');
    }
    public function handle()
    {
        if (!isset($_COOKIE['sf-useronlineid'])) {
            header("location: index.php?controller=signin");
            return;
        }

        $idkhachhang = $_COOKIE['sf-useronlineid'];
        $iddonhang = $idkhachhang . "_dh1";
        $countOder = 0;
        $sqlResult = $this->payDtb->selectOrderByIdCustomer($idkhachhang);
        while ($abc = $sqlResult->fetch_array()) {
            $countOder++;
        }
        if ($countOder) {
            $iddonhang = $idkhachhang . "_dh" . ($countOder + 1);
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngaydathang = date('d/m/Y h:i:s a', time());

        $dcn = $_POST['da'] . ", " . $_POST['xp'] . ", " . $_POST['qh'] . ", " . $_POST['ttp'];
        $this->payDtb->insertOrder($iddonhang, $idkhachhang, $ngaydathang, $dcn, $_POST['hovaten'], $_POST['sdt']);

        $donhang = $_COOKIE;
        $i = 0;
        $arr = [];
        foreach ($donhang as $key => $val) {
            $arr[$i] = $key;
            $i++;
        }
        $count = substr(max($arr), 10);

        for ($i = 1; $i <= $count; $i++) {
            $this->payDtb->insertDetailOrder($_COOKIE["id$i"], $_COOKIE["zzzsoluong$i"], $_COOKIE["price$i"], $iddonhang);
        }

        $sf_id = $_COOKIE['sf-useronlineid'];
        $sf_name = $_COOKIE['sf-useronlinename'];
        $sf_phone = $_COOKIE['sf-useronlinephone'];

        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach ($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time() - 1000);
                setcookie($name, '', time() - 1000, '/');
            }
        }

        setcookie('sf-useronlineid', $sf_id, time() + 86400 * 7, "/");
        setcookie('sf-useronlinename', $sf_name, time() + 86400 * 7, "/");
        setcookie('sf-useronlinephone', $sf_phone, time() + 86400 * 7, "/");


        header("location: index.php?controller=history");
    }
}
