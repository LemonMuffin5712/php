<?php

class calculator{

    public $cislo1;
    public $cislo2;

    public function __construct($number1,$number2) {
        $this->cislo1=$number1;
        $this->cislo2=$number2;
    }

    

    private function soucet(){
        return $this->cislo1 + $this->cislo2;
    }

    private function rozdil(){
        return $this->cislo1 - $this->cislo2;
    }

    private function soucin(){
        return $this->cislo1 * $this->cislo2;
    }

    private function podil(){

        return $this->cislo1 / $this->cislo2;
    }

    public function output() {
        echo "soucet: " . $this->soucet() . "<br>";
        echo "rozdil: " . $this->rozdil() . "<br>";
        echo "soucin: " . $this->soucin() . "<br>";
        echo "podil: " . $this->podil() . "<br>";
    }
}

  

?>