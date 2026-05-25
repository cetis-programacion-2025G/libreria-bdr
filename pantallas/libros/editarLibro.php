<?php
function editarLibro(&$datos) {
    limpiarPantalla();
    echo "\n";
    titulo("EDITAR LIBRO", 81);
    listarLibros($datos);
    if (count($datos['libros']) === 0) return;
    echo "  (0 para cancelar)\n";
    $id = (int)readline("  ID a editar: ");
    if ($id === 0) return;
    $l  = buscarLibro($datos, $id);
    if (!$l) {
        echo "\n  Libro no encontrado.\n";
        esperarEnter();
        return;
    }
    echo "\n  (Enter para conservar el valor actual)\n\n";
    $titulo = readline("  Titulo [{$l['titulo']}]: ");
    if (trim($titulo) === '') $titulo = $l['titulo'];
    $autor = readline("  Autor  [{$l['autor']}]: ");
    if (trim($autor) === '') $autor = $l['autor'];
    actualizarLibro($datos, $id, ['titulo' => $titulo, 'autor' => $autor]);
    echo "\n  Libro actualizado.\n";
    esperarEnter();
}
