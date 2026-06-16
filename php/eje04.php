<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $cadena1 = 'Comer verduras';
        $cadena2 = ' es realmente sano';
        $cadena3 = $cadena1.$cadena2;
    
        echo 'La palabra verduras comienza en la posicion ' . strpos($cadena3,'verduras');

    ?>
</body>
</html>