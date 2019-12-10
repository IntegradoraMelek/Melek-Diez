create database melek;

use melek;

CREATE TABLE usuario (
    id_usuario integer auto_increment not null,
    nombre varchar(40) not null,
    correo_electronico varchar(50) not null,
    telefono varchar(10) not null,
    contraseña varchar(30),
    primary key(id_usuario)
) engine InnoDB;

create table pedido (
    id_pedido integer auto_increment not null,
    fecha_pedido date,
    id_usuario integer not null,
    foreign key (id_usuario) references usuario(id_usuario),
    primary key(id_pedido)
) engine InnoDB;

create table categoria (
    id_categoria integer auto_increment not null,
    categoria varchar(20),
    primary key (id_categoria)
) engine InnoDB;

create table imagen (
    id_imagen integer auto_increment not null,
    imagen_url varchar(120),
    primary key(id_imagen)
) engine InnoDB;

create table producto (
    id_producto integer auto_increment not null,
    nombre varchar(60) not null,
    descripcion text,
    precio_uni decimal(5, 2),
    id_categoria integer not null,
    id_imagen integer not null,
    primary key (id_producto),
    foreign key (id_categoria) references categoria(id_categoria),
    foreign key (id_imagen) references imagen(id_imagen)
) engine InnoDB;

create table detalle (
    id_pedido integer not null,
    id_producto integer not null,
    cantidad int,
    tallas varchar(2),
    descripcion text,
    foreign key(id_pedido) references pedido(id_pedido),
    foreign key(id_producto) references producto(id_producto)
) engine InnoDB;

DELIMITER $ $ create procedure insertar(
    nombre varchar(40),
    correo_electronico varchar(50),
    telefono varchar(10),
    direccion varchar(150),
    contraseña varchar(30)
) begin
insert into
    usuario(
        nombre,
        correo_electronico,
        telefono,
        direccion,
        contraseña
    )
values
(
        nombre,
        correo_electronico,
        telefono,
        direccion,
        contraseña
    );

end $ $ DELIMITER $ $