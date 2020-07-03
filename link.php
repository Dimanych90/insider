<?php

function minimizeArray(&$array, $maxValue, &$fixedElementsCount)
{

    $fixedElementsCount = 0;
    foreach ($array as $k => &$value) {
        if (!is_int($value) && !is_float($value)) {
            trigger_error('wrong value');
            return false;
        }
        if ($value > $maxValue) {
            $value = $maxValue;
            $fixedElementsCount++;
        }
    }

    unset($value);

    return $fixedElementsCount > 0;
}

$arr = [1, 5, 7, 17, 10, 82, 34, 2, 56];

$newArr = minimizeArray($arr, 15,$count);

var_dump($arr,$newArr,$count);
//$huy = 15;
//$someArray = array_map(function ($value) use ($huy){
//   return $value > $huy ? $huy : $value;
//},$arr);
//
//var_dump($someArray);

echo '<hr><br>';


function foo(&$var)
{
    $var++;
}

$a = 5;
foo($a);
echo $a;
// $a здесь равно 6

echo '<hr><br>';

function smth($name, &$countname)
{

    $countname = strlen($name);
    $str =  'Hello ' . $name;
    return $str;
}

$call = 'Dimasic';
$count = 0;
$var = smth($call,$count);
var_dump($var);
var_dump($count);



