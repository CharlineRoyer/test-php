<?php
require_once("pdo.php");
require_once("Student.php");
require_once 'repository/StudentRepository.php';


StudentRepository::deleteStudent($_GET['id']);