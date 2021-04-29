<?php

interface Ipayment{

    public function pay($cost);
}

class Cash implements Ipayment{
    public $TAX = 1.08;
    public function pay($cost){
        echo("キャッシュで".$cost * $this->TAX ."円支払う");
    }
}

class CreditCard implements Ipayment{
    public const TAX = 1.10;
    public function pay($cost){
        echo("クレカで".$cost * self::TAX."円支払う");
    }
}

$cash = new Cash();
$cash->pay(1000);
echo "<br>";
$cash = new CreditCard();
$cash->pay(1000);

?>