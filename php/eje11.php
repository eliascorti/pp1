<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        class Persona{

            private $nombre;
            private $edad;

            public function __construct($nombre = '', $edad = 0) {
                $this->nombre = $nombre;
                $this->edad = $edad;
            }


            public function getNombre() {
                return $this->nombre;
            }

            public function setNombre($nombre) {
                $this->nombre = $nombre;
            }

            public function getEdad() {
                return $this->edad;
            }

            public function setEdad($edad) {
                $this->edad = $edad;
            } 
        }
    
        class Empleado extends Persona{
            
            private $sueldo;

            public function __construct($sueldo = 0) {
                $this->sueldo = $sueldo;
            }
        

            public function getSueldo() {
                return $this->sueldo;
            }

            public function setSueldo($sueldo) {
                $this->sueldo = $sueldo;
            }

        }

        $persona1 = new Persona();

        $persona1->setNombre('Elias');
        $persona1->setEdad(25);

        echo $persona1->getNombre() . '<br>';
        echo $persona1->getEdad() . '<br>';

        $empleado = new Empleado();

        $empleado->setSueldo(25000);
        echo $empleado->getSueldo() . '<br>';
    ?>
</body>
</html>
