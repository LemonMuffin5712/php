<?php

class Human {
    public string $jmeno = '';
    public string $prijmeni = '';
    public string $vek = '';
    public string $cas = '';


    public function pozdrav(){
        echo 'Ahoj, jmenuji se ' . $this-> jmeno . ' ' . $this-> prijmeni . '<br>';
    }
    
    public function vek(){
        
        echo 'je mi ' . $this-> vek . 'let, budu 100 let za ' . 100-$this->vek . 'let' . '<br>';
        
    }
   
    public function zbyvaletdosto($vek) {
 
        echo 'je mi ' . $vek . 'let, budu 100 let za ' . 100-$vek . 'let' . '<br>';
        
    }
    
    public function pozdravPodleCas() {
        if ($this->cas == "rano"){
            echo 'Dobre rano' . '<br>' ;
        }
    }
    
}
