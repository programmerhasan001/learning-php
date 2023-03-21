<?php
switch (7) {
    case 3:
        echo "it's three";
        break;
    case 5:
        echo "it's five";
        break;
    case 7:
        echo "it's seven";
        break;
    default:
        echo "nothing matched";
}
echo "<br/>";
$count = 10;
switch ($count) {
    case $count < 20:
        echo "true";
        break;
    case $count < 10:
        echo "true";
        break;
    default:
        echo "nothing matched";
        break;
}
?>

<h4>Php switch case</h4>