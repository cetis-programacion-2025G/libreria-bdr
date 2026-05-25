<?php
function insertarPrestamo(&$datos, $id_libro, $usuario) {
    $nuevo = [
        'id'       => count($datos['prestamos']) + 1,
        'id_libro' => $id_libro,
        'usuario'  => $usuario,
        'fecha'    => date('Y-m-d'),
        'devuelto' => false,
    ];
    $datos['prestamos'][] = $nuevo;
    for ($i = 0; $i < count($datos['libros']); $i++) {
        if ($datos['libros'][$i]['id'] === $id_libro) { $datos['libros'][$i]['disponible'] = false; break; }
    }
    return $nuevo['id'];
}
