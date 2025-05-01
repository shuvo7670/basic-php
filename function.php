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
