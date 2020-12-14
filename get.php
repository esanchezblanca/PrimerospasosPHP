<?php

declare(strict_types=1);


function conexion(string $host, string $user, string $password, string $database): object
{
    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        exit;
    }
    return ($mysqli);
}

$mysqli = conexion("localhost", "root", "", "restaurante");

$platos = $mysqli->query("SELECT * FROM plato");


function devuelvePlatos(object $conexion, string $id)
{
    return $conexion->query("SELECT * FROM plato WHERE $id");
}

function devuelveIngrediente(object $conexion, string $plato): object
{
    return $conexion->query("SELECT puente.cantidad, ingrediente.ingrediente FROM puente LEFT JOIN
    ingrediente ON puente.idingrediente=ingrediente.id WHERE idplato=$plato");
}

foreach (devuelvePlatos($mysqli, $_GET["id"]) as $plato) { ?>
    <ul>
        <li> 
        <a href="detalle.php">
        Plato: <?= $plato["nombre"] ?>
        </a>
        </li>

        
    </ul>
<?php }