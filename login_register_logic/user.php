<?php

class User {

    //klasa za konstrukciju korisnika
    public $id,$username,$first_name,$last_name,$email,$password,$active;

    public function __construct($id,$username,$first_name,$last_name,$email,$password,$active){
        $this->id = $id;
        $this->username = $username;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->active = $active;
    }

}