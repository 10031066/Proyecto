-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-06-2015 a las 23:42:36
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectomuebles`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `abcarticulo`(IN `id` INT, IN `marca` VARCHAR(30), IN `descripcion` VARCHAR(100), IN `precio` DECIMAL, IN `opc` INT, IN `tipo` INT)
BEGIN
	IF opc = 1 THEN
		INSERT INTO articulo (marca,descripcion,precio,tipo)
		values (marca,descripcion,precio,tipo);
	ELSEIF opc = 2 THEN
		UPDATE articulo SET marca=marca,descripcion=descripcion,precio=precio,tipo=tipo
		WHERE id = id;
	ELSEIF opc = 3 THEN
		DELETE FROM articulo WHERE id = id;

	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `abcclientes`(IN `id` INT, IN `nomcte` VARCHAR(30), IN `apepat` VARCHAR(30), IN `apemat` VARCHAR(30), IN `dircte` VARCHAR(100), IN `telcte` CHAR(10), IN `mailcte` VARCHAR(30), IN `gencte` CHAR(1), IN `edacte` CHAR(3), IN `opc` INT, IN `pass` VARCHAR(50))
    MODIFIES SQL DATA
BEGIN
	IF opc = 1 THEN
		INSERT INTO clientes (nomcte,apepat,apemat,dircte,telcte,mailcte,gencte,edacte,pass)
		values (nomcte,apepat,apemat,dircte,telcte,mailcte,gencte,edacte,pass);
	ELSEIF opc = 2 THEN
		UPDATE clientes SET nomcte=nomcte,apepat=apepat,apemat=apemat,dircte=dircte,telcte=telcte,mailcte=mailcte,gencte=gencte,edacte=edacte,pass=pass
		WHERE id = id;
	ELSEIF opc = 3 THEN
		DELETE FROM clientes WHERE id = id;

	END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `abcEmpresa`(IN `id` INT, IN `nom` VARCHAR(30), IN `dir` VARCHAR(40), IN `tel` CHAR(10), IN `email` VARCHAR(30), IN `pass` CHAR(50), IN `opc` INT)
    MODIFIES SQL DATA
    DETERMINISTIC
BEGIN
	IF opc = 1 THEN
		INSERT INTO empresa (nom,dir,tel, email, pass) values (nom,dir,tel,email,pass);
	ELSEIF opc = 2 THEN
	UPDATE empresa SET nom=nom,dir=dir,tel=tel,email=email,pass=pass where id=id;
	ELSEIF opc = 3 THEN
	DELETE FROM empresa where id=id;
	END IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `id` int(11) NOT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `marca`, `descripcion`, `precio`, `tipo`) VALUES
(5, 'sala ', 'tiene 4 sillones mide 1m', '1500', 0),
(6, 'Muebles Troncoso', 'Sala', '50000', 1),
(7, 'Muebles Troncoso', 'Sala muy suaje y comoda', '20000', 1),
(8, 'La mesita', 'Comedor para cuatro personas y madera resistente', '12000', 2),
(9, 'Fabusa Maderosa', 'Con el mejor acabado de la region', '8000', 4),
(10, 'La Maderita', 'Cabecera con acabado de piel en lineas delgadas', '18000', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
  `idCte` int(11) DEFAULT NULL,
  `idArt` int(11) DEFAULT NULL,
  `Nombre` varchar(30) NOT NULL,
  `precio` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`idCte`, `idArt`, `Nombre`, `precio`, `cantidad`) VALUES
(55, 6, 'Muebles Troncoso', 50000, 1),
(55, 6, 'Muebles Troncoso', 50000, 1),
(63, 9, 'Fabusa Maderosa', 8000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL,
  `nomcte` varchar(30) DEFAULT NULL,
  `apepat` varchar(30) DEFAULT NULL,
  `apemat` varchar(30) DEFAULT NULL,
  `dircte` varchar(100) DEFAULT NULL,
  `telcte` char(10) DEFAULT NULL,
  `mailcte` varchar(30) DEFAULT NULL,
  `gencte` char(1) DEFAULT NULL,
  `edacte` char(3) DEFAULT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nomcte`, `apepat`, `apemat`, `dircte`, `telcte`, `mailcte`, `gencte`, `edacte`, `pass`) VALUES
(55, 'Edgar ', 'qweqwe', 'Fulanito', 'Mina de San Bernabe', '7894561230', 'edgar_5_11@hotmail.com', 'M', '123', 'b0f4457ecd4b969f41b0fec11121507b'),
(61, 'karla erika', 'torres', 'rodriguez', 'j', '', '', '', '', 'ee8a930951b2cec201880ef2d211df5e'),
(62, 'karla erika', 'torres', 'rodriguez', 'jaral del refugio', '4171095866', 'karlita@hotmail.com', 'F', '21', 'c490f42a3728c740a9692e6fe04fa2c3'),
(63, 'Adriana', 'Jaime', 'Martinez', 'Lopez Rayon #6', '4661161381', 'adrii_jmtz@hotmail.com', 'F', '21', '698d556f9757cd9514a352a031ab8aac'),
(64, 'karla erika', 'torres', 'rodriguez', 'jaral del refugio', '4125789', 'karlita1@hotmail.com', 'F', '21', 'fc49306d97602c8ed1be1dfbf0835ead'),
(65, '', '', '', '', '', '', '', '', 'f9c42e8b6b547277935c482838b10ce4'),
(66, '', '', '', '', '', '', '', '', '023f76dbd4fda0da4077818f265d21f4'),
(67, 'Fulanito', 'qweqwe', 'Fulanito', 'Mina de San Bernabe', '7894561230', 'edgar_1@hotmail.com', 'M', '45', '10ca2c13da5fbcfc9197dcfe1741685b'),
(68, 'Fulanito', 'qweqwe', 'Fulanito', 'Mina de San Bernabe', '7894561230', 'edgar_1@hotmail.com', 'M', '45', 'a342e52ec33bb50f532cf045685557ec'),
(69, '', '', '', '', '', '', '', '', '963da079fd2ff8fdc89a7a9a24470626');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `dir` varchar(40) DEFAULT NULL,
  `tel` char(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nom`, `dir`, `tel`, `email`, `pass`) VALUES
(7, 'cerro fresh', 'jaral del refugio', '4125789', 'cerrofresh@hotmail.com', '3ec2a6f19a3c6914700c7ccb14cc1768'),
(8, 'cerro fresh', 'jaral del refugio', '4125789', 'cerrofresh1@hotmail.com', 'fc49306d97602c8ed1be1dfbf0835ead'),
(9, 'yunamas', 'yanose', '855565', 'kefnaskdjfm@hotmail.com', 'b82ca7823519a6ce6277e4fdd8f7cc31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD KEY `fk_carrito` (`idCte`), ADD KEY `fk_carrito1` (`idArt`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
ADD CONSTRAINT `fk_carrito` FOREIGN KEY (`idCte`) REFERENCES `clientes` (`id`),
ADD CONSTRAINT `fk_carrito1` FOREIGN KEY (`idArt`) REFERENCES `articulo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
