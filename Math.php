<?php

function  recursionEven($numOne,$numTwo) {
    $randNum = rand($numOne,$numTwo);
    if (($randNum % 2) == 0){
    }
    else {
        recursionEven($numOne,$numTwo);
    }
    return ($randNum);
}

function  recursionOdd($numOne, $numTwo) {
    $randNum = rand($numOne,$numTwo);
    if (($randNum % 2) != 0){
    }
    else{
        recursionOdd($numOne, $numTwo);
    }
    return ($randNum);
}

$numOne = 0;
$numTwo = 20;
$oddNum = recursionOdd($numOne,$numTwo);
$evenNum = recursionEven($numOne,$numTwo);
echo $oddNum.'<br>';
echo $evenNum;
