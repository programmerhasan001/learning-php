<?php
$i = 1;
while ($i < 6) {
    echo "while - " . $i . "<br/>";
    $i++;
}

$x = 2;
do {
    echo $x;
    $x++;
} while ($x > 6);
echo "<br/>";
do {
    echo $x, "-";
    $x++;
} while ($x <= 6);

echo "<br/>";

// for loop
for ($i = 5; $i >= 1; $i--) {
    echo $i . " loop" . "<br/>";
}

// for Each
$age = ["salam" => 20, "hasan" => 10, "sahil" => 15];
foreach ($age as $key => $val) {
    echo "$key = $val<br/>";
}

$numbers = [5, 10, 20, 30];
foreach ($numbers as $val) {
    echo $val * $val . " sqrt" . "<br/>";
}
?>

<h4>Php Loops</h4>