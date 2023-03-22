<?php
class InstituteInfo
{
    public $name;
    public $startyear;
    public $address;

    public function __construct($name, $startyear, $address)
    {
        $this->name = $name;
        $this->startyear = $startyear;
        $this->address = $address;
    }

    public function showInfo()
    {
        echo $this->name . " started in " . $this->startyear . " Address : " . $this->address . ".";
    }
}

class StudentInfo extends InstituteInfo
{
    public function message()
    {
        return "There are thousand students in this institute.";
    }
}

$info1 = new StudentInfo("Dpi", 1955, "Tejgaon Dhaka");
echo $info1->message();
echo "<br/>";
echo $info1->showInfo();
echo "<br/>";
?>

<h3>php inheritance</h3>