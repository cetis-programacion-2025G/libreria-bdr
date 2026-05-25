<?php
// ============================================================
//  app.php — Punto de entrada
//  Ejecutar: php app.php
// ============================================================

require_once 'funciones.php';

// TODO: cuando implementes MySQL, reemplaza las dos lineas siguientes por:
//   $conn = conectar();
$datos = datosIniciales();

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

    $opcion = pedirEntero("Opcion", [0, 1, 2]);

    switch ($opcion) {
        case 1:
            menuLibros($datos);
            break;
        case 2:
            menuPrestamos($datos);
            break;
        case 0:
            $salir = true;
            break;
    }
}

// TODO: cuando uses MySQL, agrega aqui: $conn->close();
echo "\nHasta luego.\n";
