<?php
function menuLibros(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("LIBROS", 81);
        listarLibros($datos);
        echo "\n";
        echo str_repeat("─", 83) . "\n";
        echo " 1. Agregar libro\n";
        echo " 2. Editar libro\n";
        echo " 3. Eliminar libro\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 83) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2, 3]);
        switch ($op) {
            case 1:
                agregarLibro($datos);
                break;
            case 2:
                editarLibro($datos);
                break;
            case 3:
                pantallaEliminarLibro($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
