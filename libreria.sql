-- Tabla autores
CREATE TABLE IF NOT EXISTS `autores` (
  `id_autor` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO `autores` (`id_autor`, `nombre`, `apellido`) VALUES
  (1, 'Gabriel', 'García Márquez'),
  (2, 'Mario', 'Vargas Llosa'),
  (3, 'Isabel', 'Allende');

-- Tabla titulos
CREATE TABLE IF NOT EXISTS `titulos` (
  `id_titulo` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  PRIMARY KEY (`id_titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO `titulos` (`id_titulo`, `titulo`) VALUES
  (1, 'Cien años de soledad'),
  (2, 'La ciudad y los perros'),
  (3, 'La casa de los espíritus');

-- Tabla titulo_autor
CREATE TABLE IF NOT EXISTS `titulo_autor` (
  `id_titulo` int DEFAULT NULL,
  `id_autor` int DEFAULT NULL,
  KEY `id_titulo` (`id_titulo`),
  KEY `id_autor` (`id_autor`),
  CONSTRAINT `titulo_autor_ibfk_1` FOREIGN KEY (`id_titulo`) REFERENCES `titulos` (`id_titulo`),
  CONSTRAINT `titulo_autor_ibfk_2` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO `titulo_autor` (`id_titulo`, `id_autor`) VALUES
  (1, 1),
  (2, 2),
  (3, 3);
