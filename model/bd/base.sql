/* tablas*/
create table libro(
    id_libro int AUTO_INCREMENT PRIMARY key,
    titulo varchar(255),
    editorial int,
    anio date,
    autor int,
    image varchar(255),
    descripcion varchar(255),
    estado int default 2
);
create table autores(
    id_autor int AUTO_INCREMENT PRIMARY key,
	nombre varchar(255),
);
create table editorial(
    id_editorial int AUTO_INCREMENT PRIMARY key,
	nombre varchar(255),
);
create table estado(
	id_estado int AUTO_INCREMENT PRIMARY key,
	nombre varchar(255)
);
/* alteraciones*/
alter table libro add constraint l1 FOREIGN key (editorial) REFERENCES editorial(id_editorial);
alter table libro add constraint l2 FOREIGN key (autor) REFERENCES autores(id_autor);
alter table libro add constraint l3 FOREIGN key (estado) REFERENCES estado(id_estado);
/* inserciones */
INSERT INTO autores (nombre) values ("daniel");
INSERT INTO autores (nombre) values ("becker");
INSERT INTO autores (nombre) values ("victor hugo");
INSERT INTO autores (nombre) values ("");
INSERT INTO autores (nombre) values ("tolomeo");
INSERT INTO autores (nombre) values ("ernesto");
INSERT INTO autores (nombre) values ("marina");

INSERT INTO editorial (nombre) values ("lejos de aqui");
INSERT INTO editorial (nombre) values ("por hay");
INSERT INTO editorial (nombre) values ("a la vuelta");
INSERT INTO editorial (nombre) values ("frente la escuela");
INSERT INTO editorial (nombre) values ("sobre el mar");
INSERT INTO editorial (nombre) values ("en la azotea");
INSERT INTO editorial (nombre) values ("francia");

INSERT INTO estado (nombre) values ("prestado");
INSERT INTO estado (nombre) values ("libre");
libreria  dany   Ab_PRbVu7wm3ys