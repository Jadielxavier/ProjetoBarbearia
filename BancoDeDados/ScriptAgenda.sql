CREATE database DPOS;

use DPOS;

Create table Agenda (
id_Agenda int auto_increment primary key,
Nome varchar(150) not null,
Cpf varchar(13) unique,
E_mail varchar(150),
Telefone varchar(15),
Tipo_Servico varchar(100),
Data_Horario datetime
);

drop table Agenda;
insert into Agenda (Nome,Cpf,E_mail,Telefone,Tipo_Servico,Data_Horario) 
values ('Jose','44877874834','Jose.santos@hotmail.com','11969339028','Degrade','2023-10-18 13:08');

select count(id_Agenda) from Agenda where Data_Horario = '44877874834'

DELETE FROM Agenda WHERE id_Agenda = 1;

select* from Agenda
