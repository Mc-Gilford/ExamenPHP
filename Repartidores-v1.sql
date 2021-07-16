CREATE DATABASE Repartidores;
USE Repartidores;

CREATE TABLE Couriers
(
    id_courier int NOT NULL,
    name varchar(20),
    timestamp timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id_courier)
);

CREATE TABLE Status
(
    id_status int NOT NULL,
    name varchar(30),
    timestamp timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id_status)
);

CREATE TABLE Products
(
    id_product int NOT NULL,
    name varchar(30),
    timestamp timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id_product)
);

CREATE TABLE Shipment
(
    id_shipment int NOT NULL,
    id_courier int ,
    FOREIGN KEY (id_courier) REFERENCES Couriers(id_courier),
    id_product int ,
    FOREIGN KEY (id_product) REFERENCES Products(id_product),
    id_status int ,
    FOREIGN KEY (id_status) REFERENCES Status(id_status),
    timestamp timestamp DEFAULT CURRENT_TIMESTAMP
);
