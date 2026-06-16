<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        function volumenCilindro($radio,$altura){
            $volumen = 3.1416 * ($radio * $radio) * $altura;
            echo "El volumen es: " . $volumen;
            }
    
        volumenCilindro(25,50);
        
    ?>
</body>
</html>