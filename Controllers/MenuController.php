<?php
require_once __DIR__ . "/../Models/MenuModel.php";

class MenuController extends BaseController
{
    private $menuDtb = NULL;
    public function __construct()
    {
        $this->menuDtb = new MenuModel;
    }
    public function index()
    {
        $foodObj = $this->menuDtb->findFood('sang');
        if ($foodObj->num_rows) {
            while ($abc = $foodObj->fetch_array()) {
                $id_mon_an_sang[] = $abc['id_mon_an'];
                $mon_an_sang[] = $abc['mon_an'];
                $mo_ta_sang[] = $abc['mo_ta'];
                $gia_sang[] = $abc['gia'];
                $link_anh_sang[] = $abc['link_anh'];
                $ten_loai_sang[] = $abc['ten_loai'];
                $noi_bat_sang[] = $abc['noi_bat'];
                $con_hang_sang[] = $abc['con_hang'];
            }
        }
        $foodObj = $this->menuDtb->findFood('trua');
        if ($foodObj->num_rows) {
            while ($abc = $foodObj->fetch_array()) {
                $id_mon_an_trua[] = $abc['id_mon_an'];
                $mon_an_trua[] = $abc['mon_an'];
                $mo_ta_trua[] = $abc['mo_ta'];
                $gia_trua[] = $abc['gia'];
                $link_anh_trua[] = $abc['link_anh'];
                $ten_loai_trua[] = $abc['ten_loai'];
                $noi_bat_trua[] = $abc['noi_bat'];
                $con_hang_trua[] = $abc['con_hang'];
            }
        }
        $foodObj = $this->menuDtb->findFood('toi');
        if ($foodObj->num_rows) {
            while ($abc = $foodObj->fetch_array()) {
                $id_mon_an_toi[] = $abc['id_mon_an'];
                $mon_an_toi[] = $abc['mon_an'];
                $mo_ta_toi[] = $abc['mo_ta'];
                $gia_toi[] = $abc['gia'];
                $link_anh_toi[] = $abc['link_anh'];
                $ten_loai_toi[] = $abc['ten_loai'];
                $noi_bat_toi[] = $abc['noi_bat'];
                $con_hang_toi[] = $abc['con_hang'];
            }
        }
        $foodObj = $this->menuDtb->findFood('nuoc-uong');
        if ($foodObj->num_rows) {
            while ($abc = $foodObj->fetch_array()) {
                $id_mon_an_nuoc[] = $abc['id_mon_an'];
                $mon_an_nuoc[] = $abc['mon_an'];
                $mo_ta_nuoc[] = $abc['mo_ta'];
                $gia_nuoc[] = $abc['gia'];
                $link_anh_nuoc[] = $abc['link_anh'];
                $ten_loai_nuoc[] = $abc['ten_loai'];
                $noi_bat_nuoc[] = $abc['noi_bat'];
                $con_hang_nuoc[] = $abc['con_hang'];
            }
        }
        $foodObj = $this->menuDtb->findFood('ruou');
        if ($foodObj->num_rows) {
            while ($abc = $foodObj->fetch_array()) {
                $id_mon_an_ruou[] = $abc['id_mon_an'];
                $mon_an_ruou[] = $abc['mon_an'];
                $mo_ta_ruou[] = $abc['mo_ta'];
                $gia_ruou[] = $abc['gia'];
                $link_anh_ruou[] = $abc['link_anh'];
                $ten_loai_ruou[] = $abc['ten_loai'];
                $noi_bat_ruou[] = $abc['noi_bat'];
                $con_hang_ruou[] = $abc['con_hang'];
            }
        }
        $foodObj = $this->menuDtb->findFood('trang-mieng');
        if ($foodObj->num_rows) {
            while ($abc = $foodObj->fetch_array()) {
                $id_mon_an_trang_mieng[] = $abc['id_mon_an'];
                $mon_an_trang_mieng[] = $abc['mon_an'];
                $mo_ta_trang_mieng[] = $abc['mo_ta'];
                $gia_trang_mieng[] = $abc['gia'];
                $link_anh_trang_mieng[] = $abc['link_anh'];
                $ten_loai_trang_mieng[] = $abc['ten_loai'];
                $noi_bat_trang_mieng[] = $abc['noi_bat'];
                $con_hang_trang_mieng[] = $abc['con_hang'];
            }
        }
        $this->view('Views/Menu.php', [
        'id_mon_an_sang' => $id_mon_an_sang, 'mon_an_sang' => $mon_an_sang, 'mo_ta_sang' => $mo_ta_sang, 'gia_sang' => $gia_sang, 'link_anh_sang' => $link_anh_sang, 'ten_loai_sang' => $ten_loai_sang, 'noi_bat_sang' => $noi_bat_sang, 'con_hang_sang' => $con_hang_sang, 

        'id_mon_an_trua' => $id_mon_an_trua, 'mon_an_trua' => $mon_an_trua, 'mo_ta_trua' => $mo_ta_trua, 'gia_trua' => $gia_trua, 'link_anh_trua' => $link_anh_trua, 'ten_loai_trua' => $ten_loai_trua, 'noi_bat_trua' => $noi_bat_trua, 'con_hang_trua' => $con_hang_trua,

        'id_mon_an_toi' => $id_mon_an_toi, 'mon_an_toi' => $mon_an_toi, 'mo_ta_toi' => $mo_ta_toi, 'gia_toi' => $gia_toi, 'link_anh_toi' => $link_anh_toi, 'ten_loai_toi' => $ten_loai_toi, 'noi_bat_toi' => $noi_bat_toi, 'con_hang_toi' => $con_hang_toi,

        'id_mon_an_nuoc' => $id_mon_an_nuoc, 'mon_an_nuoc' => $mon_an_nuoc, 'mo_ta_nuoc' => $mo_ta_nuoc, 'gia_nuoc' => $gia_nuoc, 'link_anh_nuoc' => $link_anh_nuoc, 'ten_loai_nuoc' => $ten_loai_nuoc, 'noi_bat_nuoc' => $noi_bat_nuoc, 'con_hang_nuoc' => $con_hang_nuoc,

        'id_mon_an_ruou' => $id_mon_an_ruou, 'mon_an_ruou' => $mon_an_ruou, 'mo_ta_ruou' => $mo_ta_ruou, 'gia_ruou' => $gia_ruou, 'link_anh_ruou' => $link_anh_ruou, 'ten_loai_ruou' => $ten_loai_ruou, 'noi_bat_ruou' => $noi_bat_ruou, 'con_hang_ruou' => $con_hang_ruou,

        'id_mon_an_trang_mieng' => $id_mon_an_trang_mieng, 'mon_an_trang_mieng' => $mon_an_trang_mieng, 'mo_ta_trang_mieng' => $mo_ta_trang_mieng, 'gia_trang_mieng' => $gia_trang_mieng, 'link_anh_trang_mieng' => $link_anh_trang_mieng, 'ten_loai_trang_mieng' => $ten_loai_trang_mieng, 'noi_bat_trang_mieng' => $noi_bat_trang_mieng, 'con_hang_trang_mieng' => $con_hang_trang_mieng
        ]);
    }
}
