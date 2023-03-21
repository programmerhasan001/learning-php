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
?>

<h4>Php Array</h4>