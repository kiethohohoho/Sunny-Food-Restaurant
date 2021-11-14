<?php
class AdminModel extends DBconfig
{
    function __construct()
    {
        $this->conn = $this->connect();
    }
    
}
