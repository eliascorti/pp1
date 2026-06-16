<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    function esMayor($a,$b){
        if($a > $b){
            echo $a . ' es mayor.';
        }else{
            echo $b . ' es mayor';
        }
    }

    esMayor(3,2);

    ?>

</body>
</html>