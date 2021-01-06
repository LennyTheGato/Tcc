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
	emailRemetente	varchar(128) not null,
    assunto			varchar(255) not null,	
	texto			text,
    dthrEnvio		datetime,
    PRIMARY KEY (idMessage)
);