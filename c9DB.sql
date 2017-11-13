DROP DATABASE IF EXISTS c9;

CREATE DATABASE c9;

USE c9;

CREATE TABLE `c9`.`Animal`(
	`numero_chip` DECIMAL(11,0) NOT NULL, 
	`nombre_animal` VARCHAR(20) NOT NULL, 
	`fecha_ingreso` TIMESTAMP NOT NULL,
	 PRIMARY KEY (`numero_chip`)
);

CREATE TABLE `c9`.`Adoptante`(	
    `nombre_adoptante` VARCHAR(20) NOT NULL, 
	`dni` VARCHAR(20) NOT NULL,
	`correo` VARCHAR(20) NOT NULL, 
	PRIMARY KEY (`dni`)
);

CREATE TABLE `c9`.`Adopcion`(	
	`fecha_adopcion` TIMESTAMP NOT NULL, 
	`dni_adoptante` VARCHAR(20) NOT NULL, 
	`numero_chip` INT NOT NULL, 
	PRIMARY KEY (`numero_chip`)
);
CREATE TABLE `c9`.`Personal`(	
	`nombre` VARCHAR(20) NOT NULL, 
	`dni` VARCHAR(8),
	`puesto_trabajo` VARCHAR(20) NOT NULL, 
	`correo` VARCHAR(20), 
	`salario` INT, 
	`vacaciones` DATE NOT NULL, 
	 PRIMARY KEY (`dni`)
);

CREATE TABLE `c9`.`Ficha_veterinaria`(
	`numero_chip` INT NOT NULL, 
	`fecha_proxima_revision` DATE NOT NULL,
	`lista_vacunas` VARCHAR(1000), 
	PRIMARY KEY (`numero_chip`)
);

CREATE TRIGGER borraficha
BEFORE DELETE ON Animal
FOR EACH ROW
	DELETE from Ficha_veterinaria WHERE numero_chip = old.numero_chip;
	
--This version of MySQL doesn't yet support 'multiple triggers with the same action time and event for one table'
--CREATE TRIGGER borraadopcion
--BEFORE DELETE ON Animal
--FOR EACH ROW 
--	DELETE from Adopcion WHERE numero_chip = old.numero_chip;