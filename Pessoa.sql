CREATE TABLE Pessoa(
	IdPessoa INT PRIMARY KEY AUTO_INCREMENT,
	nomePessoa VARCHAR(50) NOT NULL,
    mailPessoa VARCHAR(50) NOT NULL,
    idadePessoa float not null
);

INSERT into Pessoa (nomePessoa, mailPessoa, idadePessoa) values ("Antonio", "antonio.dias@unasp.com", 22);
INSERT into PESSOA (nomePessoa, mailPessoa, idadePessoa) values ("Gustavo", "gustavo@unasp.com", 23);
INSERT into PESSOA (nomePessoa, mailPessoa, idadePessoa) values ("Marcelo", "Marcelo@unasp.com"49);