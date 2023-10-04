<?php

class Connect {

    private $host = 'db-service:3306';

    private $user = 'root';

    private $password = 'root';

    private $database = 'bao_tri';

    private function cnt(){

        $connect = mysqli_connect($this->host,$this->user,$this->password,$this->database);

        return $connect;
    }

    public function resultSql($sql){

        $connect = (new Connect())->cnt();

        $result = mysqli_query($connect,$sql);

        return $result;
    }

    public function sql($sql){

        $connect = (new Connect())->cnt();

        mysqli_query($connect,$sql);

    }
}