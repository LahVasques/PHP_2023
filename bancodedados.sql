create database cafebistro_phpt2;
use cafebistro_phpt2;

create table cafe (id int,
nome varchar(40),
descricao varchar(255));
alter table cafe add preco float(3,2);
insert into cafe values (1, 'Café cremoso', 
'Café cremoso irresistivelmente suave 
e que envolve seu paladar', 5);
select * from cafe;

create table usuario (
nome varchar(40),
email varchar(255) primary key,
senha varchar(255));
select * from usuario;
insert into usuario (nome) 
VALUES ();
/*('Amanda Araujo','araujo.amanda@aluno.ifsp.edu.br','alanzoka@20012'), 
('Julia Dias','ferreira.dias@aluno.ifsp.edu.br','julia1234'), 
("Laiss Vasques","laiss.hoga@aluno.ifsp.edu.br", "ifsp@1234");*/

