-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Ago-2024 às 18:43
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `topicos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `recuperar_senha`
--

DROP TABLE IF EXISTS `recuperar_senha`;
CREATE TABLE IF NOT EXISTS `recuperar_senha` (
  `email` varchar(255) NOT NULL,
  `token` char(100) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `usado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `recuperar_senha`
--

INSERT INTO `recuperar_senha` (`email`, `token`, `data_criacao`, `usado`) VALUES
('uriel.2022316043@aluno.iffar.br', 'a92c006e1ab377de2b38f313f0079fa9a820705b945e87e6fd02aa9a73d559536397bc484b1946abaa641d5e53a522808ef4', '2024-07-29 16:54:01', 0),
('uriel.2022316043@aluno.iffar.br', 'b72fb84e80676b0141470a861f54325b310021c0898676a74b4ff118f5f3db6e7acbdb1ed667336ccaa241e10b42e3cec213', '2024-07-30 08:20:04', 0),
('uriel.2022316043@aluno.iffar.br', '1ad6caee21fba2f46027bdba90b653d881305cdb52b693883ab8d316b913094ba18d0dfdc8268eecd3b0de5d9d0de7b0f2e1', '2024-08-01 14:02:37', 0),
('uriel.2022316043@aluno.iffar.br', 'aa770bbc7e34133c8d735644b62caaff5fc43fe60f230bf197750ecda30f592f40dfb7e8081d21355305f8c755133564e30f', '2024-08-01 14:50:00', 0),
('uriel.2022316043@aluno.iffar.edu.br', '6f76566ea7289407e227ea29b8ed80031b7f7d5bf758bc3aad3eb5fce3f8e565094c8b6310f168fa31f8aa9129859c798c4a', '2024-08-01 14:54:33', 0),
('uriel.2022316043@aluno.iffar.edu.br', '46709a7de43a2cd90c11bd0eeedd4ade94a1d418df29441cc370e47ccfce84d1f7b5a0dcde9149219fe2fb5a053aa1d451d9', '2024-08-01 15:01:20', 0),
('uriel.2022316043@aluno.iffar.edu.br', '34efebffb05e406bbcf56bc318ebd0aeda30af8ee66f0e84b16fa45cd60e1a908dcb3193a1181edb540f57d2ec12b558019d', '2024-08-01 15:02:04', 0),
('uriel.2022316043@aluno.iffar.edu.br', '6bba67cd112bfe73838fa980fa1cd0381959c989284864af3e75113fc82a40e3f8b0c82d549c3c11508f416a50570e0a6cf3', '2024-08-01 15:17:25', 0),
('uriel.2022316043@aluno.iffar.edu.br', 'aa910020625370a314d335507bf5692d96af3a049b7f40deb75ec51a494c6ff17a47af225797bbd6c69eb782b716853e044b', '2024-08-01 15:23:50', 0),
('uriel.2022316043@aluno.iffar.edu.br', 'e52e3c93a299659858c69cb60c55d4fabad68f1d71167cb1a0255426a97f310e976f6686f726c70ac08948c5e40593bd6777', '2024-08-01 15:24:24', 0),
('uriel.2022316043@aluno.iffar.edu.br', '4d0db5d2a515859d1660fabeb0d8367ec167dcb827a00ad31896b52e52639a3a6378d285ef2fa7d674ad210081869762b913', '2024-08-01 15:25:43', 0),
('uriel.2022316043@aluno.iffar.edu.br', '94417ae2e295ad66e8140acbd304bef6b1c564256c181a16de42b7b263f552f1f1ebbaa733509023d80109797793e0def915', '2024-08-05 08:13:32', 0),
('uriel.2022316043@aluno.iffar.edu.br', 'c4cfea4e0627e4975949ccdcbc430ff6cc8135d92844bb737d928f0a2993a3bd8cbe22bb969ff5bb1370867a3ac6306b1420', '2024-08-05 09:05:23', 0),
('uriel.2022316043@aluno.iffar.edu.br', '167d7f98c2bceae161b03cf46c70a658146bd385f7882fe511b5c5d394b67f70f8abb74a560cfca631ae2ba095480852748d', '2024-08-05 09:08:00', 1),
('uriel.2022316043@aluno.iffar.edu.br', '3d046d5a9e4059cc2b8a7147328d5368ac419a414839a92a7ec6bac6d0de2f2cc071ee688d34a26895bebf8039c3e2c333ea', '2024-08-05 09:12:44', 1),
('uriel.2022316043@aluno.iffar.edu.br', '19d907806971b50306ed90fbc22cf05e00e265e29918ce71ee5fdfcae4ac81b2c4955213258ec92cbbd302931927875f3da7', '2024-08-05 09:17:28', 1),
('uriel.2022316043@aluno.iffar.edu.br', 'fd1569e854c576d20f363dc82d3e3cee8092e16c0ecc4ee78f33829a9ef4271b8378f0d3febcb30ad63545823568e20353af', '2024-08-05 09:28:26', 1),
('uriel.2022316043@aluno.iffar.edu.br', 'fee0a5485d498aeefc5c6f18e59e563272d88c7a3d38dc4bc7b4b09cd563b427ffa776c4a7e798203459e0a57b5f6074bc98', '2024-08-05 09:31:46', 1),
('uriel.2022316043@aluno.iffar.edu.br', '8bb2a6e11aaaa7817e070a74b98b944675cd0f7699e80a5773464013aa879f0ade888753c9037c72ccba0a1ebab392a2edc7', '2024-08-05 09:35:57', 1),
('uriel.2022316043@aluno.iffar.edu.br', '48bfa44eb8018353d597d99c8fd8907b77384481ce97a9af274cd508395df7799671741858939e941ac17d286a8cf5a0dc85', '2024-08-05 09:37:25', 1),
('uriel.2022316043@aluno.iffar.edu.br', '2d3c40ecfe01660ed681aec96735508a6c094d5e321642b8fbfcdfb2d3809a1db8d8e59d348fdde8260af612b69f9bd0ad23', '2024-08-05 09:38:04', 1),
('uriel.2022316043@aluno.iffar.edu.br', '807af07c58a15d47ee70089bcaf8085a4d8e2e2963bb0dc1f5f885c285bb26e2c36cfb47909acdf1f9df05636d2994b3508b', '2024-08-05 09:39:21', 0),
('uriel.2022316043@aluno.iffar.edu.br', '52f40ed0a807b538b054a46a315b62d0dc7c95ea8856aa158a21931fe4a3e37dd5822f2bf72df132bc17b10c0b03cf1bd825', '2024-08-05 09:55:41', 1),
('uriel.2022316043@aluno.iffar.edu.br', 'b0e2df034843bf89cda8b3e402759321e4a4d633374f333f856ea835c9bfd3a4999cbeb5e40cc0d50c5cb170eaa633d3886f', '2024-08-09 08:10:50', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `imagem`) VALUES
(2, 'Pedro', 'em@al.com', '$argon2i$v=19$m=65536,t=4,p=1$d2ZUU1Iza0hWTE90Ym01MA$ngIatNASiWECbulhc7tsKpn9ic/scIkPsvK5LF/JocI', 'foto_perfil.jfif'),
(4, 'Jeremias', 'jeremias@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$VmFHb2NweTBsR3NaajU0Vw$Fjxf0/pDur/n/qpgOHOLPYbv0sRJy6zfgbGimY9uzBs', 'foto_perfil.jfif'),
(5, 'Steve', 'steve@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$Z3RYTFguM0RmVXlMb3IuaQ$bDcnWdfx0KfLibeXO8e9oasxt1m3ObZdOQANtG1vXow', '66abbe4ae3669.jpg'),
(6, 'Alex', 'alex@gmail.com', '$argon2i$v=19$m=65536,t=4,p=1$cG9taE5YcGNPZFdsbEx6Wg$DoC3CuKc3WqRRwQ6p6+WyRcezwwuncYqihke9YA4uro', 'foto_perfil.jfif'),
(7, 'Uriel', 'uriel.2022316043@aluno.iffar.edu.br', '$argon2i$v=19$m=65536,t=4,p=1$d1ZCcDFoUDlTTHQ1bTJhbw$iabBQ5XS327EOfN1Z/eJQzIH/ptDKi7l4vQwgluURAM', '66b5f9ac4ec33.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
