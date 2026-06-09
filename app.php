<?php

require_once 'funciones.php';
require_once 'funciones/conexion.php';

$conn = conectar();

$salir = false;

while (!$salir) {

    limpiarPantalla();
    echo "\n";
    titulo("LIBRERIA — SISTEMA DE PRESTAMOS");
    echo str_repeat("─", 46) . "\n";
    echo " 1. Libros\n";
    echo " 2. Prestamos\n";
    echo " 0. Salir\n";
    echo str_repeat("─", 46) . "\n";

    $opcion = pedirEntero("Opcion", [0,1,2]);

    switch ($opcion) {

        case 1:
            menuLibros($conn);
            break;

        case 2:
            menuPrestamos($conn);
            break;

        case 0:
            $salir = true;
            break;
    }
}

$conn->close();

echo "\nHasta luego.\n";
