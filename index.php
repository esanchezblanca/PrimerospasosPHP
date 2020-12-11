<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
<?php 

include 'header.php';

echo "$cabecera a mi página";
?>
</h1>

<?php 
$arrayPlatos = [
    ["titulo" => "pollo",
     "comensales" => 2,
     "tipo de plato" => "primero",
     "ingredientes" => [
         [
            "nombre" => "pollo",
            "cantidad" => 2,
         ],
         [
             "nombre" => ", limón",
             "cantidad" => 24
         ]
        
     ]
         ],

        ["titulo" => "merluza",
        "comensales" => 5,
        "tipo de plato" => "segundo",
        "ingredientes" => [
         [
            "nombre" => "merluza",
            "cantidad" => 2,
         ],
         [
             "nombre" => ", salsa",
             "cantidad" => 24
         ]
        
     ]
         ],

         ["titulo" => "tarta",
     "comensales" => 10,
     "tipo de plato" => "postre",
     "ingredientes" => [
         [
            "nombre" => "queso",
            "cantidad" => 10,
         ],
         [
             "nombre" => ", arándanos",
             "cantidad" => 20
         ]
        
     ]
     ]
         ];
?>       

<?php 
foreach($arrayPlatos as $valor){

    echo '<li style="color: red">Plato: ' . $valor["titulo"].'
    
        <ul style="color: blue">Tipo: ' . $valor["tipo de plato"].'</ul>
        <ul style="color: green">Comensales: ' . $valor["comensales"].'</ul>
        <ul style="color: orange">Ingredientes:</ul>'; 
           foreach($valor['ingredientes'] as $ingrediente){
             echo $ingrediente["nombre"];
     };   
    
    
}

?>

<h2>

<?php 
include 'footer.php';
echo "$pie que vaya bien";
?>
</h2>


</body>
</html>


