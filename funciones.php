<?php
// ============================================================
//  funciones.php — Carga todos los modulos del sistema
//  Cada carpeta = un tema, cada archivo = una funcion
// ============================================================

// --- Utilidades ---
require_once 'funciones/centrar.php';
require_once 'funciones/titulo.php';
require_once 'funciones/limpiarPantalla.php';
require_once 'funciones/esperarEnter.php';
require_once 'funciones/pedirEntero.php';
require_once __DIR__ . '/funciones/mb_str.php';
require_once 'funciones/dibujarTabla.php';
require_once 'funciones/datos.php';
require_once 'funciones/conexion.php';

// --- DB: Libros ---
require_once 'db/libros/obtenerLibros.php';
require_once 'db/libros/buscarLibro.php';
require_once 'db/libros/insertarLibro.php';
require_once 'db/libros/actualizarLibro.php';
require_once 'db/libros/eliminarLibro.php';

// --- DB: Prestamos ---
require_once 'db/prestamos/obtenerPrestamosActivos.php';
require_once 'db/prestamos/insertarPrestamo.php';
require_once 'db/prestamos/cerrarPrestamo.php';

// --- Pantallas: Libros ---
require_once 'pantallas/libros/listarLibros.php';
require_once 'pantallas/libros/agregarLibro.php';
require_once 'pantallas/libros/editarLibro.php';
require_once 'pantallas/libros/eliminarLibro.php';
require_once 'pantallas/libros/menuLibros.php';

// --- Pantallas: Prestamos ---
require_once 'pantallas/prestamos/listarPrestamos.php';
require_once 'pantallas/prestamos/prestarLibro.php';
require_once 'pantallas/prestamos/devolverLibro.php';
require_once 'pantallas/prestamos/menuPrestamos.php';
