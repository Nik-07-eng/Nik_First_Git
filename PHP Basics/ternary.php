<!-- write a program to find minimum and maximum number using conditional and ternary operator -->

<?php

$a = 10;
$b = 20;
$max = ($a > $b) ? $a : $b;
$min = ($a < $b) ? $a : $b;
echo "The maximum number is $max and the minimum number is $min.<br>";

// write a program to find largest number in 3 numbers using conditional and ternary operator
$a = 10;
$b = 20;
$c = 30;
$largest = ($a > $b && $a > $c) ? $a : (($b > $c) ? $b : $c);
echo "The largest number among $a, $b, and $c is $largest. <br>";

// write a program to find largest number in 4 numbers using conditional and ternary operator
$d = 40;
$largest = ($a > $b && $a > $c && $a > $d) ? $a : (($b > $c && $b > $d) ? $b : (($c > $d) ? $c : $d));
echo "The largest number among $a, $b, $c, and $d is $largest. <br>";
?>