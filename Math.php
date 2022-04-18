<?php
function evenNumber($oneNum, $twoNum) {
    do{
        $randNum = rand($oneNum, $twoNum);
    }
    while(($randNum % 2) == 0);
    return $randNum;
}

function oddNumber($oneNum, $twoNum) {
    do{
        $randNum = rand($oneNum, $twoNum);
    }
    while(($randNum % 2) == 1);
    return $randNum;
}

$minNum = 1;
$maxNum = 20;
$evenNum = evenNumber($minNum, $maxNum);
$oddNum = oddNumber($minNum, $maxNum);
echo $evenNum.'<br>';
echo $oddNum;

?>
