-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2025 at 12:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_hoy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_materia`
--

CREATE TABLE `tb_materia` (
  `id_materia` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tb_materia`
--

INSERT INTO `tb_materia` (`id_materia`, `nombre`, `id_docente`, `descripcion`, `status`) VALUES
(1, 'programacion 1', 0, 'programacion estructurada', 1),
(2, 'algebra', 7, 'algebra basica', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `carrera` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nombre`, `carrera`, `tipo`) VALUES
(2, 'mariana', 'Lic. Seguridad Ciudadana', 2),
(3, 'miguel', 'Ing. Plasticos', 1),
(4, 'antonio', 'Ingenieria en Software', 1),
(5, 'mario', 'Ingenieria en Software', 2),
(6, 'andrea', 'Lic. Seguridad Ciudadana', 2),
(7, 'pamela', 'Ingenieria en Software', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(127) NOT NULL,
  `carrera` varchar(127) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nombre`, `carrera`, `tipo`) VALUES
(1, 'alfredo', 'isw', 'on'),
(2, 'sfsdf', 'sdf4e', 'on'),
(3, 'hjkghj', 'hjkhj', 'on'),
(4, 'hgj', 'ghjg', 'on'),
(5, 'dhgf', 'fgh', 'on'),
(6, 'sdf', 'fgh', 'on'),
(7, 'fghf', 'ttr', 'on'),
(8, 'dsfg', 'gf', 'on'),
(9, 'ghgfh', 'fghfg', 'false'),
(10, 'erte', 'ertre', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_materia`
--
ALTER TABLE `tb_materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_materia`
--
ALTER TABLE `tb_materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
