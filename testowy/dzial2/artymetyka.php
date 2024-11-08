<?php

class Arytmetyka {

    public ?float $a = null;
    public ?float $b = null;

    public function __construct(float $a1, float $b1){
        $this->a = $a1;
        $this->b = $b1;
    }

    public function suma(){
        return $this->a + $this->b;
    }
    public function roznica(){
        return $this->a - $this->b;
    }
    public function iloczyn(){
        if($this->a==0 || $this->b==0){
            return null;
        }else{
            return $this->a * $this->b;
        }
    }
    public function iloraz(){
        if($this->a==0 || $this->b==0){
            return null;
        }
        return $this->a / $this->b;
    }
    public function reszta(){
        if($this->a==0 || $this->b==0){
            return null;
        }
        return fmod($this->a,$this->b);
    }
    public function potega(){
        return $this->a ** $this->b;
    }

}

?>