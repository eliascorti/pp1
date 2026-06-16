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

        public function __construct($nombre,$edad){
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

        public function mostrar(){
            echo 'Nombre: '.$this->nombre.'<br>'.'Edad: '.$this->edad;
            echo '<br>';
        }

    }
    
    class Empleado extends Persona{

        private $sueldo;

        public function __construct($nombre,$edad,$sueldo){
            parent::__construct($nombre,$edad);
            $this->sueldo = $sueldo;
        }

        public function getSueldo() {
            return $this->sueldo;
        }

        public function setSueldo($sueldo) {
            $this->sueldo = $sueldo;
        }

        public function mostrar(){
            parent::mostrar();
            echo 'Sueldo: '.$this->sueldo.'<br>';
        }
        

    }

    echo 'Datos de persona:'.'<br>';
    $persona1 = new Persona('Joaquin','25');
    echo $persona1->mostrar();

    echo '<br>';

    echo 'Datos de empleado:'.'<br>';
    $empleado1 = new Empleado('Joaquin','25','25000');
    echo $empleado1->mostrar();

    ?>
</body>
</html>