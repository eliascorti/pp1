<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo '<table border="1" cellpadding="5">';
    echo '<tr><th>X</th>';

    for($j=1; $j<=10;$j++){
        echo '<th>'.$j.'</th>';
    }

    echo '</tr>';

        for($i=1;$i<=10;$i++){
            echo '<tr><th>'.$i.'</th>';
            for($j=1;$j<=10;$j++){
                
                echo '<td>'.($i*$j).'</td>';
            }
            echo '<br>';
        }
    ?>
</body>
</html>