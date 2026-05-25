<?php
function pantallaEliminarLibro(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("ELIMINAR LIBRO", 81);
    listarLibros($datos);
    if (count($datos['libros']) === 0) return;
    echo "  (0 para cancelar)\n";
    $id = (int)readline("  ID a eliminar: ");
    if ($id === 0) return;
    $ok = eliminarLibro($datos, $id);
    echo $ok ? "\n  Libro eliminado.\n" : "\n  Libro no encontrado.\n";
    esperarEnter();
}
