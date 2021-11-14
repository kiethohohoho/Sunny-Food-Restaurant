<?php
class HistoryModel extends DBconfig
{
    function __construct()
    {
        $this->conn = $this->connect();
    }
    public function findFoodById($id)
    {
        return $this->getRowsByConditon("mon_an", "id_mon_an ", $id);
    }
}