<?php

function  recursionEven($numOne,$numTwo) {
    $randNum = rand($numOne,$numTwo);
    if (($randNum % 2) == 0){
        return $randNum;
    }
    else {
        return recursionEven($numOne,$numTwo);
    }
}

function  recursionOdd($numOne, $numTwo) {
    $randNum = rand($numOne,$numTwo);
    if (($randNum % 2) != 0){
        return $randNum;
    }
    else{
        return recursionOdd($numOne, $numTwo);
    }
}

$numOne = 0;
$numTwo = 20;
$oddNum = recursionOdd($numOne,$numTwo);
$evenNum = recursionEven($numOne,$numTwo);
echo $oddNum.'<br>';
echo $evenNum;
