CREATE DATABASE sis_academico
DEFAULT CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

CREATE TABLE aluno (
  codigo INT AUTO_INCREMENT,         -- Coluna para o código de aluno, autoincremento
  nome varchar(100) NOT NULL,       -- Coluna para o nome do aluno, não pode ser nulo
  data_nasc date,                   -- Coluna para a data de nascimento
  sexo VARCHAR(10) NOT NULL,        -- Coluna para o sexo, não pode ser nulo
  cpf char(14),                     -- Coluna para o CPF
  endereco varchar(100) NOT NULL,   -- Coluna para o endereço, não pode ser nulo
  complemento varchar(100),         -- Coluna para o complemento de endereço
  bairro varchar(25) NOT NULL,      -- Coluna para o bairro, não pode ser nulo
  cidade varchar(50) NOT NULL,      -- Coluna para a cidade, não pode ser nulo
  telefone char(15),                -- Coluna para o telefone
  PRIMARY KEY (codigo)              -- Define a coluna código como chave primária
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

select * from aluno;