<?php
function datosIniciales() {
    $libros = [
        ['id' => 1, 'titulo' => 'El Principito',                      'autor' => 'Antoine de Saint-Exupery', 'disponible' => true],
        ['id' => 2, 'titulo' => 'Don Quijote de la Mancha',           'autor' => 'Miguel de Cervantes',      'disponible' => false],
        ['id' => 3, 'titulo' => 'Cien anos de soledad',               'autor' => 'Gabriel Garcia Marquez',   'disponible' => true],
        ['id' => 4, 'titulo' => 'Harry Potter y la Piedra Filosofal', 'autor' => 'J.K. Rowling',             'disponible' => true],
        ['id' => 5, 'titulo' => 'El Alquimista',                      'autor' => 'Paulo Coelho',             'disponible' => false],
        ['id' => 6, 'titulo' => 'Orgullo y Prejuicio',                'autor' => 'Jane Austen',              'disponible' => true],
    ];

    $prestamos = [
        ['id' => 1, 'id_libro' => 2, 'usuario' => 'Carlos Ramirez', 'fecha' => '2026-05-10', 'devuelto' => false],
        ['id' => 2, 'id_libro' => 5, 'usuario' => 'Sofia Torres',   'fecha' => '2026-05-15', 'devuelto' => false],
    ];

    return ['libros' => $libros, 'prestamos' => $prestamos];
}
