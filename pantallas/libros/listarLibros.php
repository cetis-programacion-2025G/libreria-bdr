<?php

function listarLibros($conn){

    $filas=obtenerLibros($conn);

    foreach($filas as &$fila){
        $fila["disponible"]=$fila["disponible"]?"Si":"No";
    }

    $columnas=[
        ['titulo'=>'ID','clave'=>'id','ancho'=>4],
        ['titulo'=>'Titulo','clave'=>'titulo','ancho'=>32],
        ['titulo'=>'Autor','clave'=>'autor','ancho'=>24],
        ['titulo'=>'Disponible','clave'=>'disponible','ancho'=>10],
    ];

    echo "\n";

    dibujarTabla($filas,$columnas);

}