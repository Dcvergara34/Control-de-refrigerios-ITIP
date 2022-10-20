-- Base de datos de la pagina ---
create database Refrigerioitip;
use Refrigerioitip;

--- Tabla de datos para los usuarios ---
create table usuario(
idUsuario int primary key auto_increment,
nombreUsuario varchar(30) not null,
apellidoUsuario varchar(30) not null,
correoUsuario varchar(35) not null,
telefonoUsuario bigint not null,
direccionUsuario varchar(50) not null,
passwordUsuario varchar(20) not null,
rolUsuario varchar(15) not null,
estadoUsuario varchar(15) not null
);

--- Insertar datos ---
insert into usuario values( 1 ,'Camila','Gomez','loola@gmail.com','3201598741','Calle 33 #34-79 ','123','Coordinador','Activo');
insert into usuario values( null ,'Sandra','Gomez','loola@gmail.com','3201598741','Calle 33 #34-79 ','1234','Auxiliar','Activo');
insert into usuario values( null ,'Camilo','Lopez','lpezC@gmail.com','3259874123','Calle 37 #39-49 ','12345','Estudiante','Inactivo');

--- Consultas ---
select * from usuario;

--- Consultas especificas ---
select nombreUsuario from usuario;

--- Editar datos ---
update usuario set nombreUsuario='Juan' where idusuario=45;

--- Eliminar datos --- 
delete from usuario where idusuario=1;


--- Procedimietnos alamcenados Usuario --- 

delimiter //
create procedure consultaUsuario()
begin
select*from usuario;
end //
delimiter ;
call consultaUsuario;

delimiter // 
create procedure ingresaUsuario(in
idUsuario int ,
nombreUsuario varchar(30),
apellidoUsuario varchar(30),
correoUsuario varchar(35),
telefonoUsuario bigint,
direccionUsuario varchar(50),
passwordUsuario varchar(20),
rolUsuario varchar(15),
estadoUsuario varchar(15)
)
begin 
insert into usuario values (idUsuario,nombreUsuario,apellidoUsuario,correoUsuario,telefonoUsuario,direccionUsuario,passwordUsuario,rolUsuario,estadoUsuario);
end //
delimiter ;
call ingresaUsuario (null,'Luis','Lopez','luis@gmail.com',3125896471,'Calle 100', 'Luis', 'Auxiliar','activo');


delimiter //
create procedure PrEliminarUsuario (IN name varchar(30) )
Begin
delete from usuario where nombreUsuario=name;
end //



--- Tabla de datos para el coordinador ---
create table Coordinador(
idCoordinador int primary key auto_increment,
nombreCoordinador varchar(30) not null,
apellidoCoordinador varchar(30) not null,
correoCoordinador varchar(35) not null,
telefonoCoordinador bigint not null,
oficinaCoordinador varchar(20) not null,
estadoUsuario bool not null,
idUsuario int not null,
index (idUsuario)
);

alter table Coordinador add foreign key (idUsuario) references usuario (idUsuario);


insert into Coordinador values(1,'Manuel','Escobar','Escobarcoordinador@gmail.com','3256984123',02,1,2);

select * from Coordinador;

--- Tabla de datos para los auxiliares ---
create table Auxiliar(
idAuxiliar int primary key auto_increment,
nombreAuxiliar varchar(30) not null,
apellidoAuxliar varchar(30) not null,
direccionAuxiliar varchar(50) not null,
telefonoAuxiliar bigint not null,
correoAuxiliar varchar(35) not null,
cursoAuxiliar bigint not null,
jornadaAuxiliar varchar(10) not null,
estadoUsuario bool not null,
idUsuario int not null,
index (idUsuario)
);

alter table Auxiliar add foreign key (idUsuario) references usuario (idUsuario);

insert into Auxiliar values(1,'Lucia','Jimenez','Calle 33 #33-80',3102569874,'Lucijimenez@hotmail.com',1001,'Mañana',1,2);
insert into Auxiliar values(null,'Maria','Hernandez','Calle 35 #36-85',3256984789,'MafeH@gmail.com',1101,'Tarde',1,3);

select * from Auxiliar;

--- Tabla de datos para los refrigerios ---
create table Refrigerio(
idRefrigerio int primary key auto_increment,
fechaRefrigerio date not null,
horaRefrigerio time not null,
tipoRefrigerio varchar(15) not null,
cantidadRefrigerio bigint not null,
descripcionRefrigerio varchar(60) not null,
estadoRefrigerio bool not null,
idCoordinador int not null,
idAuxiliar int not null,
index (idCoordinador),
index (idAuxiliar)
);

alter table Refrigerio add foreign key (idCoordinador) references Coordinador (idCoordinador);
alter table Refrigerio add foreign key (idAuxiliar) references Auxiliar (idAuxiliar);


insert into Refrigerio values(1,'2021/10/26','12:30','Taller',145,'Manzana,barra de cereal,yogurt',1,1,1);
insert into Refrigerio values(null,'2021/10/27','12:30','Jornada tarde',165,'Queso,bocadillo,avena,poque',1,1,2);

update Refrigerio set horaRefrigerio='10:00' where idRefrigerio=1067;

select * from Refrigerio;

--- Tabla de datos para los cursos ---
create table Curso(
idCurso int primary key,
sedeCurso varchar(1) not null,
cantidadAlumnoscurso bigint not null,
directorCurso varchar(30) not null,
estadoCurso bool not null,
idRefrigerio int not null,
index (idRefrigerio)
);

alter table Curso add foreign key (idRefrigerio) references Refrigerio (idRefrigerio);

insert into Curso values(101,'B',36,'Nancy Perez',1,1);
insert into Curso values(1102,'A',39,'Adriana Hernandez',1,2);

select * from Curso;

--- Tabla de datos para los refrigerios para cada curso ---
create table Asignacionrefrigerio(
idAsignacionrefrigerio int primary key auto_increment,
fechaAsignacion date not null,
idRefrigerio int not null,
idCurso int not null,
index (idRefrigerio),
index (idCurso)
);

alter table Asignacionrefrigerio add foreign key (idRefrigerio) references Refrigerio (idRefrigerio);
alter table Asignacionrefrigerio add foreign key (idCurso) references Curso (idCurso);

insert into Asignacionrefrigerio values(1,'2021/10/30',1,101);
insert into Asignacionrefrigerio values(null,'2021/10/31',2,102);

select * from Asignacionrefrigerio; 

insert into Curso values (1101,'A',32,'Diana','1',2);