create database marmita;

CREATE TABLE IF NOT EXISTS `mydb`.`terceirizada` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `CNPJ` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `CNPJ_UNIQUE` (`CNPJ` ASC),
  UNIQUE INDEX `PHONE_UNIQUE` (`telefone` ASC),
  UNIQUE INDEX `E_MAIL_UNIQUE` (`email` ASC),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`produto` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `preco` SMALLINT(10) NOT NULL,
  `tamanho` VARCHAR(10) NOT NULL,
  `disponivel` INT UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `NAME_UNIQUE` (`nome` ASC),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`entregador` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  `rg` VARCHAR(45) NOT NULL,
  `empresa` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `CPF_UNIQUE` (`cpf` ASC),
  UNIQUE INDEX `RG_UNIQUE` (`rg` ASC),
  UNIQUE INDEX `PHONE_UNIQUE` (`telefone` ASC),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`cliente` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `referencia` VARCHAR(45) NULL,
  `dataNascimento` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `PHONE_UNIQUE` (`telefone` ASC),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `mydb`.`pedido` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cliente` INT UNSIGNED NOT NULL,
  `id_entregador` INT UNSIGNED NOT NULL,
  `status` VARCHAR(15) NOT NULL DEFAULT 'PENDENTE',
  `recebido` SMALLINT(10) UNSIGNED NOT NULL,
  `data` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_pedido_cliente_idx` (`id_cliente` ASC),
  INDEX `fk_pedido_entregador1_idx` (`id_entregador` ASC),
  CONSTRAINT `fk_pedido_cliente`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `mydb`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedido_entregador1`
    FOREIGN KEY (`id_entregador`)
    REFERENCES `mydb`.`entregador` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

use marmita;
