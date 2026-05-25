<?php
function obtenerPrestamosActivos(&$datos) {
    $resultado = [];
    for ($i = 0; $i < count($datos['prestamos']); $i++) {
        $p = $datos['prestamos'][$i];
        if ($p['devuelto']) continue;
        $libro = null;
        for ($j = 0; $j < count($datos['libros']); $j++) {
            if ($datos['libros'][$j]['id'] === $p['id_libro']) { $libro = $datos['libros'][$j]; break; }
        }
        $resultado[] = [
            'id'      => $p['id'],
            'usuario' => $p['usuario'],
            'fecha'   => $p['fecha'],
            'titulo'  => $libro ? $libro['titulo'] : '(desconocido)',
            'autor'   => $libro ? $libro['autor']  : '',
        ];
    }
    return $resultado;
}
