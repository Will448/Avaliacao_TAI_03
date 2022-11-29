-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `test`;

-- Copiando estrutura para tabela test.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela test.users: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
	(1, 'will', '$2y$10$MhTplR3VZ5f3BiJ9c3LNtehSSPQAqn4HQEz1mdIy/koKAAsSXNOiS', '2022-06-28 17:26:10'),
	(2, 'Cris', '$2y$10$6LY78VZhsqzz9T675mQ35.9ACXKfWgnGkaU1C7szjjzutZ2aHMLn.', '2022-06-28 17:35:08'),
	(3, 'julia', '$2y$10$vNpCk5wWqkvj6IpJIg/.xOBu9VACxXbJ02NYbh7rw3oPyo1DxSm.u', '2022-06-28 20:42:37'),
	(4, 'bat', '$2y$10$eN7IUEl6iEuHz/Ol8vEP3uo9N2r0yXOSk5kx3PHNNLtVXsAdcM5b6', '2022-08-23 15:14:34'),
	(5, 'vitoria', '$2y$10$VxJrLfdgL4j6XYWTqLKcC.2NqRDuLEkbLJ8Mey8v51aXeX6yB55/.', '2022-11-28 23:01:51'),
	(6, 'teste', '$2y$10$ciN9qGJIOGhFN1C0o0Lo6.dX/63O/5TRwzLfHIpWb6I93rgbJOrYq', '2022-11-29 08:03:32'),
	(7, 'vit', '$2y$10$77Q7ft824aOW96lH.gNHHe7zHtQlLGXbPEJKYO2mKgU1lxYtTY.z2', '2022-11-29 08:50:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
