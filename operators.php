<?php
$x = 15;
$y = 10;

echo $x <=> $y;
echo "<br/>";

if ($x > 5 xor $y < 5) {
    echo "Hello";
}
?>

<?php
// array operator
$num = array("a" => 1, "b" => 2, "c" => 3);
$num2 = array("a" => 1, "b" => 2);
$num3 = array("a" => 1, "c" => 3, "b" => 2);
$num4 = array("a" => 1, "c" => 3, "b" => 2);
$num5 = array("a" => 1, "c" => 3, "b" => "2");
echo "<br/>";
print_r($num + $num2);
echo "<br/>";
var_dump($num === $num2);
echo "<br/>";
var_dump($num == $num3);
echo "<br/>";
var_dump($num === $num3);
echo "<br/>";
var_dump($num != $num2);
echo "<br/>";
var_dump($num4 === $num5);
?>

<h4>php operators</h4>