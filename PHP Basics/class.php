<?php
  
  //Basic Program
  echo "-- Basic Program -- <br>";
 class student {

    public $fname, $lname;

    function display()
    {
        echo $this -> fname . "<br>";
        echo $this -> lname . "<br>";
    }
}

$stud1 = new student();
$stud1 -> fname = "Abc";
$stud1 -> lname = "def";
$stud1 -> display();
echo "<pre>";
print_r($stud1);
echo "</pre>";


$stud2 = new student();
$stud2 -> fname = "xyz";
$stud2 -> lname = "huv";
$stud2 -> display();
echo "<pre>";
print_r($stud2);
echo "</pre>";
echo "<br>";

//write a program to accept data of employee or display them
echo "-- Accept data of employee or display them -- <br>";

class employee {

    public $name, $id, $sal;

    function accept ($n,$i,$s)
    {
        $this-> name = $n;
        $this-> id = $i;
        $this-> sal = $s;
    }

    function show ()
    {
        echo "Name: " . $this-> name . "<br>";
        echo "Id: " . $this-> id . "<br>";
        echo "Salary: " . $this-> sal . "<br>"; 
        echo"<br>";
    }
}

$employ1 = new employee();
$employ1 -> accept("aks","E345","10000");
$employ1 -> show();

//crete a class rectangle and property l& b crete a first method accept which accept l&b second function calculate which calculate area of rectangle third function display display all information 

echo "** Area Calculator for rectangle **" . "<br>";

class rectangle {

    public $l, $b, $a=0;

    function getData($l, $b)
    {
        $this -> l = $l;
        $this -> b = $b;
    }

    function calculateArea()
    {
       $this->a = $this->l * $this->b ;
    }

    function ShowData()
    {
        echo "<br>";
        echo "Length: " . $this -> l . "<br>";
        echo "Breadth: " . $this -> b . "<br>";
        echo "Area of Rectangle: " . $this->a . "<br>";
        echo "<br>";
    }
}

    $Calculate1 = new rectangle();
    $Calculate1 -> getData(25, 45);
    $Calculate1 -> calculateArea();
    $Calculate1 -> ShowData();

//write program 

echo"** Online Banking World **" . "<br>";

class bankAccount{
    public $name, $accountNo, $balance, $deposit, $withdraw;

    function accept($name, $accountNo, $balance)
    {
        $this-> name = $name;
        $this-> accountNo = $accountNo;
        $this-> balance = $balance;
    }
    
    function showData()
    {   
        echo "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Account No: " . $this-> accountNo . "<br>";
        echo "Balance: " . $this-> balance . "<br>";
        echo "<br>";
    }

    function deposit($d)
    {   
        $this -> deposit = $d;
        echo "Deposit Amount: " . $this-> deposit . "<br>";
        $this-> balance = $this -> balance  + $this-> deposit ;
    }

    function withdraw($w)
    {
        $this-> withdraw = $w;
        echo "Withdraw Value: " . $this-> withdraw . "<br>";
        echo "<br>";
        if( $this-> withdraw > $this->balance)
        {
            echo "Inefficient Account Balance";
            echo "<br>";
        }
        else
        {
            $this-> balance -= $this-> withdraw ;
        }
    }

}

    $account1 = new bankAccount();
    $account1 -> accept("ABC", "E101", 20000 );
    $account1 -> showData();
    $account1 -> deposit(2000);
    $account1 -> withdraw(10000);
    $account1 -> showData();


    //class order property: product name,  Quantity, product price, total, discount function: 2.total function 3.calculate discount check if total amount is greater than 500 then discount will 5% if total amount is 1000 than discount is 10% if total is 2000 than 20% discount else no discount 4. display

echo"** Online shopping Website **" . "<br>";

class order{

    public $p_name, $Qty, $price= 20, $total, $discount;

    function acceptData($p_name, $Qty)
    {
        $this-> p_name = $p_name;
        $this-> Qty = $Qty;
    }

    function total()
    {
        $this->total = $this->Qty * $this->price;
    }
    
    function discount()
    {
        if($this->total > 500 && $this->total <=1000)
        {
           $this-> discount = $this-> total * 0.05;
           $this -> total -= $this -> discount;
        }
        elseif($this->total > 1000 && $this-> total < 2000)
        {
            $this-> discount = $this-> total * 0.10;
            $this -> total -= $this -> discount;
        }
         elseif($this->total > 2000)
        {
            $this-> discount = $this-> total * 0.20;
            $this -> total -= $this -> discount;
        }
        else
        {
           
        }
    }

    function showData()
    {   
       echo "<br>";
       echo "Product: " . $this->p_name . "<br>";
       echo "Price: " . $this->price . "<br>";
       echo "Quantity: " . $this->Qty . "<br>";
       echo "Discount: " . $this ->discount . "<br>";
       echo "Total: " . $this->total . "<br>";
       echo "<br>";
    }
}

$order1 = new order();
$order1 -> acceptData("Pen", 50);
$order1 -> total();
$order1 -> discount();
$order1 -> showData();

// Create a class Electricity with properties: customer name, meter id/no, total unit consumed, current reading, last reading.
// Functions: 1. accept 2. calculate total unit 3. display

echo "** Electricity Bill Counter **" . "<br>";

class Electricity {
    
    public $customerName, $meterNo, $currentReading, $lastReading, $totalUnit;

    function accept($name, $meterNo, $lastReading, $currentReading) {
        $this->customerName = $name;
        $this->meterNo = $meterNo;
        $this->lastReading = $lastReading;
        $this->currentReading = $currentReading;
    }

    function calculateTotalUnit() {
        if ($this->currentReading >= $this->lastReading) {
            $this->totalUnit = $this->currentReading - $this->lastReading;
        } else {
            echo "Current reading cannot be less than last reading." . "<br>" ;
            $this->totalUnit = 0;
        }
    }

    function display() {
        echo "<br>";
        echo "Customer Name: " . $this->customerName . "<br>";
        echo "Meter Number: " . $this->meterNo . "<br>";
        echo "Last Reading: " . $this->lastReading . "<br>";
        echo "Current Reading: " . $this->currentReading . "<br>";
        echo "Total Units Consumed: " . $this->totalUnit . "<br>";
    }
}

$e1 = new Electricity();
$e1->accept("Nikhil Kathe", "MTR12345", 350, 500);
$e1->calculateTotalUnit();
$e1->display();


?>