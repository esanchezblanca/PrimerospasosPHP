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

$plato = $mysqli->query("SELECT * FROM plato");



function devuelvePlato(object $conexion, string $id)
{
    $conexion->query("SELECT * FROM plato WHERE id=$id");
    // if(empty($conexion == 0)) {
    //     header('http://localhost:81/error.php');
    //    exit;
    // }
    var_dump($conexion);
    return $conexion;
}

function devuelveIngrediente(object $conexion, string $plato): object
{
    return $conexion->query("SELECT * FROM puente LEFT JOIN
    ingrediente ON ingrediente.id=puente.idingrediente  WHERE idplato=$plato");

    return $conexion->query("SELECT * FROM puente LEFT JOIN ingrediente
ON ingrediente.id = plato_Ingredientes.id_Ingredientes
WHERE Platos_Ingredientes.id_Platos = $plate");
}

//if(isset($plato)) {
//echo 'Cargando';
//}

foreach (devuelvePlato($mysqli, $_GET["id"]) as $plato) {
    var_dump($plato);
?>
    <ul>
        <li>Plato: <?= $plato["nombre"] ?></li>
        <li>Comensales: <?= $plato["comensales"] ?></li>
        <li>Tipo: <?= $plato["tipo"] ?>
        <li>Ingredientes:</li>


    </ul>
<?php }
