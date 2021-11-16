<?php

require_once("pdo.php");
require_once("Student.php");

$student = new Student("charline", 27);

$query = $pdo -> prepare("INSERT INTO students(prenom, age) VALUES(?, ?)");
$query-> execute([

 $student->prenom,
 $student->age


]);
