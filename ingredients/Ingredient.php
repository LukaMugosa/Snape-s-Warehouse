<?php

class Ingredient{

    public $id,$name,$picture,$description,$quantity;

    public function __construct($id,$name,$picture,$description,$quantity){
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture;
        $this->description = $description;
        $this->quantity = $quantity;
    }

}

