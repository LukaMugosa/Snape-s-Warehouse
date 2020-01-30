<?php

require_once "../database.php";

class RecipeIngredientRepository{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function find($id){
        $sql = "SELECT ingredient_id FROM rec_ingred WHERE recipe_id=$id";
        $result = $this->db->query($sql);
        $array = $result->fetch_array();

        return $array;
    }

}