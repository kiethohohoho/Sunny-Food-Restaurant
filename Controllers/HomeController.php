<?php
require_once __DIR__ . "/../Models/HomeModel.php";

class HomeController extends BaseController
{
    private $homeDtb = NULL;
    public function __construct()
    {
        $this->homeDtb = new HomeModel;
    }
    public function index()
    {
        $foodObj = $this->homeDtb->findSpecical();
        if ($foodObj->num_rows) {
            while ($abc = $foodObj->fetch_array()) {
                $id_mon_an[] = $abc['id_mon_an'];
                $mon_an[] = $abc['mon_an'];
                $mo_ta[] = $abc['mo_ta'];
                $gia[] = $abc['gia'];
                $link_anh[] = $abc['link_anh'];
                $ten_loai[] = $abc['ten_loai'];
                $noi_bat[] = $abc['noi_bat'];
                $con_hang[] = $abc['con_hang'];
            }
        }
        $this->view('Views/Home.php', ['id_mon_an' => $id_mon_an, 'mon_an' => $mon_an, 'mo_ta' => $mo_ta, 'gia' => $gia, 'link_anh' => $link_anh, 'ten_loai' => $ten_loai, 'noi_bat' => $noi_bat, 'con_hang' => $con_hang]);
    }
}