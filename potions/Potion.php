<?php

class Potion{
    public $id,$name,$picture,$description,$recipe,$category,$quantity;

    public function __construct($id,$name,$picture,$description,$recipe,$category,$quantity){
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture;
        $this->description = $description;
        $this->recipe = $recipe;
        $this->category = $category;
        $this->quantity = $quantity;
    }
}