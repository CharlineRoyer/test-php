<?php
require_once 'Student.php';
require_once 'repository/StudentRepository.php';
require_once 'pdo.php';
// $student = new Student($_POST['name'], $_POST['age']);




// if(file_exists("StudentList.json")){
//     echo "coucou";
//     $decode = json_decode(file_get_contents("StudentList.json"));
//     $decode [] = $student;
//     $json2 = json_encode($decode);
//     $bytes = file_put_contents("StudentList.json", $json2);

    
  
// }else{
    
//     $json = json_encode([$student]);

//     $bytes = file_put_contents("StudentList.json", $json);
   
// }

// var_dump($list) ;
var_dump($_POST);

$student = new Student ($_POST['name'], $_POST['age']);
StudentRepository::AddStudent($student);