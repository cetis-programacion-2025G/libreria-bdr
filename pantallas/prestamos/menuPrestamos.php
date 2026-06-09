<?php

function menuPrestamos($conn){

    $salir=false;

    while(!$salir){

        limpiarPantalla();

        echo "\n";

        titulo("PRESTAMOS",75);

        echo str_repeat("─",77)."\n";
        echo " 1. Ver prestamos activos\n";
        echo " 2. Prestar libro\n";
        echo " 3. Devolver libro\n";
        echo " 0. Regresar\n";
        echo str_repeat("─",77)."\n";

        $op=pedirEntero("Opcion",[0,1,2,3]);

        switch($op){

            case 1:
                limpiarPantalla();
                listarPrestamos($conn);
                esperarEnter();
                break;

            case 2:
                limpiarPantalla();
                prestarLibro($conn);
                break;

            case 3:
                limpiarPantalla();
                devolverLibro($conn);
                break;

            case 0:
                $salir=true;
                break;

        }

    }

}