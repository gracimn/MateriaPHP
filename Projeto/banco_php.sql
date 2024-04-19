CREATE TABLE professor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    especialidade VARCHAR(255),
    email VARCHAR(255)
);

CREATE TABLE aluno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    idade INT,
    email VARCHAR(255)
);

CREATE TABLE curso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    descricao TEXT,
    duracao INT
);

CREATE TABLE aula (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    descricao TEXT,
    data DATE,
    hora TIME,
    id_curso INT,
    FOREIGN KEY (id_curso) REFERENCES curso(id)
);


