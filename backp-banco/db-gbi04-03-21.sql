-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04/03/2021 às 04:29
-- Versão do servidor: 8.0.23
-- Versão do PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db-gbi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `codcliente` int NOT NULL,
  `nome_cliente` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sobrenome_cliente` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telefone1_cliente` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `telefone2_cliente` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cpf_cliente` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rg_cliente` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rua_cliente` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `numero_rua_cliente` bigint DEFAULT NULL,
  `cidade_cliente` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `uf_cliente` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `data_nascimento_cliente` date DEFAULT NULL,
  `sexo_cliente` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bairro_cliente` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cep_cliente` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`codcliente`, `nome_cliente`, `sobrenome_cliente`, `telefone1_cliente`, `telefone2_cliente`, `cpf_cliente`, `rg_cliente`, `rua_cliente`, `numero_rua_cliente`, `cidade_cliente`, `uf_cliente`, `data_nascimento_cliente`, `sexo_cliente`, `bairro_cliente`, `cep_cliente`) VALUES
(233, 'osvaldo', 'Theo Silveira', '96984854116', '', '85374890182', '6768768', 'ugugugy', 78798, 'Bagé', 'RS', '2000-09-02', 'masculino', 'iuyui', 0),
(234, 'fabio', 'vasques', '53999367651', '', '02041884070', '1096853931', 'joaquim gasso borges', 841, 'Bagé', 'RS', '1987-11-17', 'masculino', 'pedra branca', 0),
(235, 'ana sonia', 'da silva', '68678687', '', '27202713306', '68687', 'uygygy', 7887, 'Bagé', 'RS', '8768-06-08', 'femenino', 'yiuyi', 0),
(236, 'Julia Clara', 'Gomes', '588888', '', '62945853922', '88888', 'Centro', 325, 'Bagé', 'RS', '2007-03-02', 'femenino', 'Centro', 0),
(237, 'Sarah Clara', 'Nair Nogueira', '78789787989', '', '90447776029', '787987', 'chico mendes', 113, 'Bagé', 'RS', '1979-05-25', 'femenino', 'getulio vargas', 0),
(238, 'tomas ', 'pedroso cardoso', '76876876', '678678', '69436357001', '678678', 'uiyiuyiu', 779, 'Bagé', 'RS', '0008-06-07', 'masculino', 'uyiyui', 0),
(239, 'rua benicio', 'da conceicao', '77878', '786786', '35946569007', '678678', 'uyuyut', 654, 'Bagé', 'RS', '7868-06-07', 'masculino', 'huiyui', 0),
(240, 'joao ', 'noah rocha', '6767768', '7678687', '92331963053', '8687', 'yiyiyuy', 123456, 'Bagé', 'RS', '0007-07-06', 'masculino', 'jouoi', 0),
(241, 'Matheus CÃ©sar', 'Jorge da Luz', '79878797', '797879', '66799653069', '678767868', 'guguyug', 6678678, 'bage', 'rs', '2021-03-17', 'masculino', 'pedra branca', 96418260),
(243, 'Eduardo Thomas', 'Jorge da Luz', '8778', '798798', '01039905005', '78798', 'Avenida Venâncio Aires', 23244, 'Santo Ângelo', 'RS', '1987-11-17', 'masculino', '98803000', NULL),
(244, 'Rosangela Nair ', 'Viana', '67879', '89798789', '39125915045', '8898', 'Rua E', 4343, 'Porto Alegre', 'RS', '1987-11-17', 'femenino', 'Belém Novo', 91780256),
(245, 'Luna Elaine', 'dos Santos', '5135388170', '5135388170', '81992423024', '453052848', 'Rua Alcides Ilha', 4, 'Canoas', 'RS', '1985-06-11', 'femenino', 'Harmonia', 92325630),
(246, 'Fabiana LavÃ­nia', 'Oliveira', '78979', '79789', '71423448065', '798789', 'Beco H', 32321312, 'Porto Alegre', 'RS', '1987-11-17', 'femenino', 'Cristal', 90820290),
(251, 'Gustavo Thiago', 'Bryan Moreira', '5325846976', '53999015304', '48368984041', '424583136', 'Rua Joaquim Gasso', 555, 'Bagé', 'RS', '1987-11-17', 'masculino', 'Pedras Brancas', 96418260),
(253, 'Emanuel ', 'Juan Lopes', '5326415851', '53986378660', '08859265010', '498518942', 'Rua Adolfo Camargo', 555, 'Pelotas', 'RS', '1987-11-17', 'masculino', 'Fragata', 96030022),
(254, 'cecilia ', 'clara', '5129420579', '51981467308', '28086627004', '353262523', 'Rua Joaquim Gasso', 555, 'Bagé', 'RS', '1987-11-17', 'femenino', 'Pedras Brancas', 96418260),
(255, 'Betina Lara', 'Larissa Nogueira', '5327492148', '53998040966', '50042103061', '366346015', 'Rua Rissiere Scardoeli', 333, 'Bagé', 'RS', '1987-11-17', 'femenino', 'Industrial I', 96413110),
(259, 'Rafaela Elza', 'Carolina Corte Real', '5326847609', '53995587114', '42472360088', '209083645', 'Rua Clementino Molina', 555, 'Bagé', 'RS', '1987-11-17', 'femenino', 'Tarumã', 96405350);

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `cod_servicos` int NOT NULL,
  `filtro_combustivel` varchar(80) DEFAULT NULL,
  `filtro_cabine` varchar(80) DEFAULT NULL,
  `filtro_ar` varchar(80) DEFAULT NULL,
  `filtro_oleo` varchar(80) DEFAULT NULL,
  `data_troca` date NOT NULL,
  `proxima_troca` date NOT NULL,
  `veiculo_cod_veiculo` int NOT NULL,
  `veiculo_placa_veiculo` int NOT NULL,
  `cliente_codcliente` int NOT NULL,
  `cliente_login_cod_login` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

-- --------------------------------------------------------

--
-- Estrutura para tabela `teste`
--

CREATE TABLE `teste` (
  `id` int NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `sobrenome_cliente` varchar(50) NOT NULL,
  `telefone1_cliente` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `teste`
--

INSERT INTO `teste` (`id`, `nome_cliente`, `sobrenome_cliente`, `telefone1_cliente`) VALUES
(1, 'fabio Geovane', 'porto vasques', NULL),
(2, 'Natcheli', 'vasques', NULL),
(3, 'fulano', 'de tal', '53999367651'),
(4, 'ciclano', 'de tal', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `ip`, `nome`) VALUES
(1, 'fabio@gmail.com', '6e63aa9f23a7ff9ff9b1f4f3a0a3f1e9', NULL, 'Fábio Vasques'),
(2, 'teste@gmail.com', '6e63aa9f23a7ff9ff9b1f4f3a0a3f1e9', NULL, 'teste'),
(3, 'mauro@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'Mauro'),
(4, 'mauro@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'Mauro'),
(5, 'mauro@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'Mauro'),
(6, 'mauro@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'Mauro'),
(9, 'mateus@gmail.com', '0e1ebad68af7f0ae4830b7ac92bc3c6f', NULL, 'Mateus'),
(10, 'mateus@gmail.com', '0e1ebad68af7f0ae4830b7ac92bc3c6f', NULL, 'Mateus'),
(11, 'mateus@gmail.com', '0e1ebad68af7f0ae4830b7ac92bc3c6f', NULL, 'Mateus'),
(12, 'mateus@gmail.com', '0e1ebad68af7f0ae4830b7ac92bc3c6f', NULL, 'Mateus');

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `placa_veiculo` int NOT NULL,
  `tipo_veiculo` varchar(25) NOT NULL,
  `cor_veiculo` varchar(20) NOT NULL,
  `modelo_veiculo` varchar(45) NOT NULL,
  `fabricante_veiculo` varchar(45) NOT NULL,
  `ano_fabricacao_veiculo` date NOT NULL,
  `km_veiculo` int NOT NULL,
  `obs_veiculo` varchar(45) DEFAULT NULL,
  `cliente_codcliente` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codcliente`),
  ADD UNIQUE KEY `cpf_cliente` (`cpf_cliente`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`cod_servicos`,`veiculo_placa_veiculo`,`cliente_codcliente`,`cliente_login_cod_login`),
  ADD KEY `fk_servicos_veiculo1_idx` (`veiculo_placa_veiculo`),
  ADD KEY `fk_servicos_cliente1_idx` (`cliente_codcliente`,`cliente_login_cod_login`);

--
-- Índices de tabela `teste`
--
ALTER TABLE `teste`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`placa_veiculo`),
  ADD KEY `fk_veiculo_cliente1_idx` (`cliente_codcliente`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codcliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;
--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `cod_servicos` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `teste`
--
ALTER TABLE `teste`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_servicos_cliente1` FOREIGN KEY (`cliente_codcliente`) REFERENCES `cliente` (`codcliente`),
  ADD CONSTRAINT `fk_servicos_veiculo1` FOREIGN KEY (`veiculo_placa_veiculo`) REFERENCES `veiculo` (`placa_veiculo`);

--
-- Restrições para tabelas `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `fk_veiculo_cliente1` FOREIGN KEY (`cliente_codcliente`) REFERENCES `cliente` (`codcliente`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
