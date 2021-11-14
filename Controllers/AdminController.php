<?php
require_once __DIR__ . "/../Models/AdminModel.php";

class AdminController extends BaseController
{
    private $adminDtb = NULL;
    public function __construct()
    {
        $this->adminDtb = new AdminModel;
    }
    public function index()
    {
        $dbResult = $this->adminDtb->selectAllCustomer();
        if ($dbResult->num_rows) {
            while ($row = $dbResult->fetch_array()) {
                $id_khach_hang[] = $row['id_khach_hang'];
                $ho_ten[] = $row['ho_ten'];
                $email[] = $row['email'];
                $sdt[] = $row['sdt'];
            }
        }
        $this->view('Views/Admin/Khachhang.php', ['id_khach_hang' => $id_khach_hang, 'ho_ten' => $ho_ten, 'email' => $email, 'sdt' => $sdt]);
    }
    public function Monan()
    {
        $dbResult = $this->adminDtb->selectAllFood();
        if ($dbResult->num_rows) {
            while ($abc = $dbResult->fetch_array()) {
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
        $this->view('Views/Admin/Monan.php', ['id_mon_an' => $id_mon_an, 'mon_an' => $mon_an, 'mo_ta' => $mo_ta, 'gia' => $gia, 'link_anh' => $link_anh, 'ten_loai' => $ten_loai, 'noi_bat' => $noi_bat, 'con_hang' => $con_hang]);
    }
    public function Donhang()
    {
        $dbResult = $this->adminDtb->selectAllOrder();
        if ($dbResult->num_rows) {
            while ($row = $dbResult->fetch_array()) {
                $id_don_hang[] = $row['id_don_hang'];
                $id_khach_hang[] = $row['id_khach_hang'];
                $ngay_dat_hang[] = $row['ngay_dat_hang'];
                $dia_chi_nhan_hang[] = $row['dia_chi_nhan_hang'];
                $ten_nguoi_nhan[] = $row['ten_nguoi_nhan'];
                $sdt_nguoi_nhan[] = $row['sdt_nguoi_nhan'];
            }
        }
        $this->view('Views/Admin/Donhang.php', ['id_don_hang' => $id_don_hang, 'id_khach_hang' => $id_khach_hang, 'ngay_dat_hang' => $ngay_dat_hang, 'dia_chi_nhan_hang' => $dia_chi_nhan_hang, 'ten_nguoi_nhan' => $ten_nguoi_nhan, 'sdt_nguoi_nhan' => $sdt_nguoi_nhan]);
    }
    public function detail($id)
    {
        $dbResult = $this->adminDtb->selectAllDetailById($id);
        if ($dbResult->num_rows) {
            $tongtien = [];
            while ($row = $dbResult->fetch_array()) {
                $id_mon_an[] = $row['id_mon_an'];
                $so_luong[] = $row['so_luong'];
                $giatien[] = $row['giatien'];
                $tongtien[] = $row['so_luong']*$row['giatien'].".000 ₫";
            }
        }
        $this->view('Views/Admin/Chitietonhang.php', ['id' => $id,'id_mon_an' => $id_mon_an,'so_luong' => $so_luong,'giatien' => $giatien,'tongtien' => $tongtien]);
    }
}
