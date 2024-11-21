<?php

class Gest{
    private ?int $prom = null;
    private ?string $subst = null;
    private ?int $gestosc = null;

    public function __construct($s,$r) {
        $this->subst = $s;
        $this->prom = $r;
    }

    private function obj(){
        $obj = (4/3) * pi() * pow($this->prom,3);
        return $obj;
    }

    public function masa(){
        $gest_gips = 2350;
        $gest_rtec = 13534;
        $gest_zlota = 19280;
        $gest_wody = 997;

        if($this->subst=="gipsu")
            return (($gest_gips * $this->obj())/1000000);
        else if($this->subst=="rtęci")
            return (($gest_rtec * $this->obj())/1000000);
        else if($this->subst=="złota")
            return (($gest_zlota * $this->obj())/1000000);
        else if($this->subst=="woda")
            return (($gest_wody * $this->obj())/1000000);
    }
}

?>