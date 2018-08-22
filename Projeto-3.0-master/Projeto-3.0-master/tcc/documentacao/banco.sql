

CREATE TABLE juridico (
razao_social varchar(50),
cnpj varchar(80),
cod_juridico int PRIMARY KEY NOT NULL AUTO_INCREMENT,
cod_usuario int
);

CREATE TABLE fisico (
descricao varchar(250),
especificacao varchar(250),
cpf varchar(50),
cod_fisico int PRIMARY KEY NOT NULL AUTO_INCREMENT,
cod_usuario int
);

CREATE TABLE estabelecimento (
nome varchar(80),
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
cod_juridico int,
FOREIGN KEY(cod_juridico) REFERENCES juridico (cod_juridico)
);

CREATE TABLE usuario (
senha varchar(20),
email varchar(50),
nome varchar(80),
cod_usuario int PRIMARY KEY NOT NULL AUTO_INCREMENT
);

CREATE TABLE avaliacao (
id int NOT NULL AUTO_INCREMENT,
cod_fisico int,
nota int,
data_hrnota timestamp,
FOREIGN KEY(id) REFERENCES estabelecimento (id),
FOREIGN KEY(cod_fisico) REFERENCES fisico (cod_fisico)
);

CREATE TABLE comentario (
id int NOT NULL AUTO_INCREMENT,
cod_fisico int,
comentario varchar(250),
data_hora timestamp,
ativo boolean,
FOREIGN KEY(id) REFERENCES estabelecimento (id),
FOREIGN KEY(cod_fisico) REFERENCES fisico (cod_fisico)
);

CREATE TABLE markers (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name varchar(60) NOT NULL,
  address varchar(80) NOT NULL,
  lat float(10,6) NOT NULL,
  lng float(10,6) NOT NULL,
  type varchar(30) NOT NULL
);

ALTER TABLE juridico ADD FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario);
ALTER TABLE fisico ADD FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario);
