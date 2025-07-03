<?php
    
    //write a php program to  create a array for third year diploma subject operations-1.update an array, 2.access an array, travel and array using foreach loop
    echo "-- Create a Array And perform operations -- <br>";
    
    $subjects = [
        "OSY" => 101,
        "ACN" => 102,
        "SEN" => 103
    ];
    
    $subjects["SEN"] = 105; 
    
    echo "SEN code: " . $subjects["SEN"] . "<br>";
    
    foreach ($subjects as $name => $code) {
        echo "$name code is $code.<br>";
    }
    echo "<br>";

   //write a php program to display all the number which divisible by 13 but not by 3 between 500
   echo "-- Program to display all the number which divisible by 13 but not by 3 between 500  --<br>";
        
   for ($i = 1; $i <= 500; $i++) {
        if ($i % 13 == 0 && $i % 3 != 0) {
            echo $i . "<br>";
        }
    }
    echo "<br>";
      
    //write a program create an associative array for 5 students and travel them using for loop.
    echo "-- Associative array for 5 students and travel them using for loop. -- <br>";
    $students = [
        "Rahul" => 20,
        "Rohan" => 22,
        "Nikhil" => 21,
        "Arjun" => 23,
        "viraj" => 20
    ];

    for ($i = 0; $i < count($students); $i++) {
        $name = array_keys($students)[$i];
        $age = $students[$name];
        echo "Student $name is $age years old.<br>";
    }
    echo "<br>";

    //2 dimensional array
    echo "-- 2 Dimensional Array -- <br>";

    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    $matrix[1][1] = 10; 
    unset($matrix[2][2]); 

    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            echo "Element at ($i, $j) is " . $matrix[$i][$j] . "<br>";
        }
    }
    echo "<br>";

    foreach ($matrix as $row) {
        foreach ($row as $element) {
            echo $element . " ";
        }
        echo "<br>";
    }
    echo "<br>";

    //write a php program to create a multidimensional associative array keys- name, mob no, email-id,travel the array using for loop and foreach loop
    echo "-- Multidimensional associative array  -- <br>";

    $students_info = [
        [
            "name" => "ABC",
            "mob_no" => "8149054782",
            "email" => "abc@example.com"
        ],
        [
            "name" => "PQR",
            "mob_no" => "97663338433",
            "email" => "pqr@example.com"
        ],
        [
            "name" => "XYZ",
            "mob_no" => "1122334455",
            "email" => "xyz@example.com"
        ],
    ];

    $students_info[1]["email"] = "ghj@email.com";
    unset($students_info[2]["mob_no"]);

    foreach ($students_info as $student) {
        echo "Name: " . $student["name"] . "<br>";
        echo "Mobile No: " . $student["mob_no"] . "<br>";
        echo "Email: " . $student["email"] . "<br><br>";
    }
    echo "<br>";

    //explode and implode functions
    echo "-- Explode and Implode functions -- <br>";
    
    $string = "Nikhil Sandeep Kathe";
    $array = explode(" ", $string);
    echo "Exploded array: <br>";
    foreach ($array as $word) {
        echo $word . "<br>";
    }
    echo "<br>";
    

    $new_string = implode(" ",$array);
    echo "Imploded string: $new_string <br>";
    echo "<br>";

    //sort and reverse sort of array and associative array or using keys and values
    
    $numbers = [5, 3, 8, 1, 4];
    sort($numbers);
    echo "Sorted array: <br>";
    foreach ($numbers as $number) {
        echo $number . "<br>";
    }
    echo "<br>";

    rsort($numbers);
    echo "Reverse sorted array: <br>";
    foreach ($numbers as $number) {
        echo $number . "<br>";
    }
    echo "<br>";

    $associative_array = [
        "apple" => 3,
        "banana" => 1,
        "cherry" => 2
    ];
    asort($associative_array);
    echo "Sorted associative array: <br>";
    foreach ($associative_array as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<br>";

    arsort($associative_array);
    echo "Reverse sorted associative array: <br>";
    foreach ($associative_array as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<br>";

    ksort($associative_array);
    echo "Sorted associative array by keys: <br>";
    foreach ($associative_array as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<br>";

    krsort($associative_array);
    echo "Reverse sorted associative array by keys: <br>";
    foreach ($associative_array as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<br>";

    //practice example
    echo "-- Practice Example -- <br>";

    $a = array('PHP', 'HTML', 'CSS');

    echo "<ul>";
    foreach ($a as $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
    echo "<br>";

    //write a program to get customer details like name, id, mobile no., address, product, email-id of 5 customers

    $customer_info =[
        [
            "Name" => "ABC",
            "Id" => "E101",
            "Mob_no" => "8149054782",
            "Address" => "Mumbai",
            "Email" => "abc@example.com",
            "Product" => "Gaming PC"
        ],
        [
            "Name" => "XYZ",
            "Id" => "E102",
            "Mob_no" => "9054861952",
            "Address" => "Delhi",
            "Email" => "xyz@example.com",
            "Product" => "Laptop i5"
        ],
        [
            "Name" => "PQR",
            "Id" => "E103",
            "Mob_no" => "9065489325",
            "Address" => "Agra",
            "Email" => "pqr@example.com",
            "Product" => "Camera"
        ],
        [
            "Name" => "OOP",
            "Id" => "E104",
            "Mob_no" => "9654885496",
            "Address" => "Kerala",
            "Email" => "oop@example.com",
            "Product" => "Laptop-Stand"
        ],
        [
            "Name" => "DEF",
            "Id" => "E105",
            "Mob_no" => "9054785511",
            "Address" => "London",
            "Email" => "def@example.com",
            "Product" => "Battery"
        ],
        [
            "Name" => "UVS",
            "Id" => "E106",
            "Mob_no" => "8955292625",
            "Address" => "Mumbai",
            "Email" => "UVS@example.com",
            "Product" => "Gaming PC"
        ],
    ];

    $new_customer = [
        "Name" => "NEW",
        "Id" => "E107",
        "Mob_no" => "9123456789",
        "Address" => "Pune",
        "Email" => "new@example.com",
        "Product" => "Monitor"
    ];
    array_push($customer_info, $new_customer);
    unset($customer_info[0]); 
        
    foreach ($customer_info as $customer) {
            echo "Name: " . $customer["Name"] . "<br>";
            echo "ID: " . $customer["Id"] . "<br>";
            echo "Mobile No: " . $customer["Mob_no"] . "<br>";
            echo " Address: " . $customer["Address"] . "<br>";
            echo "Email: " . $customer["Email"] . "<br>";
            echo "Product: " . $customer["Product"] . "<br><br>";
        }
        echo "<br>";

?> 