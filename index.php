<?php
// Ejecutar: php index.php

require_once 'datos.php';
require_once 'funciones.php';

$datos    = datosLibreria();
$libros   = &$datos['libros'];
$prestamos = &$datos['prestamos'];
$salir    = false;

while (!$salir) {
    system('clear');
    echo "\n";
    echo "╔════════════════════════════════════════╗\n";
    echo "║        SISTEMA DE LIBRERÍA            ║\n";
    echo "╠════════════════════════════════════════╣\n";
    echo "║ 1. Ver libros                         ║\n";
    echo "║ 2. Agregar libro                      ║\n";
    echo "║ 3. Prestar libro                      ║\n";
    echo "║ 4. Devolver libro                     ║\n";
    echo "║ 5. Ver préstamos activos              ║\n";
    echo "║ 0. Salir                              ║\n";
    echo "╚════════════════════════════════════════╝\n";

    $opcion = readline("\nOpcion: ");

    switch ($opcion) {
        case '1': verLibros($libros);                       break;
        case '2': agregarLibro($libros);                    break;
        case '3': prestarLibro($libros, $prestamos);        break;
        case '4': devolverLibro($libros, $prestamos);       break;
        case '5': verPrestamosActivos($libros, $prestamos); break;
        case '0': $salir = true;                            break;
        default:
            echo "Opcion no valida.\n";
            readline("Enter para continuar...");
    }
}

echo "\nHasta luego.\n";
