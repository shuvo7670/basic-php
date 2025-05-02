<?php 

function sayHello() {
    echo "Hello World!";
}
// sayHello();

function printName($name, $age) {
    echo "My name is : ". $name . '<br>';
    echo "My age is : ". $age . '<br>';
    echo "<hr>";
}
// printName("Moni");
// printName("Shakil");
// printName("Sourav");
// printName("Rakib");
// $nameArray = ['Moni', "Shakil", 'Sourav', "Rakib"];
// $ageArray = [23, 0, 33, 25];
// foreach ($nameArray as $key => $value) {
//    printName($value, $ageArray[$key]);
// }

function add($num_one, $num_two) {
    return $num_one + $num_two;
}
$add = add(5, 10);

// Local scope
function localVariable() {
    $var = 10;
    echo $var;
}
// localVariable();

// Global scope
$globalVar = "I am global variable";
$globalVar2 = "I am from global var 2";
function globalVar() {
    // global $globalVar;
    $globalVar = $GLOBALS['globalVar'];
    $globalVar2 = $GLOBALS['globalVar2'];
    echo $globalVar;
    echo $globalVar2;
}
// globalVar();

// Static scope
function counter() {
    static $count_me = 1;
    $count_me++;
    echo $count_me . "<br>";
}
// counter(); // result 2
// counter(); // result 3

// Anonymous function
$anno = function($n) {
    return $n * $n;
};
echo $anno(2);