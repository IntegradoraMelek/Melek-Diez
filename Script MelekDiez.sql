	Create database MelekDiez;
    
    use MelekDiez;
    create table Cliente
    (
    id_clie int primary key auto_increment,
    Nombre nvarchar(50),
    Apellido nvarchar(50),
    Direccion nvarchar(50)
    )engine InnoDB;
    
        create table Usuario
    (
    id_usuario int primary key auto_increment,
    Correo nvarchar(50),
    Contrasena nvarchar(50),
	id_cleusu int,
    constraint  `Registro` FOREIGN KEY(`id_cleusu`) REFERENCES Cliente(`clie`)
    )engine InnoDB;
    
    
    create table Roles
    (
    id_Rol int primary key auto_increment,
    Rol nvarchar(20),
	id_roles int,
    constraint  `Registro` FOREIGN KEY(`id_roles`) REFERENCES Usuario(`id_usuario`)
    )engine InnoDB;
    
         create table Productos
    (
    id_productos int primary key auto_increment,
    Nombre nvarchar(50),
    Descripcion nvarchar(50),
    TipodeCalidad nvarchar(10),
	id_imag int,
    constraint  `Cliente` FOREIGN KEY(`id_cliente`) REFERENCES Cliente(`id_clie`)
    )engine InnoDB;
    
    create table Stock
    (
    unidades_stock int,
	PrecioUnitario int,
	id_proReg int,
    constraint  `Cliente` FOREIGN KEY(`id_proReg`) REFERENCES Productos(`id_productos`)
    )engine InnoDB;
    
    create table Pedidos
    (
    id_pedido int primary key auto_increment,
    NumPedido nvarchar(50),
    Descripcion nvarchar(50),
    id_imag int,
    constraint  `IMAGENES` FOREIGN KEY(`id_imag`) REFERENCES Imagenes(`id_img`)
    )engine InnoDB;
    
        create table Detalle_Pedido
    (
    NumPedido int,
    constraint  `Pedido` FOREIGN KEY(`NumPedido`) REFERENCES Pedidos(`id_pedido`),
    id_cliente int,
    constraint  `Cliente` FOREIGN KEY(`id_cliente`) REFERENCES Cliente(`id_clie`),
    Descripcion nvarchar(50),
    Unidades int,
    PrecioUnitario int
    )engine InnoDB;
    

     create table Imagenes
    (
    id_img int primary key auto_increment,
    Nombre nvarchar(50),
    Url nvarchar(100)
    )engine InnoDB;