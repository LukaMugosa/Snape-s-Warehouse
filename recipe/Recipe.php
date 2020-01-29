<?php

class Recipe{

    public $id,$recipe_name,$instructions;

    public function __construct($id,$recipe_name,$instructions){
        $this->id = $id;
        $this->recipe_name = $recipe_name;
        $this->instructions = $instructions;
    }
}
