use medicinadaterra;

CREATE TABLE cursos(
	idCurso		int not null auto_increment,
	nomeCurso	varchar(128) not null,
    preço			int not null,	
	texto			text not null,
    linkCurso		varchar(255) not null,
    PRIMARY KEY (idCurso)
);

CREATE TABLE messages(
	idMessage		int not null auto_increment,
    nome            varchar(128),
	emailRemetente	varchar(128) not null,
    telefone		int(9) not null,	
	texto			text,
    PRIMARY KEY (idMessage)
);