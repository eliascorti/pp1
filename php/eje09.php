<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario.php</title>
</head>
<body>
    <?php 
    
        echo 'Nombre: ' . $_GET['nombre'] . '<br>';
        echo 'Apellido: ' . $_GET['apellido'] . '<br>';
        echo 'Sexo: ' . ($_GET['sexo'] ?? 'Indefinido'). '<br>';
        echo 'Estado Civil: ' . $_GET['estado'] . '<br>';
        echo 'Recibir informacion: ' . ($_GET['novedades'] ?? 'No') . '<br>';
        echo 'Acepto condiciones: ' . ($_GET['condiciones'] ?? 'No'). '<br>';
    
    ?>
</body>
</html>