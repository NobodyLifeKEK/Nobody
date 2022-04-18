<?php
function oddNumber($oneNum, $twoNum) {
    do{
        $randNum = rand($oneNum, $twoNum);
    }
    while(($randNum % 2) == 0);
    return $randNum;
}

function evenNumber($oneNum, $twoNum) {
    do{
        $randNum = rand($oneNum, $twoNum);
    }
    while(($randNum % 2) != 0);
    return $randNum;
}

$minNum = 1;
$maxNum = 20;
$oddNum = oddNumber($minNum, $maxNum);
$evenNum = evenNumber($minNum, $maxNum);
echo $oddNum.'<br>';
echo $evenNum;

?>
