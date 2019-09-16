-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2019 a las 00:31:24
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itms_emergencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil`
--

CREATE TABLE `estado_civil` (
  `id_estado_civil` int(2) NOT NULL,
  `estado_civil` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_civil`
--

INSERT INTO `estado_civil` (`id_estado_civil`, `estado_civil`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Divorciado'),
(4, 'Union libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regimen`
--

CREATE TABLE `regimen` (
  `id_regimen` int(2) NOT NULL,
  `regimen` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `regimen`
--

INSERT INTO `regimen` (`id_regimen`, `regimen`) VALUES
(1, 'Subsidiado'),
(2, 'Contributivo'),
(3, 'Especial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id_region` int(5) NOT NULL,
  `region` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id_region`, `region`) VALUES
(1, 'Urbana'),
(2, 'Rural');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(2) NOT NULL,
  `sexo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `sexo`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id_tipo_documento` int(2) NOT NULL,
  `tipo_documento` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `tipo_documento`) VALUES
(1, 'Cedula de ciudadania'),
(2, 'Tarjeta de identidad'),
(3, 'Cedula de extrangeria'),
(4, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_paciente`
--

CREATE TABLE `usuario_paciente` (
  `id_paciente` int(10) NOT NULL,
  `tipo_documento` int(2) NOT NULL,
  `documento` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `primer_nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `segundo_nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `primer_apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `segundo_apellido` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_paciente`
--

INSERT INTO `usuario_paciente` (`id_paciente`, `tipo_documento`, `documento`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `sexo`, `fecha_nacimiento`, `direccion`, `telefono`, `password`) VALUES
(1, 2, '1030', 'Jeferson', '', 'Fuentes', 'Alcendra', '1', '1995-10-31', 'Transversal 68 f # 44 a 32 ', '3213062227', '1030'),
(2, 3, '1030111', 'Angie', 'Alexandra', 'Guzman', 'Villalba', '2', '1997-03-21', 'Calle 68 f # 25 a 50 ', '3228575187', '1030'),
(3, 2, '1234', 'Camilo', 'Andres', 'Lopez', 'Perez', '1', '2002-08-08', 'diagonal 68 f # 25 a 50 ', '3214567890', '1030');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  ADD PRIMARY KEY (`id_estado_civil`);

--
-- Indices de la tabla `regimen`
--
ALTER TABLE `regimen`
  ADD PRIMARY KEY (`id_regimen`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `usuario_paciente`
--
ALTER TABLE `usuario_paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  MODIFY `id_estado_civil` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `regimen`
--
ALTER TABLE `regimen`
  MODIFY `id_regimen` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id_tipo_documento` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario_paciente`
--
ALTER TABLE `usuario_paciente`
  MODIFY `id_paciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
