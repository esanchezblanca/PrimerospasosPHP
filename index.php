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
             "nombre" => "limón",
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
             "nombre" => "salsa",
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
             "nombre" => "arándanos",
             "cantidad" => 20
         ]
        
     ]
     ]
         ];
         

foreach($arrayPlatos as $valor){
    echo'<div>Plato: ' . $valor["titulo"].'</div>';
    echo'<div>Tipo: ' . $valor["tipo de plato"].'</div>';
    echo'<div>Comensales: ' . $valor["comensales"].'</div>';
    echo'<div>Ingredientes:</div>'; 
    foreach($valor['ingredientes'] as $ingrediente){
        echo $ingrediente["nombre"];
    };   
}

    
?>
