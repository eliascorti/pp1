<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo '<p>Con el bucle while: </p>';

        $aux = 0;
        while($aux<10){
            echo ++$aux . '<br>';
        }


        echo '<p>Con el bucle for: </p>';

        for($i=1;$i<11;++$i){
            echo $i . '<br>';
        }
    ?>

</body>
</html>