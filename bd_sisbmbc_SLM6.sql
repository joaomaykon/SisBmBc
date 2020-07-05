-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02/12/2019 às 09:38
-- Versão do servidor: 5.7.28-0ubuntu0.18.04.4
-- Versão do PHP: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_sisbmbc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bc_horas_totais`
--

CREATE TABLE `bc_horas_totais` (
  `cpf` int(11) NOT NULL,
  `total_horas_mensais` int(3) NOT NULL,
  `total_horas_semestrais` int(4) NOT NULL,
  `total_horas_anual` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco_comercial`
--

CREATE TABLE `endereco_comercial` (
  `id` int(6) NOT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `nr` int(6) DEFAULT NULL,
  `bairro` varchar(45) NOT NULL,
  `nome_empresa` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `telefone1` int(12) DEFAULT '0',
  `telefone2` int(12) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco_residencia`
--

CREATE TABLE `endereco_residencia` (
  `id` int(6) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `nr` int(6) DEFAULT '0',
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `telefone1` int(12) DEFAULT NULL,
  `telefone2` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `escala_sv_diaria`
--

CREATE TABLE `escala_sv_diaria` (
  `id` int(9) NOT NULL,
  `escala_sv_data` date NOT NULL,
  `gu_do_dia` varchar(3) NOT NULL,
  `tipo_de_escala` varchar(9) NOT NULL,
  `horario` datetime NOT NULL,
  `matricula` int(7) NOT NULL,
  `nome_guerra` varchar(20) NOT NULL,
  `evento` varchar(9) NOT NULL,
  `atividade` varchar(30) NOT NULL,
  `local` varchar(10) NOT NULL,
  `obm` varchar(20) NOT NULL,
  `escala_sv_diaria_bc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `horas_bc_ind`
--

CREATE TABLE `horas_bc_ind` (
  `id` int(5) NOT NULL,
  `horas_semanais_ind` int(2) DEFAULT '0',
  `horas_mensais_ind` varchar(45) DEFAULT '0',
  `horas_semestrais_ind` varchar(45) DEFAULT '0',
  `horas_anual_ind` int(3) DEFAULT '0',
  `valor_12h` decimal(2,2) DEFAULT NULL,
  `valor_24h` decimal(3,2) DEFAULT NULL,
  `valor_mensal` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `horas_bc_vol`
--

CREATE TABLE `horas_bc_vol` (
  `id` int(5) NOT NULL,
  `horas_semanais_vol` int(2) DEFAULT '0',
  `horas_mensais_vol` int(3) DEFAULT '0',
  `horas_semestrais_vol` int(3) DEFAULT '0',
  `horas_anual_vol` int(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios_bc`
--

CREATE TABLE `usuarios_bc` (
  `cpf` int(11) NOT NULL,
  `graduacao` varchar(25) NOT NULL,
  `nome_completo` varchar(45) NOT NULL,
  `nome_guerra` varchar(20) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nivel` int(1) DEFAULT '0',
  `ativo` double DEFAULT '0',
  `antiguidade` int(5) NOT NULL,
  `dt_ingresso` date NOT NULL COMMENT 'data de que ingressou como BC',
  `dt_ultima_promo` int(11) NOT NULL COMMENT 'data da ultima promocao'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios_bm`
--

CREATE TABLE `usuarios_bm` (
  `id` int(6) NOT NULL,
  `graduacao` varbinary(16) NOT NULL,
  `nome_guerra` varbinary(20) NOT NULL,
  `antiguidade` varbinary(45) DEFAULT NULL,
  `gu` varbinary(3) NOT NULL,
  `ativo` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=binary;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios_validar`
--

CREATE TABLE `usuarios_validar` (
  `id` int(11) NOT NULL,
  `usu_nome` varchar(26) NOT NULL,
  `usu_usuario` varchar(25) NOT NULL,
  `usu_senha` varchar(8) NOT NULL,
  `usu_email` varchar(45) NOT NULL,
  `usu_nivel` int(1) DEFAULT NULL COMMENT '0=BC, 1=Adm, 2=Sup',
  `usu_ativo` tinyint(4) DEFAULT '0' COMMENT '0=Não e 1=SIM'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuarios_validar`
--

INSERT INTO `usuarios_validar` (`id`, `usu_nome`, `usu_usuario`, `usu_senha`, `usu_email`, `usu_nivel`, `usu_ativo`) VALUES
(1, 'JoÃ£o Maykon Mendes', 'maykon', '123', 'joaomaykonm@gmail.com', 1, 1),
(2, 'assis', 'assis', '123', 'assis@teste.com', 0, 1),
(3, 'jmaykon', 'jmaykon', '123', 'joaomaykonm@gmail.comtestes', 2, 0),
(4, 'pedro', 'pedro', '123', 'pedro@teste', 1, 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `bc_horas_totais`
--
ALTER TABLE `bc_horas_totais`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices de tabela `endereco_comercial`
--
ALTER TABLE `endereco_comercial`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `endereco_residencia`
--
ALTER TABLE `endereco_residencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `escala_sv_diaria`
--
ALTER TABLE `escala_sv_diaria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `horas_bc_ind`
--
ALTER TABLE `horas_bc_ind`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `horas_bc_vol`
--
ALTER TABLE `horas_bc_vol`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios_bm`
--
ALTER TABLE `usuarios_bm`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios_validar`
--
ALTER TABLE `usuarios_validar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `endereco_comercial`
--
ALTER TABLE `endereco_comercial`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `endereco_residencia`
--
ALTER TABLE `endereco_residencia`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `escala_sv_diaria`
--
ALTER TABLE `escala_sv_diaria`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `horas_bc_ind`
--
ALTER TABLE `horas_bc_ind`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios_bm`
--
ALTER TABLE `usuarios_bm`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios_validar`
--
ALTER TABLE `usuarios_validar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
