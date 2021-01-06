use medicinadaterra;

CREATE TABLE messages(
	idMessage		int not null auto_increment,
	emailRemetente	varchar(128) not null,
    assunto			varchar(255) not null,	
	texto			text,
    dthrEnvio		datetime,
    lido			int,
    PRIMARY KEY (idMessage)
);