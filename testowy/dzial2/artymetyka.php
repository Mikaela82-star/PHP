<?php

class Arytmetyka {

    public function __construct(float $a, float $b){
        $this->liczbaA = $a;
        $this->liczbaB = $b;
    }

    public function suma(){
        return $this->a + $this->$b;
    }
    public function roznica(){
        return $this->a - $this->b;
    }
    public function iloczyn(){
        if($this->a==0 || $this>b==0){
            return null;
        }
        return $this->a * $this->b;
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