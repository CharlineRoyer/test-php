<?php

require_once ('./Student.php');
require_once('./pdo.php');

class StudentRepository{
    
    public static function AddStudent(Student $student){
        $query = GetPDO()->prepare("INSERT INTO students(prenom, age) VALUES (?,?)");
        $query->execute([
            $student -> prenom,
            $student ->age
        ]);
    }


    public static function listStudent(){
        $list = [];

        $requete = GetPDO()->prepare("SELECT prenom, age FROM  students");

        $requete->execute();
        $resultats = $requete->fetchAll();
        foreach ($resultats as $resultat) {

            $student = new Student ($resultat['prenom'] ,$resultat['age']);
            $list[] = $student;


        }
        return $list;

    } 
}