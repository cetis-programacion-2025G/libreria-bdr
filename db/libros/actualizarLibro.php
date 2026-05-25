<?php
function actualizarLibro(&$datos, $id, $cambios) {
    for ($i = 0; $i < count($datos['libros']); $i++) {
        if ($datos['libros'][$i]['id'] === $id) {
            $datos['libros'][$i]['titulo'] = $cambios['titulo'];
            $datos['libros'][$i]['autor']  = $cambios['autor'];
            return $datos['libros'][$i];
        }
    }
    return null;
}
