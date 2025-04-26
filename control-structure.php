<?php 

// IF
// if ( $number_one == $number_two ) {
//     echo "Hello from IF Block";
// }

// IF ELSE
// if ( $number_one === $number_two ) {
//     echo "Hello I am true";
// }else {
//     echo "Hello I am false";
// }
// $number_one = 10;
// $number_two = "10";
// if( $number_one === $number_two ) {
//     echo "I am from IF";
// } elseif( $number_one != $number_two ) {
//     echo "I am from elseif";
// } elseif( $number_one == $number_two ) {
//     echo "I am from another elseif";
// } else {
//     echo "I am from else";
// }

$score = 101;
switch ($score) {
    case $score > 100: 
        echo "I am over talented";
        break;
    case $score > 80 && $score < 90:
        echo "I am GPA 5";
        break;
    case $score > 90 && $score < 100: 
        echo "I am over GPA 5";
        break;
    case $score < 80 && $score > 70: 
        echo "I am under GPA 5";
        break;
    default:
        echo "I am fail";
        break;
}

// run others code