<?php

class image
{
    private $dir = "images";
    
    public function __construct($dir,) {
        $this->dir = $dir;
        
        $a = scandir($dir);
        
        echo '<pre>';
        print_r($a);
        echo '</pre>';
        
    }
    
    public function nacti(){
        
    }
    
    public function vypis(){
   
    }
}