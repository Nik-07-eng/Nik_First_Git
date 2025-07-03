<?php
    
    //write a program to check a given number is palindrome or not
    echo " Check a given number is palindrome or not:- <br>";

    $rev=0;
    $num=121;
    $temp=$num;
    while ($temp > 0) {
        $digit = $temp % 10;
        $rev = ($rev * 10) + $digit;
        $temp = ($temp / 10);
    }
    if ($num == $rev) {
        echo "$num is a palindrome <br>";
    } else {
        echo "$num is not a palindrome <br>";
    }
    echo "<br>";

    //write a program to check a given number is armstrong or not
    echo " Check a given number is Armstrong or not:- <br>";

    $num = 153;
    $sum = 0;
    $temp = $num;
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += ($digit * $digit * $digit); 
        $temp = ($temp / 10);
    }
    if ($num == $sum) {
        echo "$num is an Armstrong number <br>";
    } else {
        echo "$num is not an Armstrong number <br>";
    } 
    echo "<br>";      

    //write a program to find the factorial of given number
    echo " Find the factorial of given number:- <br>";

    $num = 5;
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    echo "The factorial of $num is $factorial <br>";
    echo "<br>";

    //write a program to find the given number is prime or not using for loop
    echo " Find the given number is prime or not using for loop:- <br>";
    
    $num = 29; 
    $isPrime = true;
    if ($num <= 1) {
        $isPrime = false;
    } else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
    }
    if ($isPrime) {
        echo "$num is a prime number <br>";
    } else {
        echo "$num is not a prime number <br>";
    }
    echo "<br>";

?>