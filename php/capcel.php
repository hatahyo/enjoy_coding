<?php
   // TAXクラス定義
class tax {
    //軽減税率にフラグに対して消費税を返す
    private function getRateValue($reduced){
        if ($reduced){
            return 1.08;
        }else{
            return 1.10;
        }
    }

    //第２引数に軽減税率フラグをもたせる
    public function getCalc($cost, $reduced){
        $tax = $this->getRateValue($reduced);
        return (int) ($cost * $tax);
    }
}

$tax = new Tax();
echo($tax->getCalc(3300,true));
//echo($tax->getCalc(100,false));
?>

