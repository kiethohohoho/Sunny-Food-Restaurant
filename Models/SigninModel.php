<?php
class SigninModel extends DBconfig
{
    private $conn = NULL;
    function __construct()
    {
        $this->conn = $this->connect();
    }
    public function findUser($email)
    {
        return $this->getRowsByConditon("khach_hang", "email", $email);
    }
}
