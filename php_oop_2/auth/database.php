<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $db_name = 'phpoop';
    private $password = '1234';
    public $conn = '';

    public function __construct(){
        $this->conn = null;

        try{
            $this->conn = new mysqli($this->host,$this->username,$this->password,$this->db_name);
        }
        catch(Exception $e){
            echo "Connection Error ". $e;
        }
    }
}