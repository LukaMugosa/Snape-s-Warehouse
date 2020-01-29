<?php

require_once "../database.php";
require_once "Ingredient.php";

class IngredientRepository{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getAllIngredients($rec_id,$ingred_id){
        $sql = "SELECT * FROM rec_ingred WHERE recipe_id=$rec_id AND ingredient_id=$ingred_id" ;
        $result = $this->db->query($sql);
        $ingredients = [];
        while($row = $result->fetch_assoc()){
            $ingredients[] = new Ingredient(
                intval($row['id']),
                $row['name'],
                $row['picture'],
                $row['description'],
                $row['quantity']
            );
        }
        return $ingredients;
    }

}
