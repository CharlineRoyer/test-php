<?php


$json = file_get_contents("StudentList.json");
$parsed_json = json_decode($json);
$list [] =$parsed_json; 
$liste2 = [];
$trier = sort($list);
var_dump($trier);
function cmp($a, $b)
{
    
    return strcmp($a->prenom, $b->prenom);
}

usort($list, "cmp");
var_dump ($list);

function binarySearch($argv, $parsed_json)
{
    $min = 0;
    $max = count($parsed_json);
    $milieu = ($min+$max)/2;
    $milieu2 = intval($milieu);
    $tableau = $parsed_json;
    $step = 0;
    $bidule = 0 ;
  

    while($bidule == 0 && $min<$max ){    

       if($argv == $parsed_json[$milieu2]->{'prenom'}){
        $bidule == 1;
        break;
       }else if ($argv < $parsed_json[$milieu2]->{'prenom'}){
        $max = $milieu2 - 1;
        $step ++;
       }else if($argv > $parsed_json[$milieu2]->{'prenom'}){
        $min = $milieu2 +1 ;
        $step++;
       }
        $milieu2 = intval(($min + $max)/2);

    }


    if($argv == $parsed_json[$milieu2]->{'prenom'}){
        $milieu3 = $milieu2+1;
        echo ($parsed_json[$milieu2]->prenom) ;
        echo " ";
        echo ($parsed_json[$milieu2]->age) ;
        echo " ans";
     
    }else{
        echo "Ce nom n'est pas dans le tableau";
    }
   

}

$page = file_get_contents("recherche.html");
echo $page;

binarySearch($_GET["prenom"], $parsed_json);

