<?php
require './Controllers/BaseController.php';
require './Models/DBconfig.php';

$controllerName = ucfirst(strtolower($_REQUEST['controller'] ?? "Home")) . "Controller";
$actionName = $_REQUEST['action'] ?? "index";
$paramName = $_REQUEST['param'] ?? NULL;
require "./Controllers/{$controllerName}.php";

$controller = new $controllerName;
$controller->{$actionName}($paramName);

$db = new DBconfig;
$db->connect();
