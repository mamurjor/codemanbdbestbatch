<?php
function mysalary(){
    //echo "kajbaj korchi";
   static $salary = 1;

    echo "</br>".$salary;

    $salary+=1;
}

mysalary();

mysalary();

mysalary();

