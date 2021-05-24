use rentingCoches;

create table coches(
	idCoche int(11) AUTO_INCREMENT,
	matricula varchar(25),
	marca varchar(25),
	color varchar(25),
	km varchar(25),
	primary key(idCoche)
);
create table clientes(
	idCliente int(11) AUTO_INCREMENT,
	dni varchar(25),
	nombre varchar(25),
	edad int(11),
	primary key(idCliente)
);
create table registros(
	idRegistro int(11) AUTO_INCREMENT,
	fechaInicio date,
	fechaFin date,
	precio float,
	descuento float,
	compra varchar(5),
	idCoche int(11),
	idCliente int(11),
	primary key(idRegistro),
	foreign key (idCoche) references coches(idCoche) on delete restrict on update cascade,
  	foreign key (idCliente) references clientes(idCliente) on delete restrict on update cascade
);