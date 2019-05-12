CREATE DATABASE if not exists notas_master;

USE notas_master;

CREATE TABLE if not exists usuarios(
    id          INT(255) NOT NULL AUTO_INCREMENT,
    nombre      VARCHAR(100) NOT NULL,
    apellidos   VARCHAR(100) NOT NULL,
    email       VARCHAR(255) NOT NULL,
    password    VARCHAR(255) NOT NULL,
    fecha       DATE NOT NULL,

    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE if not exists notas(
    id          INT(255) auto_increment not null,
    usuario_id  INT(255) not null,
    titulo      VARCHAR(255) not null,
    descripcion MEDIUMTEXT,
    fecha       DATE NOT NULL,

    CONSTRAINT pk_notas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDB DEFAULT CHARSET = utf8;