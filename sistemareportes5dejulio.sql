-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema sistemareportes
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sistemareportes
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistemareportes` DEFAULT CHARACTER SET latin1 ;
USE `sistemareportes` ;

-- -----------------------------------------------------
-- Table `sistemareportes`.`areas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemareportes`.`areas` (
  `id_area` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_area`))
ENGINE = InnoDB
AUTO_INCREMENT = 21
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sistemareportes`.`eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemareportes`.`eventos` (
  `id_evento` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` DATE NOT NULL,
  `gravedad` ENUM('Leve', 'Moderado', 'Grave') NOT NULL,
  `dano` ENUM('Verdadero', 'Falso') NOT NULL,
  `tipo` ENUM('Adverso', 'Centinela', 'Incidente') NOT NULL,
  `notificacion_paciente` ENUM('Verdadero', 'Falso') NOT NULL,
  `notificacion_familiares` ENUM('Verdadero', 'Falso') NOT NULL,
  `notificacion_acompanantes` ENUM('Verdadero', 'Falso') NOT NULL,
  `notificacion_no_informa` ENUM('Verdadero', 'Falso') NOT NULL,
  `nombre_evento` VARCHAR(100) NOT NULL,
  `areas_id_area` INT(11) NOT NULL,
  `comentario` VARCHAR(250) NOT NULL,
  `estado` ENUM('No aplica', 'Pendiente', 'Ejecutado') NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `apellidos` VARCHAR(100) NOT NULL,
  `rut_paciente` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_evento`, `areas_id_area`),
  INDEX `fk_eventos_areas1_idx` (`areas_id_area` ASC),
  CONSTRAINT `fk_eventos_areas1`
    FOREIGN KEY (`areas_id_area`)
    REFERENCES `sistemareportes`.`areas` (`id_area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 165
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sistemareportes`.`informes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemareportes`.`informes` (
  `id_informes` INT(11) NOT NULL AUTO_INCREMENT,
  `causas` VARCHAR(250) NULL DEFAULT NULL,
  `propuestas` VARCHAR(250) NULL DEFAULT NULL,
  `eventos_id_evento` INT(11) NULL DEFAULT NULL,
  `eventos_areas_id_area` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_informes`),
  INDEX `eventos_id_evento` (`eventos_id_evento` ASC),
  INDEX `eventos_areas_id_area` (`eventos_areas_id_area` ASC),
  CONSTRAINT `informes_ibfk_1`
    FOREIGN KEY (`eventos_id_evento`)
    REFERENCES `sistemareportes`.`eventos` (`id_evento`),
  CONSTRAINT `informes_ibfk_2`
    FOREIGN KEY (`eventos_areas_id_area`)
    REFERENCES `sistemareportes`.`areas` (`id_area`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sistemareportes`.`informes_centinela`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemareportes`.`informes_centinela` (
  `id_informes_centinela` INT(11) NOT NULL AUTO_INCREMENT,
  `causales` VARCHAR(300) NULL DEFAULT NULL,
  `condiciones` VARCHAR(300) NULL DEFAULT NULL,
  `efectos` VARCHAR(300) NULL DEFAULT NULL,
  `medidas` VARCHAR(300) NULL DEFAULT NULL,
  `eventos_id_evento` INT(11) NULL DEFAULT NULL,
  `eventos_areas_id_area` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_informes_centinela`),
  INDEX `eventos_id_evento` (`eventos_id_evento` ASC),
  INDEX `eventos_areas_id_area` (`eventos_areas_id_area` ASC),
  CONSTRAINT `informes_centinela_ibfk_1`
    FOREIGN KEY (`eventos_id_evento`)
    REFERENCES `sistemareportes`.`eventos` (`id_evento`),
  CONSTRAINT `informes_centinela_ibfk_2`
    FOREIGN KEY (`eventos_areas_id_area`)
    REFERENCES `sistemareportes`.`areas` (`id_area`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sistemareportes`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemareportes`.`usuarios` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `rut` VARCHAR(12) NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `tipo_usuario` ENUM('Administrador', 'Jefatura') NOT NULL,
  `areas_id_area` INT(11) NOT NULL,
  PRIMARY KEY (`id_usuario`, `areas_id_area`),
  INDEX `fk_usuarios_areas_idx` (`areas_id_area` ASC),
  CONSTRAINT `fk_usuarios_areas`
    FOREIGN KEY (`areas_id_area`)
    REFERENCES `sistemareportes`.`areas` (`id_area`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 18
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
