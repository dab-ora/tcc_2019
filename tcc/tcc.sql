    create database if not exists tcc;

	CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(100) NOT NULL,
  `e-mail` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
);
    CREATE TABLE `denuncia` (
    `idDenuncia` INT NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    `textoDenuncia` varchar(320) NOT NULL,
    `nomeDenuncia` VARCHAR(40) NOT NULL

);

    CREATE TABLE `tipoDenuncia` (
    `gravidadeTipoDenuncia` VARCHAR(320) NOT NULL,
    `idTipoDenuncia` int NOT NULL AUTO_INCREMENT   PRIMARY KEY,
    `nomeTipoDenuncia` VARCHAR(320) NOT NULL
);
    insert into `usuarios`(`nome`,`e-mail`,`senha`)
    values ('admin','admin@admin.com','admin'),
           ('policial','policial@admin.com','policial123'),
           ('bombeiro','bombeiro@admin.com','bombeiro123'),
           ('ibama','ibama@admin.com','ibama123'),
           ('serviço social','ss@admin.com','serviços123'),
           ('defesa civil','dfc@admin.com','defesac123'),
           ('conselho tutelar','cnt@admin.com','conselhot123'),
           ('policial2','policial2@admin.com','2policial123'),
           ('policial3','policial3@admin.com','3policial123'),
           ('policial4','policial4@admin.com','4policial123');


