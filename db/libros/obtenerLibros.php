<?php

function obtenerLibros($conn){

    $sql="SELECT * FROM libros ORDER BY titulo";

    $resultado=$conn->query($sql);

    return $resultado->fetch_all(MYSQLI_ASSOC);

}
