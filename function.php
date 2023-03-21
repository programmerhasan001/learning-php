<?php

declare(strict_types=1);
function greet($name = "Sahil")
{
    echo "Welcome" . " " . $name;
}

greet("Hasan");
echo "<br/>";
greet();

$x = 10;
function chng(&$val)
{
    $val += 5;
}

chng($x);
echo "<br/>";
echo $x;
?>

<h4>Php Funcitons</h4>