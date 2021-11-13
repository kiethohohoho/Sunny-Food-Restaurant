<?php
class PayModel extends DBconfig
{
    function __construct()
    {
        $this->conn = $this->connect();
    }
}
