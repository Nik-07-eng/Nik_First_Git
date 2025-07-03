<?php
    
    //write a program to print welcome message using function
    echo " Print welcome message using function: <br>";
    
    function welcomeMessage() {
        echo "Welcome <br>" ;
        echo "<br>";
    }

    welcomeMessage();

    //write a program to arithmetic operation numbers using formal parameter

    function add($num1, $num2) {
       $sum= $num1 + $num2;
       echo "Addition is: " . $sum ."<br>";
    }

    function subtract($num1, $num2) {
        $diff= $num1 - $num2;
       echo "Subtraction is: " . $diff ."<br>";
    }

    function multiply($num1, $num2) {
       $product= $num1 * $num2;
       echo "Multiplication is: " . $product ."<br>";
    }

    function divide($num1, $num2) {
       if ($num2 != 0) {
           $result= $num1 / $num2;
           echo "Division is: " . $result ."<br>";
       } else {
           echo "Division by zero error.";
       }

       echo "<br>";
    }
    
    add(5, 10);
    subtract(10, 5);
    multiply(5, 10);
    divide(10, 5);

    //write a program to add two number using one default value
    echo " Add two number using one default value: <br>";

    function addWithDefault($num1, $num2, $num3 = 20) {
        $sum = $num1 + $num2 + $num3;
        echo "Sum is: " . $sum . "<br>";
    }

    addWithDefault(5, 15); 
    echo "<br>";

    //write a program using return statement
    echo " Program using return statement: <br>";

    function f1() {
        return 10;
    }

    echo "Value from f1: " . f1() . "<br>";
    echo "<br>";

    //write a php function which finds greatest of three numbers using parameter Function
    echo " Function which finds greatest of three numbers using parameter Function- <br>";

    function findGreatest($num1, $num2, $num3) {
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        }
    }

    echo "Greatest number is: " . findGreatest(10, 20, 30) . "<br>";
    echo "<br>";

    //write a php function which finds greatest of three numbers using ternary operator
    echo " Function which finds greatest of three numbers using ternary operator- <br>";

    function findGreatestTernary($num1, $num2, $num3) {
        return ($num1 >= $num2 && $num1 >= $num3) ? $num1 : (($num2 >= $num1 && $num2 >= $num3) ? $num2 : $num3);
    }

    echo "Greatest number is: " . findGreatestTernary(10, 20, 30) . "<br>";
    echo "<br>";

    //write a php function to check if person is eligible to vote or not
    echo " Function to check if person is eligible to vote or not: <br>";

    function isEligibleToVote($age) {
        return ($age >= 18) ? "Eligible to vote" : "Not eligible to vote";
    }

    echo isEligibleToVote(20) . "<br>";
    echo isEligibleToVote(16) . "<br>";
    echo "<br>";

    //write a php function which accept a parameter employee name, id, mobile no.,and employee department with default value "Web development" and display the employee details
    echo " Function for Employee Details: <br>";

    function EmployeeDetails($name, $id, $mobile, $department = "Web development") {
        echo "<br>";
        echo "Employee Name: $name<br>";
        echo "Employee ID: $id<br>";
        echo "Mobile No.: $mobile<br>";
        echo "Department: $department<br>";
        echo "<br>";
    }
    
    EmployeeDetails("Nikhil kathe", "E123", "9876543210");
    EmployeeDetails("Arjun parab", "E456", "1234567890");
    echo "<br>";

    //write a php function which calculates cube of given numbers and return the cube of given number and check is in between 100 to 2000
    echo " Function which calculates cube of given numbers and return the cube of given number and check is in between 100 to 2000:- <br>";

    function calculateCube($number) {
        $cube = $number * $number * $number;
        if ($cube >= 100 && $cube <= 2000) {
            return $cube;
        } else {
            return "Cube is out of range.";
        }
    }

    echo "Cube of 5 is: " . calculateCube(5) . "<br>";
    echo "Cube of 10 is: " . calculateCube(10) . "<br>";
    echo "Cube of 15 is: " . calculateCube(15) . "<br>";
    echo "<br>";

    //write a php a program to find factorial of given numbers
    echo " Find factorial of given numbers:- <br>";
    
    function factorial($number) {
        $fact = 1;
        for ($i = 1; $i <= $number; $i++) {
            $fact *= $i;
        }
        return $fact;
    }

    echo "Factorial of 5 is: " . factorial(5) . "<br>";
    echo "Factorial of 7 is: " . factorial(7) . "<br>";
    echo "<br>";

    // program to convert dollar to rupees
    echo " Convert dollar to rupees:- <br>";
    
    function converter($num){
        echo "Dollar is: " . $num . "<br>";
         $rupees = $num * 85.54;
         return $rupees;
    }

    echo "Indian Rupees is: " . converter(6) . "<br>";
    echo "<br>";

    //program to reverse a number
    echo " Reverse a number:- <br>";

    function revers_num($num){
        $reverse = 0;
        while($num > 0){
            $digit = $num % 10;
            $reverse = $reverse * 10 + $digit;
            $num = (int)($num / 10);
        }
        return $reverse;
    }
    
    echo "Reverse number is: " . revers_num(1234567) . "<br>";
    echo"<br>";

    //Built in function
    echo "Built in function:- <br>";

    echo date(' dS / F / Y') . "<br>";
    echo date('h : i : s A');
    echo "<br>";

?>