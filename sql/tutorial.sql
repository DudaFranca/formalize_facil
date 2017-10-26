CREATE TABLE tutorial
(
    id INT PRIMARY KEY NOT NULL,
    titulo VARCHAR(20) NOT NULL,
    descricao VARCHAR(200) NOT NULL,
	componentes VARCHAR(200) NOT NULL
    

);
CREATE TABLE passos(
    id INT PRIMARY KEY NOT NULL,
    numero INT NOT NULL,
    titulo VARCHAR(200) NOT NULL,
    tarefas VARCHAR(200) NOT NULL
	
    

);

CREATE TABLE tarefas
(
    id INT PRIMARY KEY NOT NULL,
    tutorial_fk INT NOT NULL,
    passos_fk INT NOT NULL,
    constraint passos_id_fk foreign key passos_fk references passos(id),
    constraint tutorial_id_fk foreign key tutorial_fk references tutorial(id) 

);