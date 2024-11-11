<?php

require 'Human.php';

?>

<html>
    <head>
        <title>
            title
        </title>
    </head>
    <body>
        <?php
        $clovek1 = new Human();
        $clovek1->jmeno = 'Karel';
        $clovek1->prijmeni = 'Vykropil';
        $clovek1->vek = '42';           
        $clovek1->cas = "rano";           
        $clovek1->pozdrav(5);  
        $clovek1->vek(); 
        $clovek1->pozdravPodleCas();
        
        $clovek2 = new Human();
        $clovek2->jmeno = 'Yifei';
        $clovek2->prijmeni = 'Hou';
//       $clovek2->vek = '18';       
        $clovek2->pozdrav();  
        $clovek2->zbyvaletdosto(18);  

        ?>
    </body>
</html>