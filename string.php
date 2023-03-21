<?php
$my_str = 'Hello world';
$msg = "Hello";
$location = "Dhaka City";
echo strlen($my_str);
echo "<br/>";
echo str_word_count($my_str), " words" . "<br/>";
echo strrev($msg) . "<br/>";
echo strpos($my_str, "world") . "<br/>";
echo str_replace("City", "Bangladesh", $location);
?>

<?php
$x = 4;
$y = $x * 2.5; // 10
echo "<br/>";
echo $y;
echo "<br/>";
var_dump($y);
echo "<br/>";
echo PHP_INT_SIZE . " bytes";
echo "<br/>";
echo is_int($x) . "<br/>";
echo is_int($y) . "int" . "<br/>";
echo is_long($x) . "<br/>";
echo is_integer($x) . "<br/>";

for ($i = 1; $i <= 10; $i++) {
    if ($i === 5 || $i === 6 || $i === 7) {
        continue;
    } else {
        echo "<br/>" . $i;
    }
}
echo "<br/>";
for ($i = 1; $i <= 5; $i++) {
    if ($i === 4) {
        break;
    } else {
        echo "count" . $i . "<br>";
    }
}
?>

<?php
$num = 5.32;
$num2 = 10;
echo is_float($num) . "<br/>";
echo is_double($num2) . "double";
echo "<br/>";
$x = 10.235;
var_dump(is_float($x)) . "<br/>";
echo is_finite($num) . " finite" . "<br/>";
$val = 2734982783742738927852345738927387387298;
echo is_finite($val) . 'is finite' . '<br/>';
// echo is_nan("H") . "nan" . "<br/>";
echo var_dump(is_float($num)) . "<br/>";
echo is_numeric("50") . "<br/>";
$integer = (int)$num;
echo $integer . "<br/>";
echo intval($num);
?>

<h3>php string</h3>