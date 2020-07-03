<?php


echo date(' d '.' M '.' Y '.'H'.':'.'i'.':'.'s');

echo '<hr><br>';

$date = mktime('15','00','00','04','24','2015');
$date1 = date(' d '.' M '.' Y '.'H'.':'.'i'.':'.'s' , $date);
$fiveHoursAgo = $date - (60*60) *5;
echo date(' d '.' M '.' Y '.'H'.':'.'i'.':'.'s' , $fiveHoursAgo);

    echo '<hr><br>';
$time = strtotime('24.02.2016 13:00:00');

echo $time;
echo '<hr><br>';

$str = 'Карл у Клары украл Кораллы';

echo str_replace('К','',$str);

echo '<hr><br>';

$str1 = 'Две бутылки лимонада ';

echo str_replace('Две','Четыре',$str1);

echo '<hr><br>';
$str2 = 'Четыре бутылки лимонада';

echo str_replace('лимонада','лимонада и хуй',$str2);

