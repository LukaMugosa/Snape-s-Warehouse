<?php

require_once "../database.php";
require_once "Recipe.php";
class RecipesRepository{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getAllRecipes(){
        $sql = "SELECT * FROM recipes";
        $result = $this->db->query($sql);

        $recipes = [];

        while($row = $result->fetch_assoc()){
            $recipes[] = new Recipe(
                $row['id'],
                $row['recipe_name'],
                $row['instructions'],
            );
        }
        return $recipes;
    }
    public function find($id){
        $sql = "SELECT * FROM recipes WHERE id={$id}";
        $result = $this->db->query($sql);

        if($result === FALSE)
            die($this->db->error);
        
        $row = $result->fetch_assoc();
        if(is_null($row))
            return null;

        return new Recipe(
            intval($row['id']),
            $row['recipe_name'],
            $row['instructions']
        );
    }
}