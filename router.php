<?php

require 'controller/Controller.php';
require 'controller/EmployeeController.php';

$action = $_GET['action'] ?? 'index';

switch($action){

    case 'index':

        (new EmployeeController())->index();

        break;

    case 'create':

        (new EmployeeController())->create();

        break;

    case 'store':

        (new EmployeeController())->store();

        break;

    case 'edit':

        (new EmployeeController())->edit();

        break;

    case 'update':

        (new EmployeeController())->update();

        break;

    default:

        echo 'error';  

        break;    
}