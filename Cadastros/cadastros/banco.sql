CREATE TABLE usuarios(
	id INT AUTO_INCREMENT NOT NULL,
	nome VARCHAR(45) NOT NULL,
	senha VARCHAR(45) NOT NULL,
	login VARCHAR(45) NOT NULL,
	telefone VARCHAR(45) NOT NULL,
	email VARCHAR(45) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE tutorial(
	id INT AUTO_INCREMENT NOT NULL,
	titulo VARCHAR(200) NOT NULL,
	descricao VARCHAR(200) NOT NULL,
	componentes VARCHAR(200) NOT NULL,
	user_id INT NOT NULL,
	PRIMARY KEY(id)
	constraint user_id_fk foreign key tutorial (user_id) references usuarios(id)
);

CREATE TABLE passos(
	id INT AUTO_INCREMENT NOT NULL,
	numero INT NOT NULL,
	titulo VARCHAR(200) NOT NULL,
	descricao VARCHAR(200) NOT NULL,
	tutorial_id INT NOT NULL,
	PRIMARY KEY(id)
	constraint tutorial_id_fk foreign key passos (tutorial_id) references tutorial(id)
);
