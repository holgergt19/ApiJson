create database entrega
Drop database entrega
USE entrega;


CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(100) NOT NULL,
  created datetime NOT NULL
);



CREATE TABLE cliente (
  clienteId int NOT NULL AUTO_INCREMENT,
  nombre varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password VARCHAR(100) NOT NULL,
  telefono varchar(255) NOT NULL,
  PRIMARY KEY (clienteId)
);


CREATE TABLE cita (
  citasId int(11) NOT NULL AUTO_INCREMENT,
  fecha date NOT NULL,
  hora time NOT NULL,
  servicioId int(11)NOT NULL,
  PRIMARY KEY (citasId),
  FOREIGN KEY (servicioId) REFERENCES servicio(servicioId)
);

create TABLE servicio (
  servicioId int(11) NOT NULL AUTO_INCREMENT,
  service varchar(255) NOT NULL,
  image varchar(255) NOT NULL,
  costo varchar(20) NOT NULL,
  PRIMARY KEY (servicioId)
);

drop table servicio;
drop table cita;
drop table cliente;
select * from users;
select * from cliente;
select * from cita;
select c.fecha,ss.nombre from cita c join servicio ss on ss.servicioId = c.servicioId
clienteId int NOT NULL,
  id int NOT NULL,
FOREIGN KEY (clienteId) REFERENCES cliente(clienteId),
  FOREIGN KEY (id) REFERENCES users(id) 