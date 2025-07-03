<?php 

echo"** College Website **" . "<br>";
class GRAN{

    public $name, $department, $roll;

    function __construct()
    {
        $this -> department = "Computer";
    }

    function accept($name, $roll)
    {
        $this->name = $name;
        $this->roll = $roll;
    }
    function display()
    {
        echo "<br>";
        echo "Name: " . $this -> name . "<br>";
        echo "Department: " . $this -> department . "<br>";
        echo "Roll No: " . $this -> roll . "<br>";
        echo "<br>";
    }
}

$stud1 = new GRAN();
$stud1 -> accept("Raul", 35);
$stud1 -> display();

echo"** Constructor **" . "<br>";

class Student {

    public $Fname, $lname, $department;

    
    function __construct($Fname,$lname)
    {
        $this->Fname = $Fname;
        $this->lname = $lname;
        $this->department = "TYCO";
    }

    function display()
    {
        echo "<br>";
        echo "First Name: " . $this->Fname . "<br>";
        echo "Last Name: " . $this->lname . "<br>";
        echo "Department: " . $this->department . "<br>";
        echo "<br>";
    }
}

$stud1 = new Student("Nikhil","Kathe");
$stud1 -> display();
$stud2 = new Student("Arjun","Parab");
$stud2 -> display();

?>