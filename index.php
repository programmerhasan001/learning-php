<?php
$name = "Hasan";
$city = "Dhaka";
echo "my name is " . $name . "<br/>";
echo $city . "<br/>";
var_dump($name);
echo "<br/>";
?>


<?php
$age = 10;
function printAge()
{
    $age = 12;
    echo "Age is :" . $age;
};
printAge();
echo "<br/>";
echo "Age is -- :" . $age;
?>

<?php
echo "<br/>";
$price = 500;
function showPrice()
{
    global $price;
    $price = 600;
    echo "Price is : $" . $price . "<br/>";
}

showPrice();
?>


<?php
$x = 5;
$y = 10;
function changeColor()
{
    // $GLOBALS['x'] = $GLOBALS['x'] + $GLOBALS['y'];
    $GLOBALS['x'] = 8;
};

changeColor();

echo $x . " value";
?>

<?php
echo "<br/>";
$number = 50;
$number1 = 60;
print "<h3>" . $number . "</h3>";
echo "<br/>";
// print $number, $number1;
echo $number, $number1;
print "<br/>";
?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br/>";
print_r($cars);
?>

<?php
class Bio
{
    public $name;
    public $age;
    public $city = "Dhaka";

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function showBio()
    {
        return "My name is " . $this->name . " age is " . $this->age;
    }
}
echo "<br/>";
$hasanBio = new Bio("Hasan", 10);
echo $hasanBio->showBio();
echo "<br/>";
$shiful = new Bio("Shiful", 12);
echo $shiful->showBio();
echo "<br/>";
echo $shiful->city;
?>

<h2>Hello world</h2>