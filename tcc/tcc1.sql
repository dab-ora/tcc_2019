-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE denuncia (
idDenuncia INT NOT NULL PRIMARY KEY,
textoDenuncia varchar(320) NOT NULL,
nomeDenuncia VARCHAR(40) NOT NULL

);

CREATE TABLE tipoDenuncia (
gravidadeTipoDenuncia VARCHAR(320) NOT NULL,
idTipoDenuncia int NOT NULL  PRIMARY KEY,
nomeTipoDenuncia VARCHAR(320) NOT NULL
);

