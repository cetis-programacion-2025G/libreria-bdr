<?php
// TODO (MySQL):
// INSERT INTO libros (titulo, autor, disponible) VALUES (?, ?, 1)
function insertarLibro(&$datos, $titulo, $autor) {
    $nuevo = [
        'id'         => count($datos['libros']) + 1,
        'titulo'     => $titulo,
        'autor'      => $autor,
        'disponible' => true,
    ];
    $datos['libros'][] = $nuevo;
    return $nuevo['id'];
}
