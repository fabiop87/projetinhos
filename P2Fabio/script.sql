CREATE DATABASE p2fabio;


USE p2fabio;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Maio-2023 às 04:16
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `p2fabio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animes`
--

CREATE TABLE `animes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sinopse` varchar(500) NOT NULL,
  `num_episodios` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `estreia` date NOT NULL,
  `genero` varchar(50) NOT NULL,
  `imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `animes`
--

INSERT INTO `animes` (`id`, `nome`, `sinopse`, `num_episodios`, `status`, `estreia`, `genero`, `imagem`) VALUES
(14, 'Yuru Camp', 'Enquanto o refúgio perfeito para a maioria das meninas de sua idade pode ser umas férias chiques com seus entes queridos, a maneira ideal de Rin Shima passar seus dias de folga é acampar sozinha na base do Monte Fuji. Desde armar sua barraca até juntar lenha, ela sempre fez tudo sozinha e não tem planos de deixar seu mundinho solitário....     ', 12, 'Finalizado', '2018-01-04', 'Slice-of-Life', 'imagens/14_yurucampc.jpg'),
(15, 'Shoujo Shuumatsu Ryokou', '  Em meio aos restos desolados de uma cidade outrora próspera, apenas o ronco de uma motocicleta quebra o silêncio frio do inverno. Seus cavaleiros, Chito e Yuuri, são os últimos sobreviventes da cidade devastada pela guerra. Vasculhando antigos locais militares em busca de comida e peças.... ', 12, 'Finalizado', '2017-10-06', 'Aventura , Mistério , Sci-Fi , Slice of Life', 'imagens/15_gltimg.jpg'),
(16, 'Bocchi the Rock!', '  Desejando fazer amigos e se apresentar ao vivo com uma banda, Hitori \"Bocchi\" Gotou, solitária e socialmente ansiosa, dedica seu tempo a tocar violão. Em um dia fatídico, Bocchi conhece a extrovertida baterista Nijika Ijichi, que a convida para se juntar à Kessoku Band quando seu guitarrista, Ikuyo Kita, foge antes de seu primeiro show.... ', 12, 'Finalizado', '2022-10-09', 'Comédia', 'imagens/16_bocajuniorsryo.jpg'),
(20, 'Anta', '  Isso é uma anta, definitivamente ', 1, 'Em andamento', '2222-02-22', 'sim', 'imagens/20_anta.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(61) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'fabio', 'fabio@teste.com', '$2y$10$Vahk4lfEMQPAIYDxgzf6Ee3G.TB/QyNMkE0uDwKyuo8MSIJkxK/C6');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animes`
--
ALTER TABLE `animes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
