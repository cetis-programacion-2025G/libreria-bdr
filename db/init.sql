CREATE DATABASE libreria_escolar;

USE libreria_escolar;

CREATE TABLE usuarios(
     id_usuario INT AUTO_INCREMENT
     PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        grupo VARCHAR(50)
);
CREATE TABLE libros(
        id_libro INT AUTO_INCREMENT
        PRIMARY KEY,
        título VARCHAR(100) NOT NULL,
        autor VARCHAR(100),
        disponible BOOLEAN DEFAULT TRUE
);
CREATE TABLE PRESTAMOS (
    id_prestamos INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_libro INT,
    fecha_prestamo DATE,
    estado VARCHAR(20),

    FOREIGN KEY (id_usuario)
        REFERENCES usuarios(id_usuario)
        ON UPDATE CASCADE
        ON DELETE RESTRICT,

    FOREIGN KEY (id_libro)
        REFERENCES libros(id_libro)
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);
INSERT INTO usuarios(nombre, grupo)
VALUES
('Juan Perez', '4A'),
('Maria Gomez', '4B');
INSERT INTO libros(titulo, autor)
VALUES
('Don Quijote', 'Miguel de Cervantes'),
('Cien Años de Soledad', 'Gabriel Garcia Marquez');