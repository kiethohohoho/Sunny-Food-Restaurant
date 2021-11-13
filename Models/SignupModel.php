<?php
class SignupModel extends DBconfig
{
    private $conn = NULL;
    private $result = NULL;
    function __construct()
    {
        $this->conn = $this->connect();
    }
    public function insertCustomer($id, $fullname, $email, $password, $phone, $adress)
    {
        $sql = "INSERT INTO `khach_hang`(`id_khach_hang`,`ho_ten`, `email`, `mat_khau`, `sdt`, `dia_chi`) VALUES ('$id','$fullname','$email','$password','$phone','$adress')";
        $this->result = $this->conn->query($sql);
        return $this->result;
    }
}
