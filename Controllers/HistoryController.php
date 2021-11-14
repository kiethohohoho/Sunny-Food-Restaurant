<?php
require_once __DIR__ . "/../Models/HistoryModel.php";

class HistoryController extends BaseController
{
    private $historyDtb = NULL;
    public function __construct()
    {
        $this->historyDtb = new HistoryModel;
    }
    public function index()
    {
        $iduser = $_COOKIE['sf-useronlineid'];
        $dbresult = $this->historyDtb->selectAllOrderById($iduser);
        $count = 1;
        if ($dbresult->num_rows) {
            while ($row = $dbresult->fetch_array()) {
                $id_don_hang[] = $row['id_don_hang'];
                $ngay_dat_hang[] = $row['ngay_dat_hang'];
                $dia_chi_nhan_hang[] = $row['dia_chi_nhan_hang'];
                $ten_nguoi_nhan[] = $row['ten_nguoi_nhan'];

                $dbResult2 = $this->historyDtb->selectAllDetailById($row['id_don_hang']);
                if ($dbResult2->num_rows) {
                    while ($row2 = $dbResult2->fetch_array()) {
                        $id_mon_an[] = $row2['id_mon_an'];
                        $so_luong[] = $row2['so_luong'];
                        $giatien[] = $row2['giatien'];
                        $count++;

                        // $tongtien[] = $row2['so_luong'] * $row2['giatien'] . ".000 ₫";

                        // echo $row2['id_mon_an'];
                        // $dbResult3 = $this->historyDtb->findFoodById($row2['id_mon_an']);
                        // if ($dbResult3->num_rows) {
                        //     while ($row3 = $dbResult3->fetch_array()) {
                        //         $ten_mon_an = $row3['mon_an'];
                        //     }
                        // }
                    }
                }
            }
            $this->view('Views/History.php', ['id_don_hang' => $id_don_hang, 'ngay_dat_hang' => $ngay_dat_hang, 'dia_chi_nhan_hang' => $dia_chi_nhan_hang, 'ten_nguoi_nhan' => $ten_nguoi_nhan, 'id_mon_an' => $id_mon_an, 'so_luong' => $so_luong, 'giatien' => $giatien]);
            return;
        }


        $this->view('Views/History.php');
    }
}
