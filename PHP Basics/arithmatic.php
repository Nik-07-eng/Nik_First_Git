<?php

    // write a program to create a calculator for all basic arithmetic operations
    
    echo "** Calculator for All basic Arithmetic operations **" . "<br>";
    echo "<br>";

    $a=10;
    $b=20;
    
    $c=$a+$b;
    echo "The sum of $a and $b is $c. <br>";

    $c=$a-$b;
    echo "The subtraction of $a and $b is $c. <br>";

    $c=$a*$b;
    echo "The multiplition of $a and $b is $c. <br>";

    $c=$a/$b;
    echo "The Division of $a and $b is $c. <br>";

    $c=$a%$b;
    echo "The modules of $a and $b is $c. <br>";
    echo "<br>";

   //write a program to swap two numbers
   echo "** Swap two numbers ** <br>";
    
    $c=$a;
    $a=$b;
    $b=$c;
    echo "The value of a is $a and b is $b. <br>";

    $a=$a+$b;
    $b=$a-$b;
    $a=$a-$b;
    echo "The value of a is $a and b is $b.<br>";
    echo "<br>";

   //write a program to swap two numbers using bitwise ex-or operator
   echo "** Swap two numbers using bitwise ex-or operator ** <br>";
   
    $a=$a^$b;
    $b=$a^$b;
    $a=$a^$b;
    echo "The value of a is $a and b is $b. <br>";
 
?>