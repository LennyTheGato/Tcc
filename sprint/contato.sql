CREATE DATABASE IF NOT EXISTS medicinadaterra CHARSET utf8;

USE medicinadaterra;

CREATE TABLE mensagem (
id INT NOT NULL auto_increment,
nome      VARCHAR(220),
email     VARCHAR(220),
telefone  CHAR(15),
mensagem     TEXT,

PRIMARY KEY (id)
);
