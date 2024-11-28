<?php
include('ppk.php');

class Stozek extends Prze{
    private ?float $promien = null;
    private ?float $wysokosc = null;

    public function __construct($r,$h){
        $this->promien = $r;
        $this->wysokosc = $h;
    }

    private function pole_podstawy(): float{
        return Pi()*pow($this->promien,2);
    }

    private function pole_boczne(): float{
        return Pi()*$this->promien*$this->PPK($this->promien,$this->wysokosc);
    }

    public function pole_calkowite(): float{
        return $this->pole_boczne() + $this->pole_podstawy();
    }

    public function objetosc(): float{
        return (1/3) * Pi() * pow($this->promien,2) * $this->wysokosc;
    }

}

?>