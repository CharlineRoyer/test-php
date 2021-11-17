<?php

class Student {
    public $id;
    public $prenom;
    public $age;

    public function __construct($id, $prenom, $age){
        $this->id = $id;
        $this->prenom = $prenom;
        $this->age = $age;
    }

}