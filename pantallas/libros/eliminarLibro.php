<?php

function pantallaEliminarLibro($conn) {

    limpiarPantalla();
    echo "\n";

    titulo("ELIMINAR LIBRO", 81);

    listarLibros($conn);

    echo "  (0 para cancelar)\n";

    $id = (int) readline("  ID a eliminar: ");

    if ($id == 0) {
        return;
    }

    $stmt = $conn->prepare("DELETE FROM libros WHERE id = ?");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "\n  Libro eliminado.\n";
    } else {
        echo "\n  Libro no encontrado.\n";
    }

    esperarEnter();
}