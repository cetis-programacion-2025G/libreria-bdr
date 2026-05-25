<?php
function devolverLibro(&$datos) {
    echo "\n";
    titulo("DEVOLVER LIBRO", 75);
    listarPrestamos($datos);
    $activos = array_values(array_filter($datos['prestamos'], fn($p) => !$p['devuelto']));
    if (empty($activos)) {
        echo "\n  No hay prestamos activos.\n";
        esperarEnter();
        return;
    }
    $ids = array_column($activos, 'id');
    echo "  (0 para cancelar)\n";
    $id_prestamo = pedirEntero("ID del prestamo", array_merge($ids, [0]));
    if ($id_prestamo === 0) { echo "\n  Cancelado.\n"; esperarEnter(); return; }
    if (cerrarPrestamo($datos, $id_prestamo)) {
        echo "\n  Devolucion registrada. El libro ya esta disponible.\n";
    } else {
        echo "\n  Prestamo no encontrado.\n";
    }
    esperarEnter();
}
