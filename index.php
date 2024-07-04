<?php
/*
//DATA TYPE 
$name = "Ahmed Ramzy";
$myHeart = "Farida Ahmed Ramzy";
$fullFaridaName = "$myHeart $name";
echo '<br/>';
echo $fullFaridaName;
echo '<br/>';
echo $name;
echo '<br/>';
echo $myHeart;
echo '<br/>';
echo gettype($name);
$salary = 1000.0;
echo '<br/>';
echo gettype($salary);


$isTrue = True;
echo '<br/>';
echo ($isTrue);
echo '<br/>';
echo gettype($isTrue);
*/

/*  
        --DATA DYPE

        SCALAR DATA TYPE
        -INTEGER
        -FLOAT
        -BOLEAN
        -STRING
        COMPOUND DATA TYPE
        -ARRAY 
        -OBJECT
        -
/*
/* 
        TYPE OF NUMBER
        -(DECIMAL- BINARY- OCTAL- HEXADECIMAL)-
            -DECIMAL => 0-9
            -BINARY => 0-1
            -OCTAL => 0-7
            -HEXADECIMAL => 0-9 && A-F
            MAX NUM PHP CAN SUPPORT => 2,147,483,648 and 2,147,483,647 i.e., -2^31 to 2^31.
*/

/*
//float 
$floatNum = 1.23;
$floatNum2 = 2.69;
$result = $floatNum + $floatNum2;
echo "The Result Is:" . $result;
echo '<br />';
echo gettype($result);
*/
//STRING

//' OR "
//$welcome = "Hello From Our Website "

//VARIABLE
//LOCAL VARIABLE
//name variable outside the function us a global variable
// $name = "Farida Ahmed Ramzy";
// function addLove(){
//         //name inside the function is a local variable
//         $name = "Farida";
//         echo $name;
// }
// addLove();
// echo '<br />';
// echo $name;
// echo '<br />';
//GLOBAL VARIABLE
//A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
// $myAge = 26;
//this is a global variable
//i can use it in my hole code by i cant use it inside any func


//STATIC VARIABLE
/*
Normally, when a function is completed/executed,
all of its variables are deleted. However,
sometimes we want a local variable NOT to be deleted. 
We need it for a further job.
*/

// function sayHello(){
//         static $res = 1;
//         $res++;
//         echo $res;
// }
// sayHello();
// sayHello();
// sayHello();


//FUNCTION PARAMETER
// function addName($name1, $name2){
//         //NAME1 AND NAME2 IS A FUNCTION PARAMERTER.
//         echo "HELLO $name1 AND $name2 FROM THE PHP SERVER ";
// }
// addName('Ahmed', 'Farida');

//VARIABLE VARIABLE
// $username = 'Ahmed';
// $isLoggedIn = false;
// if($isLoggedIn === true){
//         echo "<h1>HELLO $username TO MY WEBSITE</h1>";
//         echo "<p>YOU ARE WELCOME THERE</P>";
// }else {
//         echo "SORRY THIS USENAME IS NOT DEFINED";
// }
// echo "<br/>";
// $playerAge = 85;
// if($playerAge <= 30){
//         echo "THIS PLAYER STILL CAN PLAY IN OUR TEAM";
// }else{
//         echo "SORRY THIS PLAYER CAN NOT PLAY IN OUT TEAM";
//         echo "<br/>";
//         echo "BECAUSE HIS AGE = ${playerAge} YEARS OLD";

// }
// echo "<br/>";
/* 
        --TRAINIG
        1:IF POINTS BETWEEN 100 AND 200 (YOU ARE JOUNIOR)
        2:IF POINTS BETWEEN 200 AND 300 (YOUARE SENIOR)
        3:IF POINTS BETWEEN 300 AND 400 (YOU ARE EXPORT)
*/
/*
$points = 3;
if($points >= 100 && $points < 200){
        echo "HAT YOU ARE JOUNIOR";
}
elseif($points >= 200 && $points < 300){
        echo "HAY YOU ARE SENIOR";
}
elseif($points >= 300){
        echo "HAY YOU ARE EXPORT";
}else{
        echo "SOORY YOU NEED TO MANGE YOUR POINT";
}
*/
// LOOPS
// WHILE
// $playerAge = 15;
// while($playerAge <= 30){
//         echo "<p>THIS PLAYER CAN STILL PALY WITH OUT TEAM ${playerAge}</p>";
//         $playerAge++;

// }
// $temp = 15;
// while ($temp >= 5) {
//         echo "<p>I CAN STILL LIVE IN THIS WEATHER ${temp}</p>";
//         $temp--;
// }

//ARRAY
/*
--Indexed arrays - Arrays with a numeric index
--Associative arrays - Arrays with named keys
--Multidimensional arrays - Arrays containing one or more arrays

*/
//                    0       1        2
//INDEXX ARRAY
// $myFamily = array("Ahmed", "HEBA", "FARIDA");
// $salary = array(10000, 20000, 5000, 15000, 12000);

// echo $myFamily[2];
// echo '<br/>';
// print_r($myFamily);
// echo '<br/>';
// echo sizeof($myFamily);
// echo '<br/>';
// echo sizeof($salary);
// echo '<br/>';
// $myFamily[] = 'EIAD';
// echo '<br/>';
// echo sizeof($myFamily);
// echo '<br/>';
// print_r($myFamily);
//ASSOCIATE ARRAY   (KEY => VALUE)
// echo '<br/>';
// $expArra = array('name' =>'Ahmed Heaba', 'age' =>'26');

// echo '<br/>';
// $expArra[] = 'Alex';
// echo '<pre>';
// print_r($expArra);
// echo '</pre>';
// echo '<br/>';
// echo $expArra['name'];
// echo '<br/>';
// echo $expArra['age'];
// echo '<br/>';
// echo "Hello" . $expArra['name'] . "YOU ARE WELCOME YOUR AGE IS:" . $expArra['age'] . 'YEARS OLD';
// echo '<br/>';
// echo $expArra[0];

//MULTIDIMENTION ARRAY
// $classOne = array('MOHAMED', 'AHMED', 'HEBA', 'EIAD');
// $classTwo = array('IBRAHIM', 'AHMED', 'FARIDA', 'AZZA');

// var_dump($classOne);
// $school = array($classOne, $classTwo);
// echo '<pre>';
// print_r($school);
// echo '</pre>';
// echo '<br />';
// echo '<pre>';
// print_r ($school[1]);
// echo '</pre>';
// echo '<br />';
// echo sizeof($school);

// list($name1 , $name2, $name3) = $classOne;
// echo "$name1 <br /> $name2 <br /> $name3";
// $nums = range(10, 20, 2);

// echo '<pre>';
// print_r($nums);
// echo '</pre>';


// $word = "Hello %s how are you you have %f";
// printf($word, 'Ahmed', 26);
// echo '<br />';

// $result = sprintf("HAY %s YOU ARE WELCOME",'FARIDA');
// echo $result;
/* 
for($i = 0; $i < count($salaries); $i++){
        // echo '<pre>';
        echo '<p> Employe Num' . ($i+1) .'IS:' . $salaries[$i] . '</p>';
        // echo '</pre>';
};
*/
// $total = 0;    
// for($i = 0; $i < count($salaries); $i++){
//         $total += $salaries[$i];
// }

// for ($i = 0; $i < count($salaries); $i++){
//         $salaries[$i] += ($salaries[$i] * 0.1);
//         echo "<p> The Employeee Name Is: $employee[$i] Has Salary Is: $salaries[$i] </p>";
// }

// echo "<h1> THE TOTAL IS: {$total}";


//real task
// ?>

<?php
// $studentsName = array('Ahmed', 'Mohammed', 'Heba', 'Farida', 'Eiad');
// $arabicLang = array(30, 35, 20, 40, 15);
// $englishLang = array(35, 40, 15, 42, 12);
// $mathLang = array(32, 42, 18, 48, 20);
// $scienceLang = array(40, 45, 30, 49, 12);
// ?>

<?php 
//GET THE TOTAL DEGREE FOR ARABIC LANGUAGE
// $tatalArabicLang = 0;
// for ($i = 0; $i < count($arabicLang); $i++){
//         $tatalArabicLang += $arabicLang[$i];
// }
// if($tatalArabicLang >= 140){
//         echo "HAY YOU ARE PASSED BEACASE YOUR DEGREE IS: $tatalArabicLang";
// }else{
//         echo "SOORY YOU ARE FAILED IN THE EXAM BEACUSE YOUR DEGRE IS: $tatalArabicLang";
// }

//GET THE TOTAL DEGREE FOR ENGLISH LANGUAGE
// $tatalEnglishLang = 0;
// for ($i = 0; $i < count($englishLang); $i++){
//         $tatalEnglishLang += $englishLang[$i];
// }
// // echo $tatalEnglishLang;
// foreach ($studentsName as $nameOfStudent) {
//         echo $name;
// };
?>