<pre>
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

function massiveEven($Num) {
    $randArr = [];
    for ($i = 0; $i < $Num; $i++) {
        $randArr[$i] = recursionEven(2,80);
    }
    return $randArr;
}

function massiveOdd($Num) {
    $randArr = [];
    for ($i = 0; $i < $Num; $i++) {
        $randArr[$i] = recursionOdd(81, 159);
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

function allArr($massEv, $massOdd) {
    $newArray = [];
    foreach ($massOdd as $value) {
        $newArray[] = $value;
    }
    foreach ($massEv as $value) {
        $newArray[] = $value;
        $i++;
    }
    return $newArray;
}

function sortArr($allArr)
{
    $arrayCount = count($allArr);

    for ($i = 0; $i < $arrayCount - 1; $i++) {
        for ($j = $i + 1; $j < $arrayCount; $j++) {
            if ($allArr[$j] < $allArr[$i]) {
                $temp = $allArr[$i];
                $allArr[$i] = $allArr[$j];
                $allArr[$j] = $temp;
            }
        }
    }return$allArr;
}

$oddNum = recursionOdd(81,159);
$evenNum = recursionEven(2,80);
$massEv = massiveEven(10);
$massOdd = massiveOdd(5);
$deletedArr = deletedArray(3, 7, $massEv);
$allArrey = allArr($massEv,$massOdd);
$sortArr = sortArr($allArrey);
$arrSub = (arrSub($deletedArr));
print_r($massEv);
print_r($deletedArr);
print_r($arrSub);
print_r($allArrey);
print_r(sortArr($sortArr));
echo $oddNum.'<br>';
echo $evenNum.'<br>';
?>
</pre>
