<?php

require_once "../database.php";
//klasa za rad sa bazom

class UserRepository{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }
    //upisuje korisnika u bazu
    public function add($user){
        $sql = "INSERT INTO users "
        ."VALUES(NULL,'{$user->username}','{$user->first_name}','{$user->last_name}','{$user->email}',md5('{$user->password}'))";
        $result = $this->db->query($sql);
        if($result === false)
            die($this->db->error);
       $user->id = $this->db->insert_id;
    }
    //pretrazuje po id-u korisnika





    //izlistava postojece korisnike
    public function getAllUsers(){
        $sql = "SELECT * FROM users";
        $result = $this->db->query($sql);

        $users = [];
        while($row = $result->fetch_assoc()){
            $users[] = new User(
                intval($row['id']),
                $row['username'],
                $row['first_name'],
                $row['last_name'],
                $row['email'],
                $row['password']
            );
        }
        return $users;
    }



}