<?php

function editarLibro($conn) {

    limpiarPantalla();
    echo "\n";

    titulo("EDITAR LIBRO", 81);

    listarLibros($conn);

    echo "  (0 para cancelar)\n";

    $id = (int) readline("  ID a editar: ");

    if ($id == 0) {
        return;
    }

    $stmt = $conn->prepare("SELECT * FROM libros WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $l = $resultado->fetch_assoc();

    if (!$l) {
        echo "\n  Libro no encontrado.\n";
        esperarEnter();
        return;
    }

    echo "\n  (Enter para conservar el valor actual)\n\n";

    $titulo = readline("  Titulo [{$l['titulo']}]: ");
    if (trim($titulo) == "") {
        $titulo = $l['titulo'];
    }

    $autor = readline("  Autor  [{$l['autor']}]: ");
    if (trim($autor) == "") {
        $autor = $l['autor'];
    }

    $stmt = $conn->prepare(
        "UPDATE libros
         SET titulo = ?, autor = ?
         WHERE id = ?"
    );

    $stmt->bind_param("ssi", $titulo, $autor, $id);
    $stmt->execute();

    echo "\n  Libro actualizado.\n";
    esperarEnter();
}