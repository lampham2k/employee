<?php

require 'model/Connect.php';
require 'model/EmployeeObject.php';

class Employee {

    private string $table = 'employee';

    public function all(){

        try {
            
            $sql = "select * from $this->table order by id desc";
    
            $result = (new Connect())->sql($sql);

            $arr = [];

            if(!$result) return $arr;
    
            foreach($result as $row){
    
                $arr[] = new EmployeeObject($row);
    
            }

            return $arr;

        } catch (\Throwable $th) {

            return [];
        }

    }

    public function create($params)
    {
        try {
            
            $employeeObject = new EmployeeObject($params);
    
            $sql = "insert into $this->table(fullname, email, phone, introduce)
            values('{$employeeObject->getFullName()}', '{$employeeObject->getEmail()}', '{$employeeObject->getPhone()}', '{$employeeObject->getIntroduce()}') ";
            
            return (new Connect())->sql($sql);

        } catch (\Throwable $th) {
            
            return false;
            
        }
    }

    public function edit($id) :object{

        try {
            
            $sql = "select * from $this->table where id = '$id' "; 
    
            $result = (new Connect())->sql($sql);
    
            $employeeObject = mysqli_fetch_array($result);
            
            if(!$employeeObject) return (object)[];;
    
            return new EmployeeObject($employeeObject);

        } catch (\Throwable $th) {
            
            return (object)[];
            
        }

    }

    public function update($params){

        try {
            
            $employeeObject = new EmployeeObject($params);
            
            $sql = " update $this->table set
            fullname = '{$employeeObject->getFullName()}', 
            email = '{$employeeObject->getEmail()}', 
            phone = '{$employeeObject->getPhone()}', 
            introduce = '{$employeeObject->getIntroduce()}' 
            where 
            id = {$employeeObject->getId()} ";
            
            if(!(new Connect())->sql($sql)) return false;

            return true;


        } catch (\Throwable $th) {

            return false;
            
        }
        
    }
}