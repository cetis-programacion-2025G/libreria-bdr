<?php
function listarPrestamos(&$datos) {
    $filas = obtenerPrestamosActivos($datos);
    $columnas = [
        ['titulo' => 'ID',      'clave' => 'id',      'ancho' => 4],
        ['titulo' => 'Usuario', 'clave' => 'usuario', 'ancho' => 20],
        ['titulo' => 'Titulo',  'clave' => 'titulo',  'ancho' => 28],
        ['titulo' => 'Fecha',   'clave' => 'fecha',   'ancho' => 12],
    ];
    echo "\n";
    titulo('PRESTAMOS ACTIVOS', 75);
    dibujarTabla($filas, $columnas);
}
