<?php

class Student {
    public $prenom;
    public $age;

    public function __construct($prenom, $age){
        $this->prenom = $prenom;
        $this->age = $age;
    }

}