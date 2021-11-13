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

        $this->payDtb->insertOrder($iddonhang, $idkhachhang, $ngaydathang);

        $donhang = $_COOKIE;
        $i = 0;
        foreach ($donhang as $key => $val) {
            $arr[$i] = $key;
            $i++;
        }
        $count = substr(max($arr), 7);

        for ($i = 1; $i <= $count; $i++) {
            $this->payDtb->insertDetailOrder($_COOKIE["id$i"], $_COOKIE["soluong$i"], $_COOKIE["price$i"], $iddonhang);
        }

        
        header("location: index.php?controller=pay");
        // header("location: index.php?controller=allorder");
    }
}
