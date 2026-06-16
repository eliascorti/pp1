<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        class Empleado{

            private $nombre;
            private $sueldo;

            function __construct($nombre,$sueldo){
                $this->nombre = $nombre;
                $this->sueldo = $sueldo;
            }


            function pagaImpuesto(){
                if(($this->sueldo) > 3000){
                    echo $this->nombre . ' paga impuestos' . '<br>';
                }else{
                    echo $this->nombre . ' no paga impuestos' . '<br>';
                }
            }

        }
    
        //Creo las instancias de objetos.
        $empleado1 = new Empleado('Elias',3500); 
        $empleado2 = new Empleado('Tadeo',2000);

        //Muestro si pagan impuestos.
        $empleado1->pagaImpuesto();
        $empleado2->pagaImpuesto();
    ?>


</body>
</html>