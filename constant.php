<?php
define("GREETING", "Welcome");
echo GREETING . "<br/>";

function greet()
{
    echo GREETING . " " . "to our school";
}
greet();

define("NUMBERS", [4, 5, 6], true);
echo '<br/>';
echo numbers[0];

$myNum = [5, 10, 15];
$myNum[0] = 20;
echo "<br/>" . $myNum[0];
?>


<h4>Php constant</h4>