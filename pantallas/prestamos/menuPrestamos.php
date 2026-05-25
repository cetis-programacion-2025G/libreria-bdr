<?php
function menuPrestamos(&$datos) {
    $salir = false;
    while (!$salir) {
        limpiarPantalla();
        echo "\n";
        titulo("PRESTAMOS", 75);
        echo str_repeat("─", 77) . "\n";
        echo " 1. Ver prestamos activos\n";
        echo " 2. Prestar libro\n";
        echo " 3. Devolver libro\n";
        echo " 0. Regresar\n";
        echo str_repeat("─", 77) . "\n";

        $op = pedirEntero("Opcion", [0, 1, 2, 3]);
        switch ($op) {
            case 1:
                limpiarPantalla();
                listarPrestamos($datos);
                esperarEnter();
                break;
            case 2:
                limpiarPantalla();
                prestarLibro($datos);
                break;
            case 3:
                limpiarPantalla();
                devolverLibro($datos);
                break;
            case 0:
                $salir = true;
                break;
        }
    }
}
