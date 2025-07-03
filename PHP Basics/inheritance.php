<?php

class student {

    public $name = "Nikhil", $rollNo = 35 ; 
}

class total extends student {

    public $m1, $m2, $m3, $total, $avg ;

    function average($m1, $m2, $m3)
    {
        $this->m1 = $m1;
        $this->m2 = $m2;
        $this->m3 = $m3;
        $this->total = $this-> m1 + $this-> m2 + $this-> m3 ; 
        $this->avg = $this->total / 3 ;
    }

    function display()
    {
        echo "Name: " . $this->name . "<br>" ;
        echo "Roll No: " . $this->rollNo . "<br>" ;
        echo "Total: " . $this->total . "<br>" ;
        echo "Average: " . $this->avg . "<br>" ;
        echo "<br>";
    }
}

$stud1 = new total();
$stud1 -> average(20, 40, 50);
$stud1 -> display();

//hierarchical inheritance

//movies booking program
echo "** Online Ticket Booking **" . "<br>";

class movies {

    public $tp= 200, $movieType, $age ;
     
    function accept($mt, $age)
    {
        $this->movieType = $mt;
        $this->age = $age;
    }
}

class twoD extends movies {

    public $discount, $total, $discountAmount, $extra=0 ;

    function discount()
    {
        if( $this->age <= 10) {
           
            $this->discount = 0.50;
        }
        elseif ( $this->age >= 80) {
            
            $this->discount = 0.20;
        }
        else {
            $this->discount = 0;
        }
    }
    
    function total()
    {
        $this->discountAmount = $this->tp * $this->discount;
        $this->total = $this->tp - $this->discountAmount;

    }

    function display()
    {   
         echo "<br>";
        echo "Movie Type: " . $this->movieType . "<br>" ;
        echo "Ticket price: " . $this->tp . "&#8377" . "<br>" ;
        echo "Extra Charges: " . $this->extra . "&#8377" . "<br>" ;
        echo "Discount: " . $this-> discountAmount . "&#8377" . "<br>";
        echo "Total: " . $this-> total . "&#8377" . "<br>";
         echo "<br>";
    }
}

class threeD extends movies {

    public $discount, $total, $discountAmount, $extra= 100, $realTp ;
    
    function extraCharge()
    {   
        $this->realTp = $this->tp;
        $this->tp += $this->extra ;
    }

    function discount()
    {   
        if( $this->age <= 10) {
           
            $this->discount = 0.50;
        }
        elseif ( $this->age >= 80) {
            
            $this->discount = 0.20;
        }
        else {
            $this->discount = 0;
        }
    }
    
    function total()
    {
        $this->discountAmount = $this->tp * $this->discount;
        $this->total = $this->tp - $this->discountAmount;
    }

    function display()
    {   
        echo "Movie Type: " . $this->movieType . "<br>" ;
        echo "Ticket price: " . $this->realTp . "&#8377" . "<br>" ;
        echo "Extra Charges: " . $this->extra . "&#8377" . "<br>" ;
        echo "Discount: " . $this-> discountAmount . "&#8377" . "<br>";
        echo "Total: " . $this-> total . "&#8377" . "<br>";
        echo "<br>";
    }
}

$movie1 = new twoD();
$movie1 -> accept("_2D", 85);
$movie1 -> discount();
$movie1 -> total();
$movie1 -> display();

$movie2 = new threeD();
$movie2 -> accept("_3D", 85);
$movie2 -> extraCharge();
$movie2 -> discount();
$movie2 -> total();
$movie2 -> display();

?>