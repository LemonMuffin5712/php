<?php
function autoloadClasses(string $class): void {
    if (file_exists(filename: "classes/" . $class . ".php")) {
        require "classes/" . $class . ".php";
    } else {
        echo "Class " . $class . " does not exist";
        exit;
    }
}

spl_autoload_register(callback: "autoloadClasses");
?>

<?php

require 'classes/image.php';

    $x = new image();
    $x->f;
/*
$dir = "images";

$a = scandir($dir);

echo '<pre>';
print_r($a);
echo '</pre>';
*/

?>

