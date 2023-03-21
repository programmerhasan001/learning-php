<?php
$nums = [5, 4, 3, 2, 1];
sort($nums);
print_r($nums);

$num2 = [1, 2, 3, 4, 5];
sort($num2);

echo "<br/>";
foreach ($num2 as $val) {
    echo $val . "<br/>";
}

$num3 = [1, 3, 101, 4, 5, 404];
sort($num3);
echo "<br/>";
foreach ($num3 as $val) {
    echo $val . "<br/>";
}
?>

<h4>Array Sort</h4>