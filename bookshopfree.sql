-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2023 às 03:32
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

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
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(6) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id_autor`, `nome`) VALUES
(27, 'Donald Trump'),
(31, 'Napolian Hill'),
(32, 'Fenrnando Pessoa'),
(25, 'Kim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(6) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome`) VALUES
(1, 'Contos'),
(3, 'Aventura'),
(4, 'Literátura'),
(5, 'Ciencia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `checkout_instantaneo`
--

CREATE TABLE `checkout_instantaneo` (
  `id_check_inst` int(6) NOT NULL,
  `id_usuario` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_entrega`
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
-- Estrutura da tabela `estatistica`
--

CREATE TABLE `estatistica` (
  `q_usuarios_cadastrado` int(6) NOT NULL,
  `q_usuarios_excluidos` int(6) NOT NULL,
  `id_estatistica` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(6) NOT NULL,
  `descricao` mediumtext NOT NULL,
  `id_usuario` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hist_compras`
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
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id_livro` int(6) NOT NULL,
  `url_capa` varchar(200) NOT NULL,
  `url_livro` varchar(200) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `id_categoria` int(6) NOT NULL,
  `id_autor` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros_favoritos`
--

CREATE TABLE `livros_favoritos` (
  `id_livros_favoritos` int(6) NOT NULL,
  `id_usuario` int(6) NOT NULL,
  `id_livro` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_de_envio`
--

CREATE TABLE `tipo_de_envio` (
  `id_tipo_de_envio` int(6) NOT NULL,
  `opcao` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_de_envio_x_usuario`
--

CREATE TABLE `tipo_de_envio_x_usuario` (
  `id_te_x_usuario` int(6) NOT NULL,
  `id_usuario` int(6) NOT NULL,
  `id_tipo_de_envio` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(6) NOT NULL,
  `titulo` varchar(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `senha` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `titulo`, `nome`, `apelido`, `email`, `data_nascimento`, `senha`) VALUES
(1, 'Sr.', 'Luis', 'Mateus', 'luischilembomateus@gmail.com', '2023-11-26', '123456'),
(2, 'Sra.', 'Lidia', 'Teresa', 'lidiateresa@gmail.com', '2024-02-15', '$2y$10$BSLhyxwwnuJ/cTuXNH'),
(3, 'Sr.', 'Emiliano', 'Senzala', 'emiliano@gmail.com', '1995-06-23', '$2y$10$oMFOtULJKpHmI5Gakr'),
(4, 'Sra.', 'Maria', 'Mateus', 'maria@gmail.com', '2023-11-12', '$2y$10$yYZGj278hQfV.hh7fw'),
(5, 'Sr.', 'Antonio', 'Carter', 'antoniocarter@gmail.com', '2023-11-25', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `checkout_instantaneo`
--
ALTER TABLE `checkout_instantaneo`
  ADD PRIMARY KEY (`id_check_inst`);

--
-- Índices para tabela `endereco_entrega`
--
ALTER TABLE `endereco_entrega`
  ADD PRIMARY KEY (`id_endereco_entrega`);

--
-- Índices para tabela `estatistica`
--
ALTER TABLE `estatistica`
  ADD PRIMARY KEY (`id_estatistica`);

--
-- Índices para tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Índices para tabela `hist_compras`
--
ALTER TABLE `hist_compras`
  ADD PRIMARY KEY (`id_hist_pedidos`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id_livro`);

--
-- Índices para tabela `livros_favoritos`
--
ALTER TABLE `livros_favoritos`
  ADD PRIMARY KEY (`id_livros_favoritos`);

--
-- Índices para tabela `tipo_de_envio`
--
ALTER TABLE `tipo_de_envio`
  ADD PRIMARY KEY (`id_tipo_de_envio`);

--
-- Índices para tabela `tipo_de_envio_x_usuario`
--
ALTER TABLE `tipo_de_envio_x_usuario`
  ADD PRIMARY KEY (`id_te_x_usuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `checkout_instantaneo`
--
ALTER TABLE `checkout_instantaneo`
  MODIFY `id_check_inst` int(6) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_livro` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livros_favoritos`
--
ALTER TABLE `livros_favoritos`
  MODIFY `id_livros_favoritos` int(6) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
