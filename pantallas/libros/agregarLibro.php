<?php

function agregarLibro($conn){

    limpiarPantalla();

    echo "\n";

    titulo("AGREGAR LIBRO");

    $titulo=readline("Titulo : ");
    $autor=readline("Autor  : ");

    $id=insertarLibro($conn,$titulo,$autor);

    echo "\nLibro agregado con ID $id.\n";

    esperarEnter();

}
