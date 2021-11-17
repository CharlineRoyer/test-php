<?php
require_once("pdo.php");
require_once("Student.php");
require_once 'repository/StudentRepository.php';
// $student = new Student('bidule','24');


// echo "coucou";
$page = file_get_contents("page.html");
// $page = str_replace('$prenom', $student->prenom, $page);
// $page = str_replace('$age', $student->age, $page);
echo $page;

// ;


$resultats = StudentRepository::listStudent();

foreach($resultats as $resultat){
    echo "prenom : ";
    echo $resultat -> prenom;
    echo " - age : ";
    echo $resultat -> age;
    echo " ans <a href='delete.php?id=$resultat->id'>x</a> ";
}




// var_dump($resultats);


