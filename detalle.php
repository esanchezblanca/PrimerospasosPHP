<?php
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

function devuelvePlatos(object $conexion, string $id)
{
    return $conexion->query("SELECT * FROM plato WHERE $id");
}
