<?php
$nums = array(20, 30, 40);
echo $nums[0];
echo "<br/>";
echo count($nums) . "<br/>";

for ($i = 0; $i < count($nums); $i++) {
    echo $nums[$i] . "<br/>";
}
echo "<br/>";
foreach ($nums as $val) {
    echo $val . "<br/>";
}

$age = array("hasan" => 10, "sahil" => 12, "mahin" => 8);
echo "Hasan is " . $age["hasan"] . " years old.";
echo "<br/>";
print_r($age);
echo "<br/>";

foreach ($age as $key => $val) {
    echo $key . " => " . $val . " ";
}
echo "<br/>";

// two dimensional arrays
$city = array(
    array("dhaka", "rajshahi"),
    array("Feni", "Chittagong"),
);

print_r($city[0][0]);
echo "<br/>";
echo $city[1][0];

for ($i = 0; $i < count($city); $i++) {
    echo "<p><b>Row number - $i</b></p>";
    echo "<ul>";
    for ($x = 0; $x < count($city[$i]); $x++) {
        echo "<li>" . $city[$i][$x] . "</li>";
    }
    echo "</ul>";
}
?>

<h4>Php Array</h4>