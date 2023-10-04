<?php

require 'model/Connect.php';
require 'model/EmployeeObject.php';

class Employee {

    private string $table = 'employee';

    public function all(){

        $sql = "select * from $this->table order by id desc limit 3";

        $result = (new Connect())->resultSql($sql);

        $arr = [];

        foreach($result as $row){

            $Object = new EmployeeObject($row);

            $arr[] = $Object;
        }

        return $arr;
    }

    public function create($params){

        $object = new EmployeeObject($params);

        $sql = "insert into $this->table(fullname, email, phone, introduce)
        values('{$object->getFullName()}', '{$object->getEmail()}', '{$object->getPhone()}', '{$object->getIntroduce()}') ";
        
        (new Connect())->sql($sql);
    }

    public function edit($id) :object{

        $sql = "select * from $this->table where id = '$id' "; 

        $result = (new Connect())->resultSql($sql);

        $each = mysqli_fetch_array($result);

        return new EmployeeObject($each);
    }

    public function update($params){
        
        $object = new EmployeeObject($params);
        
        $sql = " update $this->table set
        fullname = '{$object->getFullName()}', 
        email = '{$object->getEmail()}', 
        phone = '{$object->getPhone()}', 
        introduce = '{$object->getIntroduce()}' 
        where 
        id = {$object->getId()} ";
        
        (new Connect())->sql($sql);
    }
}