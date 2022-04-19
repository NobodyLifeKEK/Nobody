<?php

function  recursionOdd($num){

    if (($num % 2) != 0){
        echo $num;
    }
    else(recursionOdd ($num +1));

}

function  recursionEven($num){

    if (($num % 2) == 0){
        echo $num;
    }
    else(recursionEven ($num +1));

}

$randNum = rand(0,20);
print_r(recursionOdd($randNum));
print_r(recursionEven($randNum))
?>
