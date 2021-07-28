-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 31/03/2021 às 22:52
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
  `telefone1_cliente` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telefone2_cliente` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cpf_cliente` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rg_cliente` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rua_cliente` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `numero_rua_cliente` bigint DEFAULT NULL,
  `cidade_cliente` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `uf_cliente` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `data_nascimento_cliente` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `sexo_cliente` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bairro_cliente` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cep_cliente` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`codcliente`, `nome_cliente`, `sobrenome_cliente`, `telefone1_cliente`, `telefone2_cliente`, `cpf_cliente`, `rg_cliente`, `rua_cliente`, `numero_rua_cliente`, `cidade_cliente`, `uf_cliente`, `data_nascimento_cliente`, `sexo_cliente`, `bairro_cliente`, `cep_cliente`) VALUES
(1, 'Raul César', 'Paulo Jesus', '(67) 3685-7116', '(67) 98114-8848', '979.710.094-45', '399964563', 'Rua Antônio Vivaldi', 323, 'Campo Grande', 'MS', '1987-11-17', 'masculino', 'Vila Nossa Senhora das Graças', 79116070),
(2, 'Daniela', 'pires', '(85) 3664-8508', '(85) 98869-4051', '296.344.183-50', '182249712', 'Rua Doutor Joaquim J. Furtado', 3232, 'Caucaia', 'CE', '1987-11-17', 'femenino', 'Capuan', 61615320),
(5, 'fabio geovane', 'porto vasques', '(53) 99936-7651', '(', '020.418.840-70', '', 'Rua Joaquim Gasso', 841, 'Bagé', 'RS', '', 'on', 'Pedras Brancas', 96418260),
(6, 'teste', 'teste', '(42) 3423-4', '(43) 2423-', '730.334.496-97', '432423', 'Rua Joaquim Gasso', 323, 'Bagé', 'RS', '0034-02-04', 'masculino', 'Pedras Brancas', 96418260),
(7, 'Melissa ', 'Clarice Brito', '(98) 2632-8711', '(', '395.376.551-56', '', 'Travessa Manoel Ferreira Lima', 435, 'São Luís', 'MA', '', NULL, 'Liberdade', 65037230),
(8, 'Renan ', 'Brito', '(86) 3675-1518', '(', '420.482.956-22', '', 'Quadra 317', 5545, 'Teresina', 'PI', '', 'on', 'Itararé', 64078410),
(9, 'Kevin e Renan ', 'Mudanças Ltda', '(51) 2928-5193', '(', '25.738.262/0001-89', '', 'Rua Santa Luzia', 434, 'Viamão', 'RS', '', NULL, 'Santo Onofre', 94440530),
(10, 'Lorena Fátima', 'Cristiane Fogaça', '(86) 2865-6964', '(', '794.240.560-52', '', 'Rua Marechal Hermes da Fonseca', 545, 'Teresina', 'PI', '', NULL, 'Lourival Parente', 64022150),
(11, 'Manoel Martin', 'Fogaça', '(51) 3887-1838', '(51) 98333-6878', '365.498.780-04', '272905719', 'Rua Joaquim Gasso', 345, 'Bagé', 'RS', '1978-08-12', 'on', 'Pedras Brancas', 96418260),
(12, 'Joana Ana', 'Julia Brito', '(54) 3629-9951', '(', '010.255.200-25', '', 'Rua Tercílio Fochesato', 5435, 'Caxias do Sul', 'RS', '', 'femenino', 'Nossa Senhora do Rosário', 95045350),
(13, 'Maria Amanda', 'Carvalho', '(51) 98455-5369', '(51) 2758-7282', '306.526.870-16', '131357785', 'Rua Guilherme Kolling', 4324, 'Novo Hamburgo', 'RS', '2001-05-01', 'femenino', 'Diehl', 93530190),
(14, 'Augusto Cláudio', 'vieira', '(54) 2981-4997', '(54) 99109-7488', '077.605.600-01', '131831252', 'Rua Mário Hermindo Cauduro', 34234, 'Caxias do Sul', 'RS', '1995-10-15', 'masculino', 'Ana Rech', 95060660),
(15, 'Sarah Sara', 'Corte Real', '(51) 2730-0065', '(51) 99525-4724', '731.829.310-91', '426679416', 'Rua Sargento Max Wolff Filho', 434, 'Novo Hamburgo', 'RS', '1951-05-17', 'femenino', 'São Jorge', 93534494),
(16, 'Giovanna Rafaela ', 'Elaine Oliveira', '(54) 2875-4950', '(54) 98589-4306', '710.989.130-51', '200903627', 'Rua Irmã Jandyra Maschio', 4343, 'Caxias do Sul', 'RS', '1994-02-18', 'femenino', 'Jardim Eldorado', 95059275);

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `cod_servicos` int NOT NULL,
  `proxima_troca` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `filtro_combustivel` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `filtro_cabine` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `obs_troca` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `filtro_ar` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `data_troca` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cliente_codcliente` int NOT NULL,
  `filtro_oleo` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `veiculo_cod_veiculo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Fazendo dump de dados para tabela `servicos`
--

INSERT INTO `servicos` (`cod_servicos`, `proxima_troca`, `filtro_combustivel`, `filtro_cabine`, `obs_troca`, `filtro_ar`, `data_troca`, `cliente_codcliente`, `filtro_oleo`, `veiculo_cod_veiculo`) VALUES
(1, '2022-03-27', 'teste1', 'teste2', NULL, 'teste3', '2021-03-27', 5, 'teste4', 3),
(2, '2022-01-04', 'teste', 'teste', 'teste', 'teste', '2021-04-01', 5, 'teste', 3),
(3, 'option1', '', '', '', '', '2021-03-31', 5, 'teste', 9),
(4, '6', 'teste1', 'teste1', 'primeiro teste válido', 'teste1', '2021-03-31', 5, 'teste', 3),
(5, '12', '', '', '', '', '2021-03-31', 9, 'teste2', 8),
(6, '6', '', '', '', '', '2021-03-31', 5, 'teste', 18),
(7, '12', '', '', '', '', '2021-03-31', 5, 'teste4', 3),
(8, '6', '', '', 'teste6', '', '2021-03-31', 5, 'teste5', 3),
(9, '12', '', '', '', '', '2021-03-31', 5, 'teste6', 18),
(10, '6', '', '', '', '', '2021-03-31', 11, 'teste', 12),
(11, '12', '', '', '', '', '2021-03-31', 7, 'teste', 6),
(12, '6', '', '', '', '', '2021-03-31', 5, 'teste', 9),
(13, '12', '', '', '', '', '2021-03-31', 5, 'teste', 9),
(14, '6', '', '', '', '', '2021-03-31', 5, 'teste', 3),
(15, '12', '', '', '', '', '2021-03-31', 5, 'testee', 3),
(16, '12', '', '', '', '', '2021-03-31', 5, 'teste', 3),
(17, '6', '', '', '', '', '2021-03-31', 5, 'teste', 3),
(18, '6', '', '', '', '', '2021-04-01', 5, 'teste', 4),
(19, '12', '', '', '', '', '2021-03-31', 5, 'teste', 9),
(20, '12', '', '', '', '', '2021-03-31', 5, 'teste', 9),
(21, '12', '', '', '', '', '2021-03-31', 5, 'teste', 9),
(22, '12', '', '', '', '', '2021-03-31', 5, 'teste', 9),
(23, '12', '', '', '', '', '2021-03-31', 5, 'teste', 9),
(24, '12', '', '', '', '', '2021-03-31', 5, 'teste', 9),
(25, '6', '', '', '', '', '2021-03-31', 5, 'teste', 3),
(26, '6', '', '', '', '', '2021-04-01', 5, 'teste', 9),
(27, '12', '', '', 'teste', '', '2021-03-31', 7, 'teste', 6),
(28, '6', '', '', '', '', '2021-03-23', 15, 'teste', 21),
(29, '12', 'teste1', '', '', '', '2021-03-31', 5, 'teste23', 3),
(30, '12', '', '', '', '', '2021-03-31', 5, 'teste', 9),
(31, '12', '', '', 'Veículo chegou na loja com vários arranhoes', '', '2021-04-23', 5, 'Teste', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `ip` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `ip`) VALUES
(1, 'Fábio Vasques', 'fabio@gmail.com', '6e63aa9f23a7ff9ff9b1f4f3a0a3f1e9', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `cod_veiculo` int NOT NULL,
  `placa_veiculo` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tipo_veiculo` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cor_veiculo` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `modelo_veiculo` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `fabricante_veiculo` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ano_fabricacao_veiculo` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `km_veiculo` int DEFAULT NULL,
  `obs_veiculo` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `cliente_codcliente` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Fazendo dump de dados para tabela `veiculo`
--

INSERT INTO `veiculo` (`cod_veiculo`, `placa_veiculo`, `tipo_veiculo`, `cor_veiculo`, `modelo_veiculo`, `fabricante_veiculo`, `ano_fabricacao_veiculo`, `km_veiculo`, `obs_veiculo`, `cliente_codcliente`) VALUES
(1, 'ggg4444', 'Carro', 'verde', 'Gol', 'Fiat', '1987-11-17', NULL, NULL, 2),
(2, 'nbh3456', 'Carro', '', 'Gol', 'Fiat', '', NULL, NULL, 1),
(3, 'MYI1864', 'Carro', 'laranja', 'Gol', 'Volskswagen', '', NULL, NULL, 5),
(4, 'gfgt3232', 'Carro', 'vermelho', 'Gol', 'Fiat', '', NULL, NULL, 5),
(5, 'vgb7890', 'Carro', 'preto', 'Gol', 'Fiat', '', NULL, NULL, 6),
(6, 'gbh4345', 'Carro', 'preto', 'Uno', 'Fiat', '', NULL, NULL, 7),
(7, 'LOP2367', 'Carro', 'MARROM', 'Clio', 'Fiat', '', NULL, NULL, 8),
(8, 'ILY0778', 'Carro', 'branco', 'Onix', 'Chevrolet', '', NULL, NULL, 9),
(9, 'yyp4567', 'Moto', 'verde', 'Clio', 'Volskswagen', '', NULL, NULL, 5),
(10, 'HHN3457', 'Carro', 'CINSA', 'Gol', 'Volskswagen', '', NULL, NULL, 10),
(11, 'DDF3456', 'Moto', 'PRETO', 'Gol', 'Fiat', '', NULL, NULL, 10),
(12, 'IYO-8412', 'Carro', 'branco', 'Gol', 'Fiat', '', NULL, NULL, 11),
(13, 'IXW-1528', 'Carro', 'branco', 'Gol', 'Fiat', '', NULL, NULL, 11),
(14, 'JCL-7889', 'Carro', 'branco', 'Gol', 'Fiat', '1985-12-12', NULL, NULL, 12),
(15, 'IJD-3869', 'Moto', 'preto', 'Gol', 'Fiat', '', NULL, NULL, 12),
(16, 'IXC8757', 'Carro', 'vermelho', 'Uno', 'Fiat', '2000-03-12', NULL, NULL, 13),
(18, 'IDD0325', 'Moto', 'verde', 'Gol', 'Fiat', '1987-11-17', NULL, NULL, 5),
(19, 'IWU-5256', 'Carro', 'branco', 'Onix', 'Chevrolet', '', NULL, NULL, 14),
(20, 'IXQ-4159', 'Moto', 'preta', 'Uno', 'Fiat', '', NULL, NULL, 14),
(21, 'ILG-5744', 'Carro', 'prata', 'Gol', 'Volskswagen', '', NULL, NULL, 15),
(22, 'IJW-6650', 'Carro', 'branco', 'Onix', 'Chevrolet', '1987-11-17', NULL, NULL, 16);

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
  ADD PRIMARY KEY (`cod_servicos`,`cliente_codcliente`),
  ADD KEY `fk_servicos_cliente1_idx` (`cliente_codcliente`),
  ADD KEY `fk_servicos_veiculo1_idx` (`veiculo_cod_veiculo`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`cod_veiculo`),
  ADD UNIQUE KEY `placa_veiculo` (`placa_veiculo`),
  ADD KEY `fk_veiculo_cliente1_idx` (`cliente_codcliente`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codcliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `cod_servicos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `cod_veiculo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_servicos_cliente1` FOREIGN KEY (`cliente_codcliente`) REFERENCES `cliente` (`codcliente`),
  ADD CONSTRAINT `fk_servicos_veiculo1` FOREIGN KEY (`veiculo_cod_veiculo`) REFERENCES `veiculo` (`cod_veiculo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
