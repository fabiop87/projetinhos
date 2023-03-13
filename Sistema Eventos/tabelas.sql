CREATE DATABASE eventosfaculdade;
USE eventosfaculdade;

CREATE TABLE eventos (
    idEvento INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeEvento VARCHAR(50) NOT NULL,
    local VARCHAR(50),
    dataEvento DATE,
    horarioInicio TIME,
    horarioTermino TIME,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE cursos (
    idCurso INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeCurso VARCHAR(50) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE coordenadores (
    idCoordenador INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL UNIQUE,
    idCurso int NOT NULL,
    senha VARCHAR(80) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idCurso) REFERENCES Cursos(idCurso)
);

CREATE TABLE alunos (
    idAluno INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    ra VARCHAR(7) NOT NULL,
    idCurso int NOT NULL,
    senha VARCHAR(80) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idCurso) REFERENCES Cursos(idCurso)
);

CREATE TABLE presenca (
    idEvento INT NOT NULL,
    idAluno INT NOT NULL,
    codigoCoord VARCHAR(10),
    codigoAluno VARCHAR(10),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (idEvento, idAluno),
    CONSTRAINT fk_evt FOREIGN KEY (idEvento) REFERENCES eventos(idEvento),
    CONSTRAINT fk_aln FOREIGN KEY (idAluno) REFERENCES alunos(idAluno)
);
