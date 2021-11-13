<?php
class MenuModel extends DBconfig
{
    function __construct()
    {
        $this->conn = $this->connect();
    }
    public function findFood($type)
    {
        return $this->getRowsByConditon("mon_an", "ten_loai", $type);
    }
}
