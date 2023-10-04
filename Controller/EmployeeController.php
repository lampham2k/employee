<?php

class EmployeeController {

    public function index()
    {

        require 'Model/Employee.php';

        $arr = (new Employee())->all();
           
        require './View/Employee/index.php';
        
    }
    
    public function create(){

        require './View/Employee/create.php';

    }

    public function store(){

        require 'Model/Employee.php';

        (new Employee())->create($_POST);
    }

    public function edit(){

        $id = $_GET['id'];

        require 'Model/Employee.php';

        $each = (new Employee())->edit($id);

        require 'View/Employee/update.php';
    }

    public function update(){

        require 'Model/employee.php';

        (new Employee())->update($_POST);

    }

    public function delete(){
        require 'model/employee.php';
        (new Employee())->update($_POST);
    }
}