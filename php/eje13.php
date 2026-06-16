<?php

class Celda
{
    private int $numero;
    private string $texto;

    public function __construct(int $numero, string $texto)
    {
        $this->numero = $numero;
        $this->texto = $texto;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getTexto(): string
    {
        return $this->texto;
    }
}

class Tabla
{
    private array $celdas = [];

    public function __construct()
    {
        for ($i = 0; $i < 10; $i++) {
            $this->celdas[] = new Celda($i, "Texto celda $i");
        }
    }

    public function mostrarTabla(): void
    {
        echo "<h2>Tabla de una columna y varias filas</h2>";

        echo "<table border='1' cellpadding='8' cellspacing='0'>";

        foreach ($this->celdas as $celda) {
            echo "<tr>";
            echo "<td>";
            echo "Celda nro " . $celda->getNumero() . ": " . $celda->getTexto();
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}

$tabla = new Tabla();
$tabla->mostrarTabla();

?>