<?php
class OrderModel extends DBconfig
{
    function __construct()
    {
        $this->conn = $this->connect();
    }
}
