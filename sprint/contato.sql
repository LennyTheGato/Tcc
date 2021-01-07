CREATE DATABASE IF NOT EXISTS medicinadaterra CHARSET utf8;

USE contato;

CREATE TABLE cliente (
idCliente INT NOT NULL auto_increment,
nome      VARCHAR(50),
email     VARCHAR(50),
telefone  VARCHAR(15),
mensagem     VARCHAR(100),

PRIMARY KEY (idCliente)
);
