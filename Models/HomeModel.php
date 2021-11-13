<?php
class HomeModel extends DBconfig
{
    function __construct()
    {
        $this->conn = $this->connect();
    }
    public function findSpecical()
    {
        return $this->getRowsByConditon("mon_an", "noi_bat", 1);
    }
}
