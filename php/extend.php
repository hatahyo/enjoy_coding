<?php


class Tax {
    //軽減税率にフラグに対して消費税を返す
    protected function getRateValue($reduced){
        if ($reduced){
            return 1.08;
        }else{
            return 1.10;
        }
    }   
    
}

class ConsumptionTax extends Tax{
    public function getCalc($cost,$reduced){
        $tax = $this->getRateValue($reduced);
        return (int) ($cost * $tax);
    }
}

$tax = new ConsumptionTax();
echo($tax->getCalc(500,false));
?>