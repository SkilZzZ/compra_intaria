
/* importa este fichero en phpmyadmin */ 


create database antiguedades;

create table usuarios(
id int(10) PRIMARY KEY AUTO_INCREMENT,
nombre varchar(30) not null,
email varchar(30) not null,
clave varchar(30) not null,
fecha_nac date not null,
codigo_postal int(10) not null);



create table comentarios(
id int(10) PRIMARY KEY AUTO_INCREMENT,
nombre varchar(300),
comentario varchar(999),
estrellas int(1),
fecha date,
id_usuarios int(10),
 constraint fk_1 FOREIGN KEY (id_usuarios) REFERENCES usuarios(id) on delete cascade on update cascade);
