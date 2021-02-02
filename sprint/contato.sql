SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


CREATE DATABASE IF NOT EXISTS medicinadaterra CHARSET utf8;

USE medicinadaterra;

CREATE TABLE `mensagem` (
`id`          INT NOT NULL auto_increment,
`nome`        VARCHAR(220),
`email`       VARCHAR(220),
`telefone`    CHAR(15),
`mensagem`    TEXT,

PRIMARY KEY (id)
);

CREATE TABLE `comentario` (
`id`           INT (11) NOT NULL,
`comentario`   TEXT,
`usuario`      VARCHAR(250) NOT NULL


);

CREATE TABLE `blog` (
`id`   INT(11) NOT NULL,
`titulo`   VARCHAR (250),
`texto`    TEXT,
`previa`   TEXT,
`datapost` DATETIME,
`imagem`  VARCHAR(1024),
`rol`      INT(3) NOT NULL
);

CREATE TABLE `curso` (
`id`      INT (11) NOT NULL,
`titulo`  VARCHAR (250),
`preço`   DECIMAL (4,2),
`lista1`  VARCHAR (250),
`lista2`  VARCHAR (250),
`lista3`  VARCHAR (250),
`lista4`  VARCHAR (250),
`rol`     INT(3) NOT NULL
);


CREATE TABLE `login` (
  `id`         INT(11) NOT NULL,
  `user`       VARCHAR(250) NOT NULL,
  `password`   VARCHAR(250) NOT NULL,
  `email`      VARCHAR(250) NOT NULL,
  `passadmin`  VARCHAR(250) NOT NULL,
  `rol`        INT(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `login` (`id`, `user`, `password`, `email`, `passadmin`, `rol`) VALUES
(1, 'Raphaela', '', 'raphaela.navachi@gmail.com', 'Medicina_da_Terra21', 1),
(2, 'Nathalia', 'odeioead', 'nathalia.assuncao@gmail.com', '', 2),
(3, 'João', 'odeioead', 'joao.gomes@gmail.com', '', 2),
(4, 'Mariana', 'odeioead', 'mariana.elma@gmail.com', '', 2);


ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;



ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `blog`
  MODIFY `id` INT (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  INSERT INTO `curso` (`id`, `titulo`, `preço`, `lista1`, `lista2`, `lista3`, `lista4`) VALUES
(1, 'Grátis', '0', 'Introdução aos princípios', 'O que é medicina da terra?', 'Materiais necessários', 'Mentoria exclusiva'),
(2, 'FITOENERGÉTICA ESSENCIAL', '19', 'Energia das plantas', 'Fitoterapia', 'Saúde', 'Bem estar'),
(3, 'Farmácia caseira com plantas', '29', 'Infusões', 'Inalações', 'Garrafadas tradicionais', 'Gotas fitoterápicas'),
(4, 'Reiki Tradicional Usui', '49', 'Nível I: O despertar',  'Nível II: A transformação', 'Nível III: A realização', 'Nível IV: Mestre Iniciador');

  INSERT INTO `blog` (`id`, `titulo`, `texto`, `previa`) VALUES
(1, 'Teste', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Ut ornare lectus sit amet est placerat in egestas erat.'),
(2, 'Teste', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Ut ornare lectus sit amet est placerat in egestas erat.'),
(3, 'Teste', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Ut ornare lectus sit amet est placerat in egestas erat.'),
(4, 'Teste', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit laoreet id donec ultrices tincidunt. Ut ornare lectus sit amet est placerat in egestas erat.');

