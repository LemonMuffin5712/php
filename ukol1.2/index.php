<?php

require 'classes/class.php';

?>

<html>
    <head>
        <title>
            title
        </title>

    </head>
    <body>
        <form method="post">
            
            <label>Objektová kalkulačka  </label>
            <br>
            <br>
            <label>1.číslo: </label>
            <br>
            <input type="text" name="cislo1">
            <br>
            <label>2.číslo: </label>
            <br>
            <input type="text" name="cislo2">
            <br>
            <input type="submit" value="sečti">

        </form>
        <label>vysletky: </label>
        <br>
        
        <?
            $x = new calculator(number1:$_POST["cislo1"],number2:$_POST["cislo2"]);
            $x->output();
        ?>
    </body>
</html>