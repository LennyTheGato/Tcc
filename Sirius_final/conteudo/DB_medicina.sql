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

/*CREATE TABLE `comentario` (
`id`           INT (11) NOT NULL,
`comentario`   TEXT,
`usuario`      VARCHAR(250) NOT NULL,
`pop`          int(10) NOT NULL


);
*/
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
(2, 'Nathalia', 'Nathalia_Chagas21', 'nathalia.assuncao@gmail.com', '', 2),
(3, 'João', 'Joao_Pedro21', 'joao.gomes@gmail.com', '', 2),
(4, 'Mariana', 'Mariana_Elma21', 'mariana.elma@gmail.com', '', 2);


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

 /* ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;*/

  INSERT INTO `curso` (`id`, `titulo`, `preço`, `lista1`, `lista2`, `lista3`, `lista4`) VALUES
(1, 'Grátis', '0', 'Introdução aos princípios', 'O que é medicina da terra?', 'Materiais necessários', 'Mentoria exclusiva'),
(2, 'FITOENERGÉTICA ESSENCIAL', '19', 'Energia das plantas', 'Fitoterapia', 'Saúde', 'Bem estar'),
(3, 'Farmácia caseira com plantas', '29', 'Infusões', 'Inalações', 'Garrafadas tradicionais', 'Gotas fitoterápicas'),
(4, 'Reiki Tradicional Usui', '49', 'Nível I: O despertar',  'Nível II: A transformação', 'Nível III: A realização', 'Nível IV: Mestre Iniciador');

  INSERT INTO `blog` (`id`, `titulo`, `texto`, `previa`, `datapost`, `imagem`) VALUES
(1, 'Aromaterapia vibracional da pimenta preta', 'Ela nos auxilia no discernimento e na aceitação interior, o que pode ajudar (e muito) na superação de sentimentos reprimidos e no direcionamento das nossas intensões para manifestar nossas verdadeiras necessidades. É um ótimo óleo essencial para utilizarmos quando precisamos nos concentrar naquilo que queremos que se manifeste. Ela atuará nos auxiliando a digerir a frustração e a raiva que direcionamos equivocadamente a nós mesmas. ⠀
⠀
"Quando concentramos nossas energias naquilo que desejamos para o nosso crescimento interior, somos liberados da necessidade de nos sentirmos vítimas dos acontecimentos do caminho. A vida fica mais leve e mais fluida." ⠀
⠀
Use o óleo essencial da pimenta preta sempre que precisar deste apoio, ela é uma grande amiga, que nos apoia em processos difíceis e dolorosos. ', 'Transformação: essa é a palavra de referência quando falamos do perfil vibracional do óleo essencial da pimenta preta (Piper nigrum)', '2014-04-07 10:06:07', '1.jpg'),
(2, 'Que o seu alimento seja seu remédio, e que o seu remédio seja o seu alimento" - Hipócrates"', 'Por isso é tão importante termos bons hábitos alimentares, fazendo escolhas conscientes e consumindo alimentos que deixam o nosso organismo feliz.⠀
⠀
Infelizmente, nossa cultura de consumo privilegia demais os alimentos ultraprocessados, e neste panorama, as pessoas acabam deixando de lado as opções mais saudáveis por serem consideradas "pouco práticas".⠀
⠀
Promessas de "praticidade" mascaram nossas necessidades e viciam o paladar, que acaba estranhando a comida de verdade.. isso é muito triste, e acaba nos afastando de uma vida sadia e mais conectada à natureza... ⠀
⠀
Cada alimento que a natureza oferece possui uma característica nutricional. Alguns são mais ricos em vitaminas, outros em carboidratos, proteínas, minerais... e por aí vai. Nosso organismo precisa de todos estes elementos, daí a importância de uma alimentação variada.⠀
⠀
Existe também os elementos que o organismo não precisa... corantes artificiais, aromatizantes químicos, excesso de gorduras, sais e açúcares, conservantes, etc... o nosso corpo não aproveita nada disso, mas diante deste tipo de alimentação, o organismo se vê obrigado a trabalhar contra a sua natureza, e acaba se complicando (aí começam a aparecer doenças e outros problemas).⠀
⠀
Consumindo "comida de verdade" (alô @ritalobo ) o nosso organismo passa a funcionar de maneira mais orgânica e descomplicada, pois fica fácil reconhecer os nutrientes provenientes da natureza, diferente daqueles sintetizados em laboratório..⠀
⠀
No stories de hoje você pode conferir perfis inspiradores aqui do instagram, que poderão te ajudar a fazer boas escolhas alimentares e a cultivar o autocuidado nutricional. Bora comer bem?', 'Nossa saúde depende do bom funcionamento do organismo, e quando nos alimentamos bem, o nosso corpo responderá bem também!', '2014-04-02 03:10:42', '2.jpg'),
(3, 'farmácia caseira?! Hoje tem!', 'Quando começamos nossas pesquisas para escolhe-las, acabam aparecendo plantas exóticas, plantas da amazônia, plantas do cerrado, plantas da mata atlântica, plantas de todo tipo e de todo lugar! ⠀
⠀
São milhares de opções, e sempre queremos escolher as melhores para a nossa saúde e para a nossa família. Diante de tantas plantas, como saber quais serão as melhores para ter em casa? ⠀
⠀
Confira nossas dicas! ⠀
⠀
1- Escolha as plantas de acordo com os desequilíbrios de saúde mais corriqueiros, como plantas com ação digestiva, calmantes, úteis em casos de ferimentos, etc;⠀
2- Escolha as plantas que são mais fáceis de encontrar na sua região, assim você valoriza a natureza do seu bioma;⠀
3- Procure por plantas de uso consagrado e corra daquelas que possuem potencial tóxico;⠀
4- Não faça suas escolhas com base no que é bom para os outros. Cada pessoa tem suas necessidades, ok?!;⠀
5- Compre as plantas secas de fornecedores confiáveis e prepare seus próprios remédios (não compre remédios de plantas medicinais de produtores caseiros, pois isso é ilegal e pode não fazer bem à sua saúde);⠀
6- Se possível, plante alguma erva que goste, a experiência de cuidar de um vasinho é terapêutico por si só! ⠀
⠀
Fique atenta ao nosso feed, pois compartilharemos contigo várias formas de se manter saudável de forma natural! ⠀', 'São tantas as opções de ervas que podemos incluir na nossa caixinha de primeiros socorros natural, que as vezes até parece difícil fazê-la!', '2020-08-26 05-18-20', '3.jpg'),

(4, 'Coma salada!', 'Lembre-se: a dieta humana se baseia majoritariamente em vegetais (do café da manhã até a sopa da janta). Quando digo isso, me refiro a TODOS os vegetais de consumo humano, como os cereais, as castanhas, as sementes, frutos, legumes, hortaliças, raízes, tubérculos e por aí vai.⠀
⠀
Agora que elevei o Reino vegetal nas alturas, digo: ⠀
Coma salada!⠀
Porque salada é vida! ⠀
⠀
Me acompanha: quando você colhe um fruto, ele fica disponível por um tempo fora do pé, o que te permite deixa-lo na fruteira ou na geladeira, sem estragar rapidamente, certo?⠀
⠀
Enquanto que para conservar as hortaliças (que são a base das saladas), você precisará seguir todo um tutorial, de higienização, secagem, acondicionamento etc... isso para que durem no máximo uma semana na geladeira. ⠀
Sim, elas são sensíveis. ⠀
⠀
Digo ainda: elas carregam fibras, minerais, vitaminas e outros nutrientes importantíssimos para o bom funcionamento do organismo. ⠀
Sim, seu corpo fica muito feliz quando você as consome.⠀
⠀
Diferente dos vegetais processados (como arroz e farinhas) ou dos outros vegetais (que deixamos "de castigo" na fruteira), as hortaliças possuem maior quantidade de energia vital disponível. Alimentar-se delas honrando a terra, não só deixa seu corpo feliz por receber vitaminas, fibras e minerais, mas também o deixa abastecido com a energia vital proveniente dos 4 elementos (água, terra, ar e fogo, representado pelo sol). ⠀
Sim, você recebe energia vital.⠀
⠀
Visualize toda esta sensibilidade das hortaliças, todo potencial nutricional e toda essa energia nutrindo seu corpo! É uma verdadeira #medicinadaterra ⠀
⠀
Finalizo esta inspiração nutricional com o mantra do dia: 
"Coma salada"⠀', ' Não importa se sua alimentação é onívora, vegana, ovolactovegetariana, crudívora, lowcarb etc etc etc...⠀', '2020-08-18 06-40-57', '4.jpg');