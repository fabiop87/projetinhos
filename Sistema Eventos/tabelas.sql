CREATE DATABASE eventosfaculdade;
USE eventosfaculdade;

CREATE TABLE eventos (
    idEvento INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeEvento VARCHAR(100) NOT NULL,
    local VARCHAR(100),
    dataEvento DATE,
    horarioInicio TIME,
    horarioTermino TIME,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
-- Os eventos de mais de um dia poderão ser colocados um dia em cada (parte 1, parte2 ...) ou (colocar outra ideia)

CREATE TABLE cursos (
    idCurso INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomeCurso VARCHAR(50) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE coordenadores (
    idCoordenador INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL UNIQUE,
    idCurso int NOT NULL,
    senha VARCHAR(80) NOT NULL, -- password hash 
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idCurso) REFERENCES Cursos(idCurso)
);

CREATE TABLE alunos (
    idAluno INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    ra VARCHAR(7) NOT NULL,
    idCurso int NOT NULL,  -- form -> value do select == idCurso 
    senha VARCHAR(80) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (idCurso) REFERENCES Cursos(idCurso)
);

CREATE TABLE presenca (
    idEvento INT NOT NULL,
    idAluno INT NOT NULL,
    codigoCoord VARCHAR(25),
    codigoAluno VARCHAR(25),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
                     ON UPDATE CURRENT_TIMESTAMP,
  KEY (updated_at),
    qtdTentativas TINYINT unsigned DEFAULT 0,
    PRIMARY KEY (idEvento, idAluno),
    CONSTRAINT fk_evt FOREIGN KEY (idEvento) REFERENCES eventos(idEvento),
    CONSTRAINT fk_aln FOREIGN KEY (idAluno) REFERENCES alunos(idAluno)
);
