CREATE DATABASE sie;

USE sie;

CREATE TABLE t_usuarios (
  `idt_usuarios` INT NOT NULL,
  `usuario` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  PRIMARY KEY (`idt_usuarios`));