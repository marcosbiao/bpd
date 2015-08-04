CREATE TABLE bolsaEstagio (
  idbolsaEstagio INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  pessoa_cpf INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idbolsaEstagio),
  INDEX bolsaEstagio_FKIndex1(pessoa_cpf)
);

CREATE TABLE bolsaPesquisa (
  idbolsaPesquisa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  pessoa_cpf INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idbolsaPesquisa),
  INDEX bolsaPesquisa_FKIndex1(pessoa_cpf)
);

CREATE TABLE diaria (
  iddiaria INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  pessoa_cpf INTEGER UNSIGNED NOT NULL,
  numeroDiarias INTEGER UNSIGNED NOT NULL,
  valor INTEGER UNSIGNED NOT NULL,
  taxaDeslocamento INTEGER UNSIGNED NOT NULL,
  valorTotal INTEGER UNSIGNED NOT NULL,
  dataSolicitacao DATETIME NOT NULL,
  status_2 VARCHAR(20) NOT NULL,
  usuarioSolicitante INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(iddiaria),
  INDEX diaria_FKIndex1(pessoa_cpf)
);

CREATE TABLE passagem (
  idpassagem INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  pessoa_cpf INTEGER UNSIGNED NOT NULL,
  cidadeOrigem VARCHAR(45) NOT NULL,
  cidadeDestino VARCHAR(45) NOT NULL,
  beneficiario VARCHAR(45) NOT NULL,
  dataSaida DATE NOT NULL,
  dataRetorno DATE NOT NULL,
  dataSolicitacao DATE NOT NULL,
  status_2 VARCHAR(45) NOT NULL,
  tipoPassagem VARCHAR(45) NOT NULL,
  PRIMARY KEY(idpassagem),
  INDEX passagem_FKIndex1(pessoa_cpf)
);

CREATE TABLE pessoa (
  cpf INTEGER UNSIGNED NOT NULL,
  nome VARCHAR(45) NOT NULL,
  nascimento DATE NOT NULL,
  email VARCHAR(45) NOT NULL,
  rg INTEGER UNSIGNED NOT NULL,
  orgaoEmissor VARCHAR(20) NOT NULL,
  dataEmissaoRg DATE NOT NULL,
  nacionalidade VARCHAR(45) NOT NULL,
  naturalidade VARCHAR(45) NOT NULL,
  contato VARCHAR(45) NOT NULL,
  servidorPublico INTEGER UNSIGNED NULL,
  numeroPis INTEGER UNSIGNED NULL,
  inscricaoMunicipal INTEGER UNSIGNED NULL,
  escolaridade INTEGER UNSIGNED NULL,
  profissao INTEGER UNSIGNED NULL,
  codBanco INTEGER UNSIGNED NOT NULL,
  nomeBanco INTEGER UNSIGNED NOT NULL,
  agencia INTEGER UNSIGNED NOT NULL,
  conta INTEGER UNSIGNED NOT NULL,
  tipoConta VARCHAR(20) NOT NULL,
  enderecoBrasil INTEGER UNSIGNED NOT NULL,
  estado VARCHAR(20) NOT NULL,
  cidade VARCHAR(45) NOT NULL,
  bairro VARCHAR(45) NOT NULL,
  cep INTEGER UNSIGNED NOT NULL,
  endereco VARCHAR(45) NOT NULL,
  PRIMARY KEY(cpf)
);


