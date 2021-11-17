<?php

require_once ('./Student.php');
require_once('./pdo.php');

class StudentRepository{

    public static function AddStudent(Student $student){
        $query = GetPDO()->prepare("INSERT INTO students(id, prenom, age) VALUES (?,?,?)");
        $query->execute([
            $student -> id,
            $student -> prenom,
            $student ->age
        ]);
    }


    public static function listStudent(){
        $list = [];

        $requete = GetPDO()->prepare("SELECT * FROM  students");

        $requete->execute();
        $resultats = $requete->fetchAll();
        foreach ($resultats as $resultat) {

            $student = new Student ($resultat['id'], $resultat['prenom'] ,$resultat['age']);
            $list[] = $student;


        }
        return $list;

    } 

    public static function deleteStudent( $id){
        $query = GetPDO()->prepare("DELETE FROM students WHERE id = :id");
        $query->execute([
            'id' => $id
            
        ]);
    }
}