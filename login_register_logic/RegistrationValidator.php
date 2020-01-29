<?php

require_once "../database.php";
class RegistrationValidator{
    // klasa koja validira input korisnika sa forme za registraciju
    public $errors = [];
    public $name,$surname,$username,$email,$password_1,$password_2,$active;
    
    
    public function validate($db,$input){
        $isValid = true;
        $this->name = isset($input["name"]) ? $input["name"] : null;
        $this->surname = isset($input["surname"]) ? $input["surname"] : null;
        $this->username = isset($input["username"]) ? $input["username"] : null;
        $this->email = isset($input["email"]) ? $input["email"] : null;
        $this->password_1 = isset($input["password_1"]) ? $input["password_1"] : null;
        $this->password_2 = isset($input["password_2"]) ? $input["password_2"] : null;
        $this->active = 1;

        if(!is_null($this->name)){
            if(strlen($this->name) < 3){
                $isValid = false;
                $this->errors['name'][] = "Field name must contain at least 3 charachters!";
            }
        }
        if(!is_null($this->surname)){
            if(strlen($this->surname) < 3){
                $isValid = false;
                $this->errors['surname'][] = "Field name must contain at least 3 charachters!";
            }
        }
        if(!is_null($this->username)){
            $sql = "SELECT * FROM users WHERE username='{$this->username}'";
            $result = $db->query($sql);
            $cnt = mysqli_num_rows($result);
            if($cnt > 0){
                $isValid = false;
                $this->errors['username'][] = "This username is already in use!";
            }
            if(strlen($this->username) < 8){
                $isValid = false;
                $this->errors['username'][] = "Field username must containt at least 8 charachters!";
            }
        }
        if(!is_null($this->email)){
            $sql = "SELECT * FROM users WHERE email='{$this->email}'";
            $result = $db->query($sql);
            $cnt = mysqli_num_rows($result);
            if($cnt > 0){
                $isValid = false;
                $this->errors['email'][] = "This email is already in use!";
            }
        }
        if(!is_null($this->password_1)){
            if(strlen($this->password_1) < 8){
                $isValid = false;
                $this->errors['password_1'][] = "Field password must contain at least 8 charachters!";
            }
        }
        if(!is_null($this->password_2)){
            if($this->password_1 !== $this->password_2){
                $isValid = false;
                $this->errors['password_2'][] = "Password do not match!";
            }
        }
        return $isValid;
    }
}