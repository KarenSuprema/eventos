CREATE DATABASE sie;

USE sie;

CREATE TABLE t_usuarios (
  `idt_usuarios` INT NOT NULL,
  `usuario` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  PRIMARY KEY (`idt_usuarios`));

  CREATE TABLE t_eventos (
  `id_eventos` INT NOT NULL AUTO_INCREMENT,
  `hora_inicio` DATETIME NULL,
  `hora_fin` DATETIME NULL,
  `fecha` DATE NULL,
  PRIMARY KEY (`id_eventos`));

  CREATE TABLE t_invitados (
  `id_invitados` INT NOT NULL AUTO_INCREMENT,
  `id_evento` INT NULL,
  `nombre_invitado` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  PRIMARY KEY (`id_invitados`));

  ALTER TABLE t_invitados 
ADD INDEX `fkevento_idx` (`id_evento` ASC) VISIBLE;
;
ALTER TABLE `sei`.`t_invitados` 
ADD CONSTRAINT `fkevento`
  FOREIGN KEY (`id_evento`)
  REFERENCES `sei`.`t_eventos` (`id_eventos`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `sei`.`t_eventos` 
ADD INDEX `fkusuarios_idx` (`id_usuario` ASC) VISIBLE;
;
ALTER TABLE `sei`.`t_eventos` 
ADD CONSTRAINT `fkusuarios`
  FOREIGN KEY (`id_usuario`)
  REFERENCES `sei`.`t_usuarios` (`id_usuario`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
