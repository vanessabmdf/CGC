-- -----------------------------------------------------
-- Table `INSTITUICAO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `INSTITUICAO` (
  `sigla` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NULL,
  `cnpj` VARCHAR(45) NULL,
  `endereco` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `bairro` VARCHAR(45) NULL,
  `cep` VARCHAR(45) NULL,
  `valorContratoOriginal` DOUBLE NULL,
  `contratoComAditivos` DOUBLE NULL,
  PRIMARY KEY (`sigla`))
ENGINE = InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `REPRESENTANTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `REPRESENTANTE` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `cargo` VARCHAR(45) NULL,
  `departamento` VARCHAR(45) NULL,
  `telefoneFixo` VARCHAR(45) NULL,
  `telefoneCelular` VARCHAR(45) NULL,
  `telefonePersonalizado` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `INSTITUICAO_sigla` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`, `INSTITUICAO_sigla`),
  INDEX `fk_REPRESENTANTE_INSTITUICAO1_idx` (`INSTITUICAO_sigla` ASC),
  CONSTRAINT `fk_REPRESENTANTE_INSTITUICAO1`
    FOREIGN KEY (`INSTITUICAO_sigla`)
    REFERENCES `INSTITUICAO` (`sigla`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 
COMMENT = '';

-- -----------------------------------------------------
-- Table `CIRCUITO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CIRCUITO` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `dataAtivacao` DATE NULL,
  `dataDesativacao` DATE NULL,
  `dataReativicao` DATE NULL,
  `dataNovaDesativacao` DATE NULL,
  `tempoAtivacaoMeses` INT NULL,
  `INSTITUICAO_sigla` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`, `INSTITUICAO_sigla`),
  INDEX `fk_CIRCUITO_INSTITUICAO1_idx` (`INSTITUICAO_sigla` ASC),
  CONSTRAINT `fk_CIRCUITO_INSTITUICAO1`
    FOREIGN KEY (`INSTITUICAO_sigla`)
    REFERENCES `INSTITUICAO` (`sigla`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '';

-- -----------------------------------------------------
-- Table `CONTRATO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CONTRATO` (
  `idCONTRATO` INT NOT NULL AUTO_INCREMENT,
  `tempoEncerramentoContrato` INT NULL,
  `duracao` INT NULL,
  `dataFim` DATE NULL,
  `dataInicio` DATE NULL,
  `INSTITUICAO_sigla` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCONTRATO`, `INSTITUICAO_sigla`),
  INDEX `fk_CONTRATO_INSTITUICAO1_idx` (`INSTITUICAO_sigla` ASC),
  CONSTRAINT `fk_CONTRATO_INSTITUICAO1`
    FOREIGN KEY (`INSTITUICAO_sigla`)
    REFERENCES `INSTITUICAO` (`sigla`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `ADITIVOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ADITIVOS` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `numeroProrrogacao` INT NULL,
  `dataInicio` DATE NULL,
  `dataFim` DATE NULL,
  `tempoEncerramentoProrrogacao` INT NULL,
  `CONTRATO_idCONTRATO` INT NOT NULL,
  `CONTRATO_INSTITUICAO_sigla` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`, `CONTRATO_idCONTRATO`, `CONTRATO_INSTITUICAO_sigla`),
  INDEX `fk_ATIVOS_CONTRATO1_idx` (`CONTRATO_idCONTRATO` ASC, `CONTRATO_INSTITUICAO_sigla` ASC),
  CONSTRAINT `fk_ATIVOS_CONTRATO1`
    FOREIGN KEY (`CONTRATO_idCONTRATO` , `CONTRATO_INSTITUICAO_sigla`)
    REFERENCES `CONTRATO` (`idCONTRATO` , `INSTITUICAO_sigla`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- -----------------------------------------------------
-- Table `INSTRUMENTO_JURIDICO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `INSTRUMENTO_JURIDICO` (
  `idINSTRUMENTO_JURIDICO` INT NOT NULL AUTO_INCREMENT,
  `numeroInstrumento` INT NULL,
  `nome` VARCHAR(45) NULL,
  `valor` DOUBLE NULL,
  `dataInicio` DATE NULL,
  `dataFim` DATE NULL,
  `CONTRATO_idCONTRATO` INT NOT NULL,
  `CONTRATO_INSTITUICAO_sigla` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idINSTRUMENTO_JURIDICO`, `CONTRATO_idCONTRATO`, `CONTRATO_INSTITUICAO_sigla`),
  INDEX `fk_INSTRUMENTO_JURIDICO_CONTRATO1_idx` (`CONTRATO_idCONTRATO` ASC, `CONTRATO_INSTITUICAO_sigla` ASC),
  CONSTRAINT `fk_INSTRUMENTO_JURIDICO_CONTRATO1`
    FOREIGN KEY (`CONTRATO_idCONTRATO` , `CONTRATO_INSTITUICAO_sigla`)
    REFERENCES `CONTRATO` (`idCONTRATO` , `INSTITUICAO_sigla`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
-- SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
