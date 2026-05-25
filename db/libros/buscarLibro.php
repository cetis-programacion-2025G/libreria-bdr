<?php
function buscarLibro(&$datos, $id) {
    for ($i = 0; $i < count($datos['libros']); $i++) {
        if ($datos['libros'][$i]['id'] === $id) return $datos['libros'][$i];
    }
    return null;
}
