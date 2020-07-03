<?php

//$test = 'Hello again';
//
//file_put_contents('test.txt',$test);
//
//echo file_get_contents('test.txt');

session_start();

var_dump(session_save_path());

$date = mktime('14','13','57','06','15','1990');
$date1 = $date - (60*60) * 3;

 echo date(' d '.' M '.' Y '.''.' H'.':'.'i'. ':' .'s',$date1);



echo '<hr><br>';

$date2 = strtotime('28.06.2002. 20.11');

echo $date2;

echo '<hr><br>';

echo time();

echo '<hr><br>';

$name = 'Hello man';

file_put_contents('name.cvs',$name);

echo file_get_contents('name.cvs');