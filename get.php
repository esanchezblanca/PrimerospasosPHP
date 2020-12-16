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

function devuelvePlatos(object $mysqli)
{
    return $mysqli->query("SELECT * FROM plato");
}

foreach (devuelvePlatos($mysqli) as $plato) { ?>
  
  <ul>
        <li> 
            <a href="http://localhost:81/prueba/detalle.php?id=<?= $plato["id"] ?>">
                Plato: <?= $plato["nombre"] ?>
            </a>
        </li>
      
    </ul>

    

<?php }