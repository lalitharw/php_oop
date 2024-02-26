<?php

include_once "../auth/database.php";

class User extends Database{
    private $table_name = "users";
    public $name = "";
    public $password = "";
    public $email = "";

    public function register(){
        $alreadyUser = "SELECT * FROM ".$this->table_name. " WHERE email=?  ";
        $astmt = $this->conn->prepare($alreadyUser);
        $astmt->bind_param("s",$this->email);
        $astmt->execute();
        $result = $astmt->get_result();
        if($result->num_rows > 0){
            echo "user already exists";
            $astmt->close();
        }
        else{
            $query = "INSERT INTO ".$this->table_name ." (name,password,email) VALUES(?,?,?)";

        $stmt = $this->conn->prepare($query);
        $this->password = password_hash($this->password,PASSWORD_DEFAULT);
        $stmt->bind_param("sss",$this->name,$this->password,$this->email);

        $result = $stmt->execute();

        if($result){
            $_SESSION['registered'] = 'Registered Successfully';
            $stmt->close();
            header("Location: login.php");
        }
        else{
            echo "Something went wrong";
        }
        }
        

        

        
    }

    public function login(){
        $query = "SELECT * FROM ".$this->table_name." WHERE email=?";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s",$this->email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if(password_verify($this->password,$row['password'])){
                $_SESSION['user_id'] = $row['id'];
                header("Location: ../app/dashboard.php");
            }
            else{
                echo "password is wrong";
            }
        }
        else{
            echo "Not user found";
        }
        $stmt->close();
    }
}