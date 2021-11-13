<?php
require_once __DIR__ . "/../Models/OrderModel.php";

class OrderController extends BaseController
{
    private $orderDtb = NULL;
    public function __construct()
    {
        $this->orderDtb = new OrderModel;
    }
    public function index()
    {
        $this->view('Views/order.php');
    }
}