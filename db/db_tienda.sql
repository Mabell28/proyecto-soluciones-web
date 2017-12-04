-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2017 a las 10:06:47
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'casaca'),
(2, 'jean'),
(3, 'polo'),
(4, 'camisa'),
(5, 'short');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `usuario`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@admin.admin'),
(6, 'usuario1', 'usuario', 'usuario1@cualquiercosa.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_detalle`
--

CREATE TABLE `compra_detalle` (
  `id` int(11) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `image` varchar(30) NOT NULL,
  `precio` double NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_sexo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `image`, `precio`, `id_categoria`, `id_sexo`) VALUES
(1, 'polo sea for free', 'polo hecho de lana de oveja', 'images/hombres/pol-1.jpg', 55, 3, 1),
(2, 'polo green day', 'fino polo para metaleros finos', 'images/hombres/pol-2.jpg', 105, 3, 1),
(3, 'polo seriosly', 'solo para gente seria :3', 'images/hombres/pol-5.jpg', 205, 3, 1),
(4, 'polo putas days', 'perfecto para tus amigas las putas,todas caeran', 'images/hombres/pol-3.jpg', 305, 3, 1),
(5, 'polo charly chocolate', 'solo para creadores y revolucionarios', 'images/hombres/pol-4.jpg', 405, 3, 1),
(6, 'polo streep', 'el polo para vagos fumones', 'images/hombres/pol-6.jpg', 203, 3, 1),
(7, 'casaca for frio', 'para los que se cagan de frio', 'images/hombres/c-1.jpg', 605, 1, 1),
(8, 'casaca bob marley', 'si lo tuyo es paz y amor esta casaca es para ti', 'images/hombres/c-2.jpg', 505, 1, 1),
(10, 'casaca monday', 'si odias los lunes esta casaca es para ti', 'images/hombres/c-3.jpg', 455, 1, 1),
(11, 'casaca darth vader', 'para el que lleva la fuerza oscura dentro, para aquel que quiere conquistar la galaxia y tiene un hijo no recocido y que abandono ', 'images/hombres/c-4.jpg', 555, 1, 1),
(12, 'casaca marx', 'para los pensadores de hoy, para esos pendejos que piensan pendejadas y que no les va a servir en su puta vida, para esos es este polo', 'images/hombres/c-5.jpg', 350, 1, 1),
(13, 'casaca frienszone', 'te dejaron en la friendzone? esta es para ti', 'images/hombres/c-6.jpg', 700, 1, 1),
(14, 'pantalon vintage', 'para los putos que se creen hipsters, esos que creen que un puto lente o ser originales los hace cools, si eres ese tipo de huevon esto es para ti ', 'images/hombres/p-1.jpg', 250, 2, 1),
(15, 'pantalon los chabelos', 'si te gusta hablar puras huebadas esto es para ti', 'images/hombres/p-2.jpg', 350, 2, 1),
(16, 'pantalon puto', 'perfecto regalo para el puto perrisimo, pendejisimo, chipisimo, imbecilisimo, tu fracaso mas grande, vamos tu sabes a quien nos referimos, tu ex ', 'images/hombres/p-3.jpg', 100, 2, 1),
(17, 'pantalon los chabelos', 'si te gusta hablar puras huevadas, eres un grosero de mrd, te gustan los teletubis y te pajeas viendo a shakira esto es para ti', 'images/hombres/p-4.jpg', 600, 2, 1),
(18, 'pantalon mileniars', 'para esos adolecentes estupidos que publican huevadas en las redes sociales, para esos que creen que son la nueva generación pero están mas cagados que ate', 'images/hombres/p-5.jpg', 700, 2, 1),
(19, 'pantalon raul romero', 'eres un loco sin remedio, te gusta hacer huevadas, todos piensan que eres retrasado, tienes suerte aquí tenemos un polo para ti', 'images/hombres/p-6.jpg', 125, 2, 1),
(20, 'camisa albert eintein', 'para tu amigo ese que se cree un genio pero es mas huevon que acuña. para el fue pensado este polo ', 'images/hombres/cam-1.jpg', 115, 4, 1),
(21, 'camisa putas day', 'si piensas visitar las conejitas de huachipa este el polo para ti, viene con condones en un compartimento secreto ', 'images/hombres/cam-2.jpg', 755, 4, 1),
(22, 'camisa ollanta humala', 'se acerca el cumpleaños de tu pata el pisao, el que su flaco lo lleva con correa a todos lados, aquí tenemos el regalo perfecto', 'images/hombres/cam-3.jpg', 220, 4, 1),
(23, 'camisa astronauta', 'para esos que les gusta volar y estar en el espacio, para ellos se penso en esta camisa, ademas cada vez que te metas tu troncho la camisa repele el olor y tu vieja no te va a la sacar la m$@?', 'images/hombres/cam-6.jpg', 300, 4, 1),
(24, 'camisa beto ortiz', 'para tu pata ese que no quiere salir del closet, ese que le suda la canoa, a ese que cada vez que juegan partido para tocando nepes ', 'images/hombres/cam-4.jpg', 270, 4, 1),
(25, 'camisa goku', 'si te gusta tragar esta camisa es para ti, es auto-expansible cada vez que comas como chancho se amoldara a tu panza de cerdo ', 'images/hombres/cam-5.jpg', 370, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `sexo`) VALUES
(1, 'masculino'),
(2, 'femenino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `compra_detalle`
--
ALTER TABLE `compra_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_compra` (`id_compra`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_sexo` (`id_sexo`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra_detalle`
--
ALTER TABLE `compra_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `compra_detalle`
--
ALTER TABLE `compra_detalle`
  ADD CONSTRAINT `compra_detalle_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `compra_detalle_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
