<!DOCTYPE html>
<!--
Calculo factorial
-->
<html>
    <head>
        <title>Calcular Factorial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <?php
                require 'factorial.php';
                echo "El factorial de 5 es: " . factorial(5);
            ?>
        </div>
    </body>
</html>
