<?php
function evenNumber($oneNum, $twoNum) {
    $randNum = rand($oneNum, $twoNum);
    if(($randNum % 2) == 0){
        return $randNum;
    }
}

function oddNumber($oneNum, $twoNum) {
    $randNum = rand($oneNum, $twoNum);
    if(($randNum % 2) == 0){
        $evNum = 'ошибка';
    }else{
        return $randNum;
    }
}

$minNum = 1;
$maxNum = 20;
$evenNum = evenNumber($minNum, $maxNum);
$oddNum = oddNumber($minNum, $maxNum);
echo $oddNum.'<br>';
echo $evenNum;

?>
