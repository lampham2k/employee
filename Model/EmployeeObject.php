<?php

Class EmployeeObject{

    private $id ;

    private $fullName ;

    private $email ;

    private $phone ;

    private $introduce ;

    public function __construct($row){

        $this->id = $row['id'] ?? '';

        $this->fullName = $row['fullname'] ?? '';

        $this->email = $row['email'] ?? '';
        
        $this->phone = $row['phone'] ?? '';

        $this->introduce = $row['introduce'] ?? '';

        return $row;
    }

    public function getId(){

        return $this->id;

    }

    public function setId($id){

        $this->id = $id;
        
    }

    public function getFullName(){

        return $this->fullName;

    }

    public function setFullName($fullName){

        $this->fullName = $fullName;

    }

    
    public function getEmail(){

        return $this->email;
    }

    public function setEmail($email){

        $this->email = $email;
        
    }

    public function getPhone(){

        return $this->phone;
    }

    public function setPhone($phone){

        $this->phone = $phone;
        
    }

    public function getIntroduce(){

        return $this->introduce;
    }

    public function setIntroduce($introduce){

        $this->introduce = $introduce;
        
    }
}