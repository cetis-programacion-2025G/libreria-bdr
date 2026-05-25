<?php
function agregarLibro(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("AGREGAR LIBRO");
    $titulo = readline("Titulo : ");
    $autor  = readline("Autor  : ");
    $id = insertarLibro($datos, $titulo, $autor);
    echo "\n  Libro agregado con ID $id.\n";
    esperarEnter();
}
