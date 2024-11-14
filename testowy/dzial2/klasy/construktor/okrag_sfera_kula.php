<?php

class OkragSferaKula{

    private ?int $prom = null;

    public function __construct(int $r) {
        $this->prom = $r;
    }

    public function obw(){
        $obw = 2 * pi() * $this->prom;
        return number_format($obw, 2, ",", " ");
    }
    public function pole(){
        $pole = 4 * pi() * $this->prom * pow($this->prom, 2);
        return number_format($pole, 2, ",", " ");
    }
    public function obj(){
        $obj = (1/3) * 4 * pi() * pow($this->prom, 3);
        return number_format($obj, 2, ",", " ");
    }

}

?>