<?php

    echo "<center> ** If-else ** </center> <br>";
    
    //Write a program to compare 2 numbers
    echo "-- Compare 2 numbers -- <br>";
    $a=10;
    
    if ($a > 5) {
        echo "a is greater than 5 <br>";
    } 
    elseif ($a == 5) {
    echo "a is equal to 5 <br>";
    }
    else {
    echo "a is less than 5 <br>";
    }
    echo "<br>";

    // Write a PHP program to check given number is multiple of 5 and 7
    echo "-- Program to check given number is multiple of 5 and 7 -- <br>";

    if ($a%5 == 0 && $a%7 == 0) {
        echo "$a is multiple of 5 and 7";
    }
    else
    {
        echo "$a is not multiple of 5 and 7";   
    }
    echo "<br>";
    
    // Write a PHP program to check given number is in between 100 and 500
    echo "<br> -- Program to check given number is in between 100 and 500 -- <br>";
    
    $num=350;
    if ($num >= 100 && $num <= 500) {
    echo "$num is between 100 to 500 <br>";
    }
    else{
    echo " $num is not between 100 to 500 <br>";
    }
    echo "<br>";

    //Write a  PHP program to check whether a shopkeeper is in profit or loss
    echo "-- Program to check whether a shopkeeper is in profit or loss -- <br>";
    
    $cost= 250;
    $sell= 300;
    if ($sell > $cost) {
    echo ($sell - $cost) . " Profit <br>";
    }
    else 
    {
    echo "Loss <br>";
    }
    echo "<br>";

    //write a PHP program to check given number is positive or negative
    echo " Check given number is Positive or Negative: <br>";
    
    $num = -5;
    if ($num > 0) { 
        echo "$num is a positive number <br>";
    } elseif ($num < 0) {
        echo "$num is a negative number <br>";
    } else {
        echo "$num is zero <br>";
    }
    echo "<br>";

    //write a PHP program to check given number is multiple of 6 and 5 or only 6 or only 5
    echo " Check given number is multiple of 6 and 5 or only 6 or only 5: <br>";
    
    $num = 30;
    if ($num % 6 == 0 && $num % 5 == 0) {
        echo "$num is a multiple of 6 and 5 <br>";
    } elseif ($num % 6 == 0) {
        echo "$num is a multiple of 6 <br>";
    } elseif ($num % 5 == 0) {
        echo "$num is a multiple of 5 <br>";
    } else {
        echo "$num is not a multiple of 6 or 5 <br>";
    }
    echo "<br>";

    //switch statement
    echo "<center> ** Switch statement ** </center><br>";

    echo "Find A value: <br>";
    switch ($a) : 
        case 10:
            echo "a is 10  <br>";
            break;

        case 5:
            echo "a is 5 <br>";
            break;
        default:
            echo "a is neither 10 nor 5 <br>";
        endswitch;
    echo "<br>";

    //write a program  if enter 1 print one or from 0 to 10
    echo " Program  if enter 1 print one or from 0 to 10 <br>";

    $num = 3;
    switch ($num) {
        case 1:
            echo "one <br>";
            
        case 2:
            echo "two <br>";
            
        case 3:
            echo "three <br>";
           
        case 4:
            echo "four <br>";
            break;
        case 5:
            echo "five <br>";
            break;
        case 6:
            echo "six <br>";
            break;
        case 7:
            echo "seven <br>";
            break;
        case 8:
            echo "eight <br>";
            break;
        case 9:
            echo "nine <br>";
            break;
        case 10:
            echo "ten <br>";
            break;
        default:
            echo "Invalid number <br>";
    }
    echo "<br>";

    //write a program to character is vowel or not
    echo "Program to Character is vowel or not <br>";

    $char = 'a';
    switch ($char) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
        echo "$char is a vowel <br>";
        break;
    default:
        echo "$char is not a vowel <br>";
    }
    echo "<br>";

    //looping statement
    echo "<center> ** Looping Statement ** </center><br>";

    //while loop
    echo " While Loop: <br>";

    $i = 1;
    while ($i <= 5) {
    echo "Iteration $i <br>";
    $i++;
    }
    echo "<br>";

    //write a program to print 100 to 1 using while loop
    echo " Print 100 to 1 using while loop: <br>";

    $i = 100;
    while ($i >= 1) {
    echo "$i <br>";
    $i--;
    }
    echo "<br>";

    //write a program to print 100 to 1 only even numbers using while loop
    echo " Print 100 to 1 only even numbers using while loop: <br>";
    
    $i = 100;
    while ($i >= 1) {
    if ($i % 2 == 0) {
        echo "$i <br>";
    }
    $i--;
    }
    echo "<br>";

    //first 100 natural numbers  addition using while loop
    echo " First 100 natural numbers addition using while loop: <br>";

    $i = 1;
    $sum = 0;
    while ($i <= 100) {
        $sum += $i;
        $i++;
    }
    echo "The sum of the first 100 natural numbers is $sum <br>";
    echo "<br>";

    //write a PHP program to print 7 table using while loop
    echo " Print 7 table using while loop: <br>";
    
    $i = 1;
    while ($i <= 10) {
        echo "7 x $i = " . (7 * $i) . "<br>";
        $i++;
    }
    echo "<br>";

    //write a program to print reverse of an given number
    echo " Program to print reverse of an given number: <br>";
    
    $number = 12345;
    $reverse = 0;
    while ($number > 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int)($number / 10);
    }
    echo "Reverse: " . $reverse . "<br>"; 
    echo "<br>";

    //write a php program to find sum of digit of given number 
    echo " Find sum of digit of given number <br>";

    $number = 12345;
    $sumOfDigits = 0;
    while ($number > 0) {
        $digit = $number % 10;
        $sumOfDigits += $digit;
        $number = ($number / 10);
    }
    echo "Sum of digits: " . $sumOfDigits . "<br>";
    echo "<br>";
    
    //for loop
    echo " For Loop: <br>";
    
    for ($i = 1; $i <= 5; $i++) {
        echo " Iteration $i <br>";
    }
    echo "<br>";
    
    //write a program to print 1 to 50 only even numbers and add them using for loop
    echo " Program to print 1 to 50 only even numbers and add them using for loop <br>";

    $sum = 0;
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 == 0) {
            echo "$i <br>";
            $sum += $i;
        }
    }
    echo "The sum of even numbers from 1 to 50 is $sum <br>";
    echo "<br>";

    //do-while loop
    echo " do-while Loop: <br>";

    $i = 1;
    do {
        echo "Iteration $i <br>";
        $i++;
    } while ($i <= 5);
    echo "<br>";

    //break and continue
    echo "<center> ** Break & Continue ** </center><br>";
    
    echo " Break: <br>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            break;
        }
        echo "Iteration $i <br>";
    }
    echo "<br>";

    echo " Continue: <br>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        echo "Iteration $i <br>";
    }
    echo "<br>";

    //foreach loop
    echo "<center> ** Foreach loop ** </center><br>";
    
    $array = [1, 2, 3, 4, 5];
    $array[2]=20;
    foreach ($array as $value) {
        echo "Value: $value <br>";
    }
    echo "<br>";

?>