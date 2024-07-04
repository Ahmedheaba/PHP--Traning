<?php

//VARIABLEE VARIABLEE
/*
$name = "Ahmed";
$$name = "Heaba";

echo $name;
echo '<br />';
echo $$name;
echo '<br />';
echo $Ahmed;

echo "HELLO ${$name}";
?>
*/

//CONSTANTS IN PHP
/* 
    CONSTANTS
    --TATS VALUE CAN NOT CHANGE DURING THE EXECUTION
    --CONSTANTS ALWAYS UPPERCASE
*/
/*
define("BD_NAME", "FARIDA");
define("MAIIN_NUM", 150);
echo BD_NAME;
echo MAIIN_NUM;
*/

//PRE_DEFINE CONSTANTS
/*
echo php_uname();
echo '<br />';
echo PHP_VERSION;
echo '<br />';
echo '<br />';
echo '<br />';
echo '<br />';
*/

//WHEN YOU NEED TO MANGE YOUR ERROR 
//OR IF YOU NEED TO DISAPPER YOUR ERROR


//WITH VARIABLE
// $a = 10;
// $b = @$a or die("SORRY THIS VARIABLE IS NOT FIND");
// echo $b;

//WITH FILE
// $s = @file("ahmedDDD.txt") or die("SORRY THIS FILE NOT FIND");
// echo '<pre>';
// print_r($s);
// echo '</pre>';

//WITH INCLUDE

// (@include("ins.php")) or die("Hello");

$myList = ['AHMED', 'HEBA', 'FARIDA', 'EIDA'];
foreach($myList as $name){
    echo '<br>';
    print_r($name);
    // echo '<bre/>';

}

