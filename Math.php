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

function massiveRand($Num) {
    $randArr = [];
    for ($i = 0; $i < $Num; $i++) {
        $randArr[$i] = recursionEven(2,80);
    }
    return $randArr;
}

function deletedArray(int $a, int $b, array $arr){

    $arr1 = [];
    $length = count($arr);
    for($i = 0; $i < $length; $i++) {
        if($b > $length) {
            echo "Число вышло за массив";
            break;
        }
        if($i < $a || $i > $b){
            $arr1[] = $arr[$i];
        }
    }
    return $arr1;
}

function arrSub($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result -= $arr[$i];
    }return $result;
}

$a = 3;
$b = 6;
$numOne = 2;
$numTwo = 80;
$oddNum = recursionOdd($numOne,$numTwo);
$evenNum = recursionEven($numOne,$numTwo);
$mass = massiveRand(10);
$deletedArr = deletedArray($a, $b, $mass);
echo $oddNum.'<br>';
echo $evenNum.'<br>';
print_r($deletedArr);
print_r(arrSub($deletedArr));
