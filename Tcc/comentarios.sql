CREATE DATABASE IF NOT EXISTS Comentarios CHARSET utf8;

USE Comentarios;

CREATE TABLE cliente (
idCliente INT NOT NULL auto_increment,
nome            VARCHAR(50),
sobrenome       VARCHAR(50),
estado          VARCHAR(100),
comentario      VARCHAR(300),

PRIMARY KEY (idCliente)
);
