<?php

function  recursionOdd($numOne, $numTwo){
    $randNum = rand($numOne,$numTwo);
    if (($randNum % 2) != 0){
        $randNum;
    }
    else(recursionOdd ($numOne,$numTwo));
    return($randNum);
}

function  recursionEven($numOne,$numTwo){
    $randNum = rand($numOne,$numTwo);
    if (($randNum % 2) == 0){
        $randNum;
    }
    else(recursionEven ($numOne,$numTwo));
   return($randNum);
}

$numOne = 0;
$numTwo = 20;
echo recursionOdd($numOne,$numTwo).'<br>';
echo recursionEven($numOne,$numTwo);
?>
