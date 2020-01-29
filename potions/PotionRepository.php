<?php 

require_once "../database.php";
require_once "Potion.php";
class PotionRepository{

    private $db;

    public function __construct($db){
        $this->db = $db; 
    }

    public function add($potion){
        $sql = "INSERT INTO potions "
        ."VALUES(NULL,'{$potion->name}','{$potion->picture}','{$potion->description}','{$potion->recipe_id}','{$potion->quantity}')";
        $result = $this->db->query($sql);
        if($result === false)
            die($this->db->error);
       $potion->id = $this->db->insert_id;
    }


    public function getAllPotion(){
        $sql = "SELECT * FROM potions";
        $result = $this->db->query($sql);

        $potions = [];
        while($row = $result->fetch_assoc()){
            $potions[] = new Potion(
                intval($row['id']),
                $row['name'],
                $row['picture'],
                $row['description'],
                $row['recipe_id'],
                $row['category'],
                $row['quantity']
            );
        }
        return $potions;
    }
}