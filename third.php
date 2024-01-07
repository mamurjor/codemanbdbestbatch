<?php


$person_name = "rowza";
$person_cell = "01746686868";
$person_email = "codemanbd@gmail.com";
$person_course = "php";
$person_leave = "Dhaka";
$person_home = "khulna-sonadanga-ra";

echo 1 + 1  // expressoin 


// echo $person_cell;

// echo "Person Cell $person_cell";
// local 
// global 
// static 

function getPersonInfo(){

    // global $person_name;
    //  echo $person_name;

   echo  $GLOBALS['person_cell'];

}

// echo $person_local;
getPersonInfo();









?>