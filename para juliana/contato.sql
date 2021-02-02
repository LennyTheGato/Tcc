SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS medicinadaterra CHARSET utf8;

USE medicinadaterra;

CREATE TABLE `mensagem` (
`id` INT NOT NULL auto_increment,
`nome`      VARCHAR(220),
`email`     VARCHAR(220),
`telefone`  CHAR(15),
`mensagem`     TEXT,

PRIMARY KEY (id)
);

CREATE TABLE `blog` (
`id`      INT (11) NOT NULL,
`titulo`  VARCHAR (250),
`texto`   TEXT,
`rol` int(3) NOT NULL
);

CREATE TABLE `curso` (
`id`      INT (11) NOT NULL,
`titulo`  VARCHAR (250),
`preço`   DECIMAL (4,2),
`lista1`  VARCHAR (250),
`lista2`  VARCHAR (250),
`lista3`  VARCHAR (250),
`lista4`  VARCHAR (250),
`rol` int(3) NOT NULL
);


CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `passadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  INSERT INTO `curso` (`id`, `titulo`, `preço`, `lista1`, `lista2`, `lista3`, `lista4`) VALUES
(1, 'Grátis', '0', 'Introdução aos princípios', 'O que é medicina da terra?', 'Materiais necessários', 'Mentoria exclusiva'),
(2, 'FITOENERGÉTICA ESSENCIAL', '19', 'Energia das plantas', 'Fitoterapia', 'Saúde', 'Bem estar'),
(3, 'Farmácia caseira com plantas', '29', 'Infusões', 'Inalações', 'Garrafadas tradicionais', 'Gotas fitoterápicas'),
(4, 'Reiki Tradicional Usui', '49', 'Nível I: O despertar',  'Nível II: A transformação', 'Nível III: A realização', 'Nível IV: Mestre Iniciador');



