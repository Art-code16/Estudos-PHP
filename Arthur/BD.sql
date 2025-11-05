CREATE DATABASE sis_academico
DEFAULT CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

CREATE TABLE aluno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    aluno VARCHAR(100),
    data_nasc DATE,
    sexo VARCHAR(20),
    cpf VARCHAR(20),
    endereco VARCHAR(150),
    complemento VARCHAR(100),
    bairro VARCHAR(50),
    cidade VARCHAR(50),
    telefone VARCHAR(20)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

select * from aluno;
