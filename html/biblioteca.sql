-- Crear la base de datos para la biblioteca
CREATE DATABASE biblioteca;

-- Usar la base de datos
USE biblioteca;

-- Tabla para los libros
CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(100),
    genero VARCHAR(50),
    editorial VARCHAR(100),
    isbn VARCHAR(20),
    cantidad INT DEFAULT 0
);

-- Tabla para los usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(255),
    telefono VARCHAR(20)
);

-- Tabla para los préstamos
CREATE TABLE prestamos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_libro INT,
    id_usuario INT,
    fecha_prestamo DATE,
    fecha_devolucion DATE,
    FOREIGN KEY (id_libro) REFERENCES libros(id),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);
