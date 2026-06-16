<?php

class Celda
{
    private int $nro;
    private string $texto;

    public function __construct(int $nro, string $texto)
    {
        $this->nro = $nro;
        $this->texto = $texto;
    }

    public function getNro(): int
    {
        return $this->nro;
    }

    public function getTexto(): string
    {
        return $this->texto;
    }
}

class Tabla
{
    private array $celdas = [];

    public function add(Celda $celda): void
    {
        $this->celdas[] = $celda;
    }

    public function mostrarCeldas(): void
    {
        echo "<h2>Tabla de una columna y varias filas</h2>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";

        foreach ($this->celdas as $celda) {
            echo "<tr>";
            echo "<td>Celda nro " . $celda->getNro() . ": " . $celda->getTexto() . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}

$tabla = new Tabla();

for ($i = 0; $i < 10; $i++) {
    $celda = new Celda($i, "Texto celda $i");
    $tabla->add($celda);
}

$tabla->mostrarCeldas();

?>