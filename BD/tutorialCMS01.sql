-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.10-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para blog-php
CREATE DATABASE IF NOT EXISTS `blog-php` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `blog-php`;

-- Volcando estructura para tabla blog-php.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dominio` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `palabras_claves` text NOT NULL,
  `portada` text NOT NULL,
  `email` text NOT NULL,
  `logo` text NOT NULL,
  `icono` text NOT NULL,
  `redes_sociales` text NOT NULL,
  `sobre_mi` text NOT NULL,
  `sobre_mi_completo` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla blog-php.blog: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`id`, `dominio`, `titulo`, `descripcion`, `palabras_claves`, `portada`, `email`, `logo`, `icono`, `redes_sociales`, `sobre_mi`, `sobre_mi_completo`, `fecha`) VALUES
	(1, 'http://localhost/blog-php/', 'Blog del viajero', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae mollitia et animi beatae voluptates, sint exercitationem magni consequuntur ipsa, recusandae. Cumque, maxime, sequi. Id at quo, voluptatum eum voluptas. Dolores.', '["lorem", "ipsum", "dolor", "sit", "amet"]', 'vistas/img/articulo01.png', 'contacto@blogdelviajero.com', 'vistas/img/logotipo-negativo.png', 'vistas/img/icono.jpg', '[\r\n{"red":"facebook","url":"https://www.facebook.com", "icono":"fab fa-facebook-f", "background":"#1475E0"},\r\n{"red":"instagram","url":"https://www.instagram.com", "icono":"fab fa-instagram", "background":"#B18768"},\r\n{"red":"twitter","url":"https://www.twitter.com", "icono":"fab fa-twitter", "background":"#00A6FF"},\r\n{"red":"youtube","url":"https://www.youtube.com", "icono":"fab fa-youtube", "background":"#F95F62"},\r\n{"red":"snapchat","url":"https://www.snapchat.com", "icono":"fab fa-snapchat-ghost", "background":"#FF9052"}\r\n]', '<div class="sobreMi">\r\n					\r\n					<h4><a href="http://localhost/blog-php/sobre-mi">Sobre Mi</a></h4>\r\n\r\n					<img src="vistas/img/sobreMi.jpg" alt="Lorem ipsum dolor sit amet" class="img-fluid my-1">\r\n\r\n					<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum odio, eos architecto atque numquam alias laboriosam minima beatae consectetur.</p>\r\n\r\n				</div>', '<div> <h1>Sobre Mi</h1><img src="vistas/img/sobreMi.jpg" alt="Lorem ipsum dolor sit amet" class="img-fluid my-2" width="100%">  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum odio, eos architecto atque numquam alias laboriosam minima beatae consectetur.  	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit culpa mollitia cupiditate natus iusto! Commodi odio ipsum modi nesciunt pariatur quod aut aliquid sint repellendus, deleniti, possimus, expedita qui ad.</p>  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum odio, eos architecto atque numquam alias laboriosam minima beatae consectetur.  	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit culpa mollitia cupiditate natus iusto! Commodi odio ipsum modi nesciunt pariatur quod aut aliquid sint repellendus, deleniti, possimus, expedita qui ad.</p>  </div>', '2019-11-08 01:12:39');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
