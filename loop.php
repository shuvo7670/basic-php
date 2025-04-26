<?php

// For Loop

// for (initialization; condition; increment/decrement) {
//     // Code to execute
// }

// for( $x = 1; $x < 50; $x++ ) {
//     echo $x . "<br>";
// }

// While Loop 

// while (condition) {
//     // Code to execute
// }
// $y = 1;
// while( $y < 50 ) {
//     echo $y . "<br>";
//     $y++;
// }

// Do While 

// do {
//     // Code to execute
// } while (condition);
// $z = 1;
// do {
//     echo $z . "<br>";
//     $z++;
// } while ($z < 10);

// Foreach Loop
// foreach ($array as $value) {
//     // Code to use $value
// }
$arr = ['A',"B", "C","D"];

foreach( $arr as $index => $element ) {
    if ( $index == 1 || $index == 3 ) {
        echo $index . '-' . $element . "<br>";
    }
}