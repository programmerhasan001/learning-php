<?php
class Company
{
    const COMPANY_NAME = "unlockLive";

    function message()
    {
        return self::COMPANY_NAME . " It Ltd.";
    }
}

echo Company::COMPANY_NAME;
echo "<br/>";
$c1 = new Company();
echo $c1->message();
