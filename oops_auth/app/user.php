<?php

include_once "database.php";

class User extends Database{
    private $table_name = "users";
    public $id;
    public $name;
    public $email;
    public $password;


    public function register(){
        $alreadyRegistered = "SELECT * FROM ".$this->table_name. " WHERE email=?";
        $astmt = $this->conn->prepare($alreadyRegistered);

        $astmt->bind_param("s",$this->email);

        $astmt->execute();

        $result = $astmt->get_result();

        if($result->num_rows > 0){
            echo "User already exists";
            $astmt->close();
        }
        else{
            $query = "INSERT INTO ".$this->table_name. " (name,email,password) VALUES(?,?,?)";

            $stmt = $this->conn->prepare($query);
            $this->password = password_hash($this->password,PASSWORD_DEFAULT);
            $stmt->bind_param('sss',$this->name,$this->email,$this->password);

            $stmt->execute();

            $stmt->close();
            
        }

    }
        
    public function login(){
        $query = "SELECT * FROM ". $this->table_name . " WHERE email = ?";
        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("s",$this->email);

         $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if(password_verify($this->password,$row['password'])){
                echo "Login successful";
            }
            else{
                echo "password did not matched";
            }
        }
        else{
            echo "No user found";
        }

        $stmt->close();
    }
}