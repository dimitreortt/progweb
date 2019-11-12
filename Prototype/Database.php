<?php

// creates database if not already created
$db = new SQLite3("DBBiblioteca.db");

// TODO:
// create tables: Aluno, Usuario...

$db->exec("CREATE TABLE IF NOT EXISTS `Usuarios` (
    `email` VARCHAR NOT NULL UNIQUE,
    `matricula` VARCHAR(15) NOT NULL,
    `nome` VARCHAR NOT NULL,
    `password` VARCHAR NOT NULL,
    `curso` VARCHAR NOT NULL,
    `apresentacao` VARCHAR,
    `nascimento` VARCHAR(10),
    `telefone` VARCHAR(16),
    PRIMARY KEY (`email`)
  );");



?>
