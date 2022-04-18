<?php
function numbers($oneNum, $twoNum) {
    $randNum = rand($oneNum, $twoNum);

    if(($randNum % 2) == 0){
        return $randNum;
    }
}

function numbersTwo($oneNum, $twoNum) {
    $randNum = rand($oneNum, $twoNum);
    if(($randNum % 2) == 0){
    }else{
        return $randNum;
    }
}

$oneNum = 1;
$twoNum = 20;
echo numbers($oneNum, $twoNum).'<br>';
echo numbersTwo($oneNum, $twoNum);
?>