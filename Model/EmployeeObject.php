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

    public function setId($var){

        $this->id = $var;
        
    }

    public function getFullName(){

        return $this->fullName;

    }

    public function setFullName($var){

        $this->fullName = $var;

    }

    
    public function getEmail(){

        return $this->email;
    }

    public function setEmail($var){

        $this->email = $var;
        
    }

    public function getPhone(){

        return $this->phone;
    }

    public function setPhone($var){

        $this->phone = $var;
        
    }

    public function getIntroduce(){

        return $this->introduce;
    }

    public function setIntroduce($var){

        $this->introduce = $var;
        
    }
}