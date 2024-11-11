<?php
    require "classes/class.php";
?>

<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form
            method="POST"
            action=<?php
                echo $_SERVER['PHP_SELF'];
            ?>
        >
            1.číslo:
            <br>
            <input 
                name="num1" 
                type="number"
                value= <? isset($_POST["num1"]) ? $_POST["num1"] : "" ?>
            >
            <br>
            2.číslo:
            <br>
            <input 
                name="num2" 
                type="number"
                value= <? isset($_POST["num2"]) ? $_POST["num2"] : "" ?>
            >
            <br>
            <input 
                type="submit" 
                value="Sečti" 
            >
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $N1 = htmlspecialchars($_POST["num1"]);
                $N2 = htmlspecialchars($_POST["num2"]);

                $Object = new Math($N1, $N2);

                $Object->output();
            }
        ?>

    </body>
</html>
