<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $pais = array (
        
        "espana" => array
            (
                "nombre" => "España",
                "lengua" => "Español",
                "moneda" => "Euro"
            ),
        "brasil" => array
            (
                "nombre" => "Brasil",
                "lengua" => "Portugués",
                "moneda" => "Real"
            ),
        "argentina" => array
            (
                "nombre" => "Argentina",
                "lengua" => "Español",
                "moneda" => "Peso"
            )
    );
    
    echo $pais["espana"]["moneda"];

    ?>
</body>
</html>