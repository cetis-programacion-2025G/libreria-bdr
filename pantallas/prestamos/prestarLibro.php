<?php
function prestarLibro(&$datos) {
    echo "\n";
    titulo("PRESTAR LIBRO", 68);
    $disponibles = array_values(array_filter($datos['libros'], fn($l) => $l['disponible']));
    if (empty($disponibles)) {
        echo "\n  No hay libros disponibles.\n";
        esperarEnter();
        return;
    }
    $columnas = [
        ['titulo' => 'ID',     'clave' => 'id',     'ancho' => 4],
        ['titulo' => 'Titulo', 'clave' => 'titulo', 'ancho' => 32],
        ['titulo' => 'Autor',  'clave' => 'autor',  'ancho' => 24],
    ];
    dibujarTabla($disponibles, $columnas);
    $ids = array_column($disponibles, 'id');
    echo "  (0 para cancelar)\n";
    $id_libro = pedirEntero("ID del libro", array_merge($ids, [0]));
    if ($id_libro === 0) { echo "\n  Cancelado.\n"; esperarEnter(); return; }
    $usuario = readline("Nombre del usuario : ");
    $id = insertarPrestamo($datos, $id_libro, $usuario);
    echo "\n  Prestamo registrado con ID $id.\n";
    esperarEnter();
}
