 <?php
    
    //write a program to find length of string and word in string using loops
    
    // $a = "Welcome to PHP";
    // $i= 0;
    // while ( $a[$i]) {
    //     $i++;
    // }
    // echo "$i <br>";
    // echo "<br>";

    // $word=0;
    // if($a[$i] == "\0")
    // {
    //     $word++;
    // }
    // echo $word;
    // echo"<br>";

    //write a program to Declare a two string and compare both the string if they are equal then find number of words in both string else reverse both the string
    echo " Declare a two string and compare both the string if they are equal then find number of words in both string else reverse both the string:- <br>";

    $str1 = "Hello a PHP";
    $str2 = "Welcome to program";

    echo("strcmp(): " . strcmp($str1, $str2) );
    echo"<br>";
    if($str1 == $str2){
        echo("No of Words in String: " . str_word_count($str1));
        echo("No of Words in String: " . str_word_count($str2));
        echo"<br>";
    }
    else {
        $rev=strrev($str1);
        $rev2=strrev($str2);
        echo "Reverse the String: " . $rev . "<br>";
        echo "Reverse the String: " . $rev2 . "<br>";
        echo "<br>";
    }

    //write a php program to declare 1 string & calculate length of given string

    // $str3 = "Java";

    // echo "Length of given String: " . strlen($str3) . "<br>";
    //     if( strlen >= 10 ) {
    //         echo ("strtolower()" . strtolower($str3));
    //     }
    //     else {
    //         echo("ucfirst()" . ucfirst($str3));
    //     }
    // echo "<br>";

    //count number of words in given string and replace first word of given string given string with 'PHP'
    echo " Count number of words in given string and replace first word of given string given string with 'PHP':- <br>";

    $str4 = "welcome to arrow";
    echo("No of Words in String: " . str_word_count($str4));
    echo"<br>";

    echo ("str_replace(): " . str_replace("welcome" , "PHP" , $str4) . "<br>");
    echo "<br>";

    //write a php program check the given string are palindrome or not 
    echo " Check the given string are palindrome or not:- <br>";

    $str5 = "Welcome";
    $rev = strrev($str5);
    echo $str5;
    if ($str5 == $rev) {
        echo " : String is Palindrome.";
    } 
    else {
       echo " : String is not Palindrome.";
    }
    echo "<br><br>";
    
    //write a php program convert given string into array
    echo " Convert given string into array:- <br>";
    
    $str6 = "Welcome to New string";
    $str6 = str_split($str6);
    echo "<pre>";
    print_r($str6);
    echo "</pre>";
    echo"<br>";
    
    //write a php program to shuffle a string
    echo " Shuffle a string:- <br>";

    $str7 = "Hello world";
    $str7 = str_shuffle( $str7 );
    echo "str_shuffle: " . str_shuffle($str7) . "</br>";
    echo "<br>";

?>