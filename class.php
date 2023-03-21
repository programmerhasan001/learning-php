<?php
class Bio
{
    public $name;
    public $age;
    public $city;

    public function __construct($name, $age, $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }

    function showBio()
    {
        echo "My name is " . $this->name . " and i am " . $this->age . " years old. and home town is " . $this->city . ".";
    }

    function msg()
    {
    }
}


$myBio = new Bio("Hasan", 10, "Feni");
echo $myBio->showBio() . "<br/>";
echo $myBio->msg() . "class-1";

echo "<br/> <br/>";
class SecondBio extends Bio
{
    public $profession = "Developer";
    function msg()
    {
        echo "Welcome msg";
    }
}

$bio2 = new SecondBio("sahil", 20, "Dhaka");
echo $bio2->age;
echo "<br/>";
echo $bio2->showBio();
echo "<br/>";
echo $bio2->profession;
echo "<br/>";
echo $bio2->msg();
?>

<h4>php class</h4>