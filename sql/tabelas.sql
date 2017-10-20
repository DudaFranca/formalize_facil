drop schema onlygod;

create database onlygod;

use onlygod;

create table usuarios(
    user_id int auto_increment,
    user_nome varchar(45) not null,
    user_senha varchar(45) not null,
    user_login varchar(45) not null,
    user_telefone varchar(45) not null,
    user_email varchar(45) not null,
    primary key(user_id),
    constraint fk_usuarios_tutoriais foreign key(user_id) references tutoriais(usuario_id_tuto)
);    

create table tutoriais(
    id_tutorial int auto_increment,
    titulo_tutorial varchar(45) not null,
    usuario_id_tuto int unsigned,
    primary key(id_tutorial)
);

create table passos(
    passo_id int auto_increment,
    passo_titulo varchar(45)not null,
    passo_descricao varchar(45) not null,
    passo_posicao varchar(45) not null,
    passo_tutorial_tut_id int,
    primary key(passo_id)
);

/*create table tarefas(
    tarefa_id int auto_increment,
    tarefa_texto varchar(45)not null,
    primary key(tarefa_id)
);