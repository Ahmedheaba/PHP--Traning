<?php
//FUNCTION
//ASS1 in ASS ELZERO
// function sayHello($name, $gender){
//     if($gender == 'Male' || $gender == 'male'){
//         echo "Hello MR: $name <br>";
//     }
//     elseif($gender == 'Femele' || $gender == 'femele'){
//         echo "Hello MISS: $name <br>";
//     }
//     else{
//         echo "Hello $name <br>";
//     }
// }

// sayHello('Ahmed', 'male');
// sayHello('Farida', 'Femele');
// sayHello('HEBA', 'male0');

// //ASS2 in ASS ELZERO
// function getTheAll(...$args){
//         foreach ($args as $value) {
//             $all = $value . ' ';
//             echo $all;
//         }
// }
// getTheAll('Ahmed', 'Heba', 'Farida');

// //ASS3 in ASS ELZERO
// function getSum(...$args){
//     $result = 0;
//     foreach($args as $num){
//         if($num == 5){
//             continue;
//         }
//         if($num == 10){
//             $num = 20;
//         }
//         $result += $num;

//     }
//     echo '<br>';
//     echo $result;
// }
// getSum(10,10,10,10,5);
// getSum(10,2,3);
// getSum(5,2,3,10,8,9, 25, 9, 5, 5);
// getSum(1,2,3);
// getSum(100,200,300);
// getSum(1200,800,30);
?>

<?php
// $skills = ['HTML', 'CSS', 'JS', 'PHP', 'OOP PHP'];
// function getAllData($name, $country='Egypt', ...$skillss){
    //     echo "Hello $name your Country Is: $country <br>";
//     foreach($skillss as $skill){
    //         echo "--$skill <br>";
    //     }
    // }
    // getAllData('Ahmed', 'Egypt', ...$skills);
    ///FUNCTION VARIABLE
    // function sayHello(){
        //     return "HELLO, WORLD";
        // }
        // $func1 = "sayHello";
        // echo $func1;
        // echo '<br>';
        // function hello($someOne){
            //     return "Hello $someOne";
            //     }
            //     $func2 = 'hello';
            //     echo $func2("Farida");
            
            //     echo '<br>';
            //     if(function_exists("helllo")){
                //         echo "Hay This Function Is Actully Exsist";
                //         }else{
                    //             echo "Sorry This Function Is Not Exist";
                    //             }
                    
                    //     echo '<br>';
                    // // echo strlen('FARIDA');
                    // $func3 = "strlen";
// echo $func3('FARIDA AHMED');

// declare(strict_types=1);
?>
<?php
// function add($num1, $num2) : int{
//     return $num1 + $num2;
// }
// echo add(5.5, 4.5);
// echo '<br>';
// echo var_dump(add(5.5, 4.5));
///ANOUMNUS FUNCTION
// $arr = function(){
//     return "Hello";
// };
// echo $arr();

// echo '<br>';

// $arr2 = function($one){
//     return "Hello $one";
// };
// echo $arr2("Ahmed");

// echo '<br>';
// $msg = 'HI';
// $hey = "HEY";
// $arr3 = function($someone) use($msg, $hey ){
//     return "$hey $msg $someone";
// };
// echo $arr3('ahmed');
// echo '<br>';

// $nums = [10,15,20,25,30,35,40];
// function addFive($item){
//     foreach($item as $num){
//         echo $num + 10 . '<br>';
//     }
// }
// addFive($nums);
$nums = [10,15,20,25,30,35,40];

$addTen = function($item){
    return $item + 10;
};
// echo $addTen($nums);
$addTenNum = array_map(function($item){return $item + 10 ;}, $nums);
echo '<pre>';
print_r($addTenNum);
echo '</pre>';
// $addFiveResult = array_map('addFive', $nums);
// echo '<pre>';
// print_r($addFiveResult);
// echo '</pre>';






?>


