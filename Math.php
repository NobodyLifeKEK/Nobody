<?php

function  recursionOdd($numOne, $numTwo){
    $randNum = rand($numOne,$numTwo);
    if (($randNum % 2) != 0){
        echo $randNum;
    }
    else(recursionOdd ($numOne,$numTwo));

}

function  recursionEven($numOne,$numTwo){
    $randNum = rand($numOne,$numTwo);
    if (($randNum % 2) == 0){
        echo $randNum;
    }
    else(recursionEven ($numOne,$numTwo));

}

$numOne = 0;
$numTwo = 20;
echo recursionOdd($numOne,$numTwo).'<br>';
echo recursionEven($numOne,$numTwo);
?>
