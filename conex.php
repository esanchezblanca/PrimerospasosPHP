<?php 
$mysqli = new mysqli("localhost", "root", "", "restaurante");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$platos = $mysqli->query("SELECT * FROM plato");

// var_dump($plato->fetch_assoc());

// // echo $plato['nombre'];

// var_dump($resultado = $plato->fetch_array());


// echo $resultado['nombre'];


//Hace lo mismo que las líneas de arriba. Hasta que devuelve un false
//Ahí se sale del array

// while ($resultado = $plato->fetch_assoc()) {
//     var_dump($resultado);
// }

//Forma nueva

foreach ($platos as $plato) {
    var_dump($plato);
}