<?php
function cerrarPrestamo(&$datos, $id_prestamo) {
    for ($i = 0; $i < count($datos['prestamos']); $i++) {
        if ($datos['prestamos'][$i]['id'] === $id_prestamo && !$datos['prestamos'][$i]['devuelto']) {
            $datos['prestamos'][$i]['devuelto'] = true;
            for ($j = 0; $j < count($datos['libros']); $j++) {
                if ($datos['libros'][$j]['id'] === $datos['prestamos'][$i]['id_libro']) {
                    $datos['libros'][$j]['disponible'] = true;
                    break;
                }
            }
            return true;
        }
    }
    return false;
}
