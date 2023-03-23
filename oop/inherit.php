<?php
class ProductInfo
{
    public $title;
    public $price;

    function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    protected function showInfo()
    {
        echo "Title: " . $this->title . " price : " . $this->price;
    }
}

$product1 = new ProductInfo("Samsung TV", "$500");

class Product extends ProductInfo
{
    public function display()
    {
        return $this->showInfo();
    }
}

$p1 = new Product("Apple watch", "$500");
echo $p1->display();
echo "<br/>";
echo $p1->price . " Product Price only.";

?>

<h4>Inherit php</h4>