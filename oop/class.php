 <?php
    class Bio
    {
        public $name;
        public $age;
        public $address;

        function __construct()
        {
        }

        function msg($name, $age, $address)
        {
            $this->name = $name;
            $this->age = $age;
            $this->address = $address;
            return "name " . $this->name . " age " . $age . " address " . $address;
        }
    }

    $bio1 = new Bio();
    echo $bio1->msg("Hasan", 10, "Dhaka");
    echo "<br/>";
    $bio2 = new Bio();
    echo $bio2->msg("sahil", 8, "Dhaka");
    echo "<br/>";
    ?>

<?php
class userInfo
{
    public $name;
    public $email;
    public $city;

    function __construct($name, $email, $city)
    {
        $this->name = $name;
        $this->email = $email;
        $this->city = $city;
    }

    // function showUserInfo()
    // {
    //     return "<b>UserName </b>: " . $this->name . "<b>. Email </b>: " . $this->email . "<b>. City </b>: " . $this->city . "<b>.</b>";
    // }
    function __destruct()
    {
        echo "<b>UserName </b>: " . $this->name . "<b>. Email </b>: " . $this->email . "<b>. City </b>: " . $this->city . "<b>.</b><br/>";
    }
}

// echo $user1->showUserInfo();
$user2 = new userInfo("sayed", "sayed123@gmail.com", "Chittagong");
echo "<br/>";
$user1 = new userInfo("khalid", "khalid@gmail.com", "Dhaka");
// echo $user2->showUserInfo();
?>