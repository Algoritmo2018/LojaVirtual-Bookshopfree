-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/12/2023 às 18:46
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bookshopfree`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(6) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `nome`) VALUES
(27, 'Donald Trump'),
(31, 'Napolian Hill'),
(32, 'Fenrnando Pessoa'),
(25, 'Kim'),
(33, 'Eoin Colfer'),
(34, 'Nessahan Alita'),
(35, 'Alan & Barbara Pease'),
(36, 'Marcos Aurelio');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(6) NOT NULL,
  `id_usuario` int(6) NOT NULL,
  `id_livro` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `id_usuario`, `id_livro`) VALUES
(61, 6, 10),
(68, 6, 12),
(69, 6, 11),
(70, 7, 9),
(73, 6, 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(6) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome`) VALUES
(1, 'Contos'),
(3, 'Aventura'),
(4, 'Literátura'),
(5, 'Ciencia'),
(6, 'Psicologia'),
(7, 'Gibbi');

-- --------------------------------------------------------

--
-- Estrutura para tabela `checkout_instantaneo`
--

CREATE TABLE `checkout_instantaneo` (
  `id_check_inst` int(6) NOT NULL,
  `id_usuario` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cod_de_confirmacao_de_senha`
--

CREATE TABLE `cod_de_confirmacao_de_senha` (
  `id` int(6) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cod_confirmacao` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cod_de_confirmacao_de_senha`
--

INSERT INTO `cod_de_confirmacao_de_senha` (`id`, `email`, `cod_confirmacao`) VALUES
(1, 'lidiateresa@gmail.com', 5234),
(2, 'luischilembomateus@gmail.com', 6372),
(3, 'luischilembomateus@gmail.com', 6776),
(4, 'luischilembomateus@gmail.com', 374),
(5, 'antoniocarter@gmail.com', 6055),
(6, 'maria@gmail.com', 7779),
(7, 'luischilembomateus@gmail.com', 589),
(8, 'lidiateresa@gmail.com', 9622),
(9, 'luischilembomateus@gmail.com', 7066),
(10, 'lidiateresa@gmail.com', 7669),
(11, 'lidiateresa@gmail.com', 4942),
(12, 'luischilembomateus@gmail.com', 2754),
(13, 'lidiateresa@gmail.com', 1223),
(14, 'lidiateresa@gmail.com', 6718),
(15, 'lidiateresa@gmail.com', 5801),
(16, 'lidiateresa@gmail.com', 3334),
(17, 'luischilembomateus@gmail.com', 8352),
(18, 'luischilembomateus@gmail.com', 3101),
(19, 'luischilembomateus@gmail.com', 208),
(20, 'luischilembomateus@gmail.com', 6553),
(21, 'luischilembomateus@gmail.com', 1306),
(22, 'luischilembomateus@gmail.com', 3175),
(23, 'luischilembomateus@gmail.com', 6273),
(24, 'luischilembomateus@gmail.com', 4660),
(25, 'lidiateresa@gmail.com', 7386);

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco_entrega`
--

CREATE TABLE `endereco_entrega` (
  `id_endereco_entrega` int(6) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `pais` varchar(6) NOT NULL,
  `provincia` varchar(25) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `telemovel` varchar(9) NOT NULL,
  `id_usuario` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `estatistica`
--

CREATE TABLE `estatistica` (
  `q_usuarios_cadastrado` int(6) NOT NULL,
  `q_usuarios_excluidos` int(6) NOT NULL,
  `id_estatistica` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(6) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `id_usuario` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `hist_compras`
--

CREATE TABLE `hist_compras` (
  `id_hist_pedidos` int(6) NOT NULL,
  `referencia_encomenda` varchar(12) NOT NULL,
  `data_registrada` date NOT NULL,
  `estado` varchar(20) NOT NULL,
  `id_usuario` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(6) NOT NULL,
  `url_capa` varchar(200) NOT NULL,
  `url_livro` varchar(200) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `preco` float(10,2) NOT NULL,
  `id_categoria` int(6) NOT NULL,
  `id_autor` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `url_capa`, `url_livro`, `titulo`, `preco`, `id_categoria`, `id_autor`) VALUES
(10, 'Captura de ecrã_2020-04-01_21-08-41.png', 'A Menina Sem Palavra.pdf', 'Baseball', 2000.00, 6, 31),
(11, 'Captura de ecrã_2020-04-01_19-43-21.png', 'Estudo da Mulher-6362b7210f7cc.pdf', 'Comportamento femenino', 4000.00, 6, 34),
(9, 'Captura de ecrã_2020-04-01_19-39-15-1.png', 'Homem de Ferro - a Manopla - Eoin Colfer.pdf', 'Iron Man', 10200.00, 1, 33),
(12, 'capa-5e84f6c32b5b0-5e84debd70216.png', 'Como Conquistar as Pessoas.pdf', 'construindo amigos', 7000.00, 5, 35);

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros_favoritos`
--

CREATE TABLE `livros_favoritos` (
  `id_livros_favoritos` int(6) NOT NULL,
  `id_usuario` int(6) NOT NULL,
  `id_livro` int(6) NOT NULL,
  `cor` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `livros_favoritos`
--

INSERT INTO `livros_favoritos` (`id_livros_favoritos`, `id_usuario`, `id_livro`, `cor`) VALUES
(12, 6, 12, 'color: rgb(161, 83, 114);'),
(20, 6, 9, 'color: rgb(161, 83, 114);'),
(22, 6, 11, 'color: rgb(161, 83, 114);'),
(25, 6, 10, 'color: rgb(161, 83, 114);');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_de_envio`
--

CREATE TABLE `tipo_de_envio` (
  `id_tipo_de_envio` int(6) NOT NULL,
  `opcao` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_de_envio_x_usuario`
--

CREATE TABLE `tipo_de_envio_x_usuario` (
  `id_te_x_usuario` int(6) NOT NULL,
  `id_usuario` int(6) NOT NULL,
  `id_tipo_de_envio` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(6) NOT NULL,
  `titulo` varchar(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `titulo`, `nome`, `apelido`, `email`, `data_nascimento`, `senha`) VALUES
(9, 'Sra.', 'Maria', 'Mateus', 'maria@gmail.com', '2023-11-25', '123456maria'),
(8, 'Sr.', 'Antonio', 'Carter', 'antoniocarter@gmail.com', '2023-11-16', 'ludmila123'),
(7, 'Sra.', 'Lidia', 'Teresa', 'lidiateresa@gmail.com', '2023-11-18', 'lilibenga'),
(6, 'Sr.', 'Luis', 'Mateus', 'luischilembomateus@gmail.com', '2023-11-07', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `checkout_instantaneo`
--
ALTER TABLE `checkout_instantaneo`
  ADD PRIMARY KEY (`id_check_inst`);

--
-- Índices de tabela `cod_de_confirmacao_de_senha`
--
ALTER TABLE `cod_de_confirmacao_de_senha`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `endereco_entrega`
--
ALTER TABLE `endereco_entrega`
  ADD PRIMARY KEY (`id_endereco_entrega`);

--
-- Índices de tabela `estatistica`
--
ALTER TABLE `estatistica`
  ADD PRIMARY KEY (`id_estatistica`);

--
-- Índices de tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Índices de tabela `hist_compras`
--
ALTER TABLE `hist_compras`
  ADD PRIMARY KEY (`id_hist_pedidos`);

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`);

--
-- Índices de tabela `livros_favoritos`
--
ALTER TABLE `livros_favoritos`
  ADD PRIMARY KEY (`id_livros_favoritos`);

--
-- Índices de tabela `tipo_de_envio`
--
ALTER TABLE `tipo_de_envio`
  ADD PRIMARY KEY (`id_tipo_de_envio`);

--
-- Índices de tabela `tipo_de_envio_x_usuario`
--
ALTER TABLE `tipo_de_envio_x_usuario`
  ADD PRIMARY KEY (`id_te_x_usuario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `checkout_instantaneo`
--
ALTER TABLE `checkout_instantaneo`
  MODIFY `id_check_inst` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cod_de_confirmacao_de_senha`
--
ALTER TABLE `cod_de_confirmacao_de_senha`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `endereco_entrega`
--
ALTER TABLE `endereco_entrega`
  MODIFY `id_endereco_entrega` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estatistica`
--
ALTER TABLE `estatistica`
  MODIFY `id_estatistica` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `hist_compras`
--
ALTER TABLE `hist_compras`
  MODIFY `id_hist_pedidos` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id_livro` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `livros_favoritos`
--
ALTER TABLE `livros_favoritos`
  MODIFY `id_livros_favoritos` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `tipo_de_envio`
--
ALTER TABLE `tipo_de_envio`
  MODIFY `id_tipo_de_envio` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipo_de_envio_x_usuario`
--
ALTER TABLE `tipo_de_envio_x_usuario`
  MODIFY `id_te_x_usuario` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
