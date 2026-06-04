<?php


$conexion = new mysqli(
    "localhost",
    "root",
    "",
    "mi_base"
);

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

echo "Conectado correctamente";

?>

//function conectar() {
    // TODO: implementar conexion real con MySQL
    // $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // if ($conn->connect_error) die("Error de conexion: " . $conn->connect_error . "\n");
    // $conn->set_charset('utf8mb4');
    // return $conn;
    return null;
}
