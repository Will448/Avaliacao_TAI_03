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


-- Copiando estrutura do banco de dados para bd_avaliacao_tai_03
CREATE DATABASE IF NOT EXISTS `bd_avaliacao_tai_03` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `bd_avaliacao_tai_03`;

-- Copiando estrutura para tabela bd_avaliacao_tai_03.contato
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `email` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `msg` varchar(50) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela bd_avaliacao_tai_03.contato: ~28 rows (aproximadamente)
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` (`id`, `nome`, `email`, `msg`) VALUES
	(1, 'Willian aaaa', 'ppppo@gmail.com', '96666'),
	(2, 'tetss', 'ppppo@gmail.com', 'frerejj'),
	(3, 'tetss', 'ppppo@gmail.com', 'frerejj'),
	(4, 'wiii', 'Maria123@gmail.com', 'rere'),
	(5, 'wiii', 'Maria123@gmail.com', 'rere'),
	(6, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(7, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(8, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(9, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(10, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(11, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(12, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(13, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(14, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(15, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(16, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(17, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(18, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(19, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(20, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(21, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(22, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(23, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(24, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(25, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(26, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(27, 'tarefa', 'vitoria@gmail.com', 'ddddd'),
	(28, 'tarefa', 'vitoria@gmail.com', 'ddddd');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;

-- Copiando estrutura para tabela bd_avaliacao_tai_03.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela bd_avaliacao_tai_03.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
