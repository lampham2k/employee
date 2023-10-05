<?php

require 'Model/employee.php';

class EmployeeController {

    public function index()
    {

        $employee = (new Employee())->all();
           
        return require './View/Employee/index.php';
        
    }
    
    public function create(){

        return require './View/Employee/create.php';

    }

    public function store(){

        if(!((new Employee())->create($_POST))) {

            header('Location:/demo/index.php?action=create');

            exit();

        }

        header('Location:/demo/index.php');

        exit();
    }

    public function edit()
    {


        $id = $_GET['id'];

        $employeeObject = (new Employee())->edit($id);

        return require 'View/Employee/update.php';
    }

    public function update(){

        if(!((new Employee())->update($_POST))) {

            header('Location:/demo/index.php?action=update');

            exit();

        }

        header('Location:/demo/index.php');

        exit();
    }
}