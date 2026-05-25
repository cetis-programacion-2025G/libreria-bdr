<?php
function eliminarLibro(&$datos, $id) {
    for ($i = 0; $i < count($datos['libros']); $i++) {
        if ($datos['libros'][$i]['id'] === $id) {
            array_splice($datos['libros'], $i, 1);
            return true;
        }
    }
    return false;
}
