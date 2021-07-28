-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 23/04/2021 às 14:51
-- Versão do servidor: 8.0.24
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
(16, 'Giovanna Rafaela ', 'Elaine Oliveira', '(54) 2875-4950', '(54) 98589-4306', '710.989.130-51', '200903627', 'Rua Irmã Jandyra Maschio', 4343, 'Caxias do Sul', 'RS', '1994-02-18', 'femenino', 'Jardim Eldorado', 95059275),
(17, 'Rosângela Jaqueline ', 'Sales De Montes', '(53) 2785-6386', '(53) 99442-7692', '099.461.790-91', '383887252', 'Rua Padre Pedro Luiz', 4324, 'Bagé', 'RS', '1948-09-20', 'on', 'Jardim do Castelo', 96415640),
(18, 'Jorge Heitor ', 'Souza de Luiz', '(53) 2597-5778', '(', '362.317.030-53', '503997602', 'Rua Zeca Tavares', 324, 'Bagé', 'RS', '1984-05-16', 'on', 'Estrela D\'Alva', 96415080),
(19, 'caetano', 'engrafe', '(53) 99946-7766', '(', '968.269.670-49', '', 'Rua Capitão Álvaro da Cruz Marques', 123, 'Bagé', 'RS', '', NULL, 'Pedras Brancas', 96418410),
(20, 'Luan Kauê ', 'Samuel ', '5125594576', '51998980176', '723.262.940-09', '174989258', 'Rua Joaquim Gasso', 4343, 'Bagé', 'RS', '1995-07-18', 'on', 'Pedras Brancas', 96418260),
(21, 'Manoel Otávio Renan ', 'Conceição', '5137457212', '51981158118', '578.683.570-70', '486937379', 'Rua das Macieiras', 438, 'Porto Alegre', 'RS', '1969-05-04', 'on', 'Lomba do Pinheiro', 91560030),
(22, 'Henry Ricardo ', 'Rocha', '5429171595', '54983650745', '429.607.610-81', '184345571', 'Rua João Massochim', 434, 'Erechim', 'RS', '1944-10-24', 'on', 'Esperança', 99701414),
(23, 'Clarice Tatiane', ' Carvalho', '5135497819', '51994979696', '161.072.930-78', '234163288', 'Rua Santa Úrsula', 322, 'Viamão', 'RS', '1960-08-13', 'on', 'Martinica', 94460460);

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `cod_servicos` int NOT NULL,
  `data_troca` date DEFAULT NULL,
  `proxima_troca` date DEFAULT NULL,
  `qtd_oleo` varchar(20) DEFAULT NULL,
  `km` varchar(100) DEFAULT NULL,
  `filtro_combustivel` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `filtro_cabine` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_filtro_oleo` varchar(8) DEFAULT NULL,
  `status_filtro_ar` varchar(8) DEFAULT NULL,
  `status_filtro_cabine` varchar(8) DEFAULT NULL,
  `status_filtro_combustivel` varchar(8) DEFAULT NULL,
  `obs_troca` varchar(100) DEFAULT NULL,
  `filtro_ar` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cliente_codcliente` int NOT NULL,
  `tipo_oleo` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `filtro_oleo` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `veiculo_cod_veiculo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `servicos`
--

INSERT INTO `servicos` (`cod_servicos`, `data_troca`, `proxima_troca`, `qtd_oleo`, `km`, `filtro_combustivel`, `filtro_cabine`, `status_filtro_oleo`, `status_filtro_ar`, `status_filtro_cabine`, `status_filtro_combustivel`, `obs_troca`, `filtro_ar`, `cliente_codcliente`, `tipo_oleo`, `filtro_oleo`, `veiculo_cod_veiculo`) VALUES
(1, '2021-04-06', '2022-04-06', NULL, NULL, 'teste1', 'teste2', 'sim', 'nao', 'sim', 'nao', 'tudo ok', 'teste3', 5, 'teste4', 'teste5', 2),
(2, '2021-04-06', '2022-04-06', NULL, NULL, 'teste', 'teste', NULL, NULL, NULL, NULL, 'ok', 'teste', 5, NULL, 'teste', 9),
(3, '2021-04-06', '2022-04-06', NULL, NULL, 'teste', 'teste', NULL, NULL, NULL, NULL, 'ok', 'teste', 1, NULL, 'teste', 2),
(4, '2021-04-06', '2022-04-06', NULL, NULL, 'teste1', 'teste2', 'teste5', 'teste4', 'sim', 'sim', 'ok', 'teste3', 2, NULL, 'sim', 1),
(5, '2021-04-06', '2022-04-06', 'teste5', 'teste4', 'teste1', 'teste2', '1 LT', '70000', 'sim', 'sim', 'ok', 'teste3', 8, NULL, 'sim', 7),
(6, '2021-04-06', '2022-04-06', '3 LT', '70000', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 12, NULL, 'teste5', 14),
(7, '2021-04-06', '2022-04-06', 'teste5', 'teste4', 'teste1', 'teste2', '1 LT', '87000', 'sim', 'sim', 'ok', 'teste3', 5, NULL, 'sim', 9),
(8, '2021-04-06', '2022-04-06', 'teste5', 'teste4', 'teste1', 'teste2', '3 LT', '86000', 'nao', 'nao', 'ok', 'teste3', 13, NULL, 'nao', 16),
(9, '2021-04-06', '2022-04-06', 'teste5', 'teste4', 'teste1', 'teste2', '2 LT', '56000', 'nao', 'nao', 'ok', 'teste3', 14, 'nao', 'nao', 20),
(10, '2021-04-06', '2022-04-06', '3 LT', '150000', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 19, 'teste5', 'teste4', 30),
(11, '2021-04-06', '2022-04-06', '3 LT', '125876', 'psc874', 'ACP824', 'sim', 'nao', 'nao', 'sim', 'Veículo com vazamentos de óleo', 'ARL8822', 5, 'PSL909', 'ACA791', 3),
(12, '2021-04-06', '2022-04-06', '3 LT', '123987', 'teste1', 'teste2', 'nao', 'nao', 'nao', 'nao', 'Tudo ok com o veículo', 'teste3', 20, 'PSL909', 'teste4', 31),
(13, '2023-08-06', '2024-08-06', '3 LT', '125000', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'Tudo ok', 'teste3', 20, 'PSL909', 'teste4', 31),
(14, '2021-04-08', '2022-04-08', '2 LT', '89570', 'teste1', 'teste2', 'sim', 'nao', 'nao', 'nao', 'Tudo ok', 'teste3', 21, 'teste5', 'teste4', 33),
(15, '2019-08-12', '2020-08-12', '2 LT', '45678', 'teste1', 'teste2', NULL, 'sim', 'sim', 'sim', 'tudo ok', 'teste3', 5, 'teste5', 'teste4', 9),
(16, '2020-01-05', '2021-01-05', '2 LT', '55489', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 29),
(17, '2021-04-12', '2022-04-12', '3 LT', '67890', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', '', 'teste3', 5, 'teste5', 'teste4', 9),
(18, '2021-04-12', '2022-04-12', '2 LT', '55500', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 29),
(19, '2018-06-14', '2019-06-14', '2 LT', '56789', 'teste1', 'teste2', 'nao', 'nao', 'nao', 'nao', 'ok', 'teste3', 5, 'teste5', 'teste4', 3),
(20, '2021-04-12', '2022-04-12', '1 LT', '56793', 'teste1', 'teste2', 'sim', 'nao', 'nao', 'nao', 'ok', 'teste3', 5, 'teste5', 'teste4', 3),
(21, '2021-04-12', '2022-04-12', '2 LT', '567000', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 29),
(22, '2019-04-11', '2020-04-11', '2 LT', '45454', 'teste1', 'teste2', 'nao', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 29),
(23, '2019-06-12', '2020-06-12', '1 LT', '43434', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 35),
(24, '2021-04-12', '2022-04-12', '2 LT', '534545', 'ertet', 'tetert', 'nao', 'sim', 'sim', 'nao', 'ok', 'tetert', 5, 'etet', 'terte', 35),
(25, '2020-04-10', '2021-04-10', '3 LT', '68200', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 9),
(26, '2019-01-14', '2020-01-14', '1 LT', '32456', 'teste1', 'teste2', 'sim', 'nao', 'sim', 'sim', '', 'teste3', 5, 'teste5', 'teste4', 36),
(27, '2021-04-14', '2022-04-14', '1 LT', '4345345', 'teste1', 'teste2', 'sim', 'sim', 'nao', 'nao', 'ok', 'teste3', 5, 'teste5', 'teste4', 36),
(28, '2019-02-14', '2020-02-14', '2 LT', '76543', 'teste1', 'teste2', 'sim', 'nao', 'nao', 'nao', 'ok', 'teste3', 5, 'teste5', 'teste4', 37),
(29, '2019-09-14', '2020-07-14', '3 LT', '29300', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 38),
(30, '2021-04-14', '2022-04-14', '2 LT', '38698', 'Teste1', 'Teste2', 'sim', 'sim', 'sim', 'sim', 'Tudo ok', 'Teste3', 5, 'Teste5', 'Teste4', 37),
(31, '2021-04-15', '2022-04-15', '3 LT', '545454', 'teste1', 'teste2', 'nao', 'nao', 'nao', 'nao', 'ok', 'teste3', 5, 'teste5', 'teste4', 38),
(32, '2019-07-15', '2020-07-15', '1 LT', '55000', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 22, 'teste5', 'teste4', 39),
(33, '2020-04-14', '2021-04-14', '2 LT', '53454', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', '', 'teste3', 5, 'teste5', 'teste4', 9),
(34, '2020-04-01', '2021-04-01', '2 LT', '455678', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 3),
(35, '2020-03-31', '2021-03-31', '2 LT', '86321', 'Teste1', 'Teste2', 'sim', 'sim', 'nao', 'sim', 'Ok', 'Teste3', 5, 'Teste5', 'Teste4', 4),
(36, '2021-04-16', '2022-04-16', '2 LT', '86321', 'Teste1', 'Teste2', 'sim', 'sim', 'sim', 'nao', 'Ok', 'Teste3', 5, 'Teste5', 'Teste4', 4),
(37, '2020-04-08', '2021-04-08', '2 LT', '78253', 'Teste1', 'Teste2', 'nao', 'sim', 'sim', 'sim', 'Ok', 'Teste3', 5, 'Teste5', 'Teste 4', 36),
(38, '2020-01-02', '2021-01-02', '2 LT', '40000', 'G10225F', 'CF9323', 'sim', 'nao', 'nao', 'sim', 'VEICULO OK', 'CA9290', 19, 'F1 5W40', 'PHP5548', 41),
(39, '2021-04-18', '2022-04-18', '2 LT', '43000', 'TESTE1', 'TESTE2', 'sim', 'nao', 'sim', 'sim', 'OK', 'TESTE3', 19, 'TESTE5', 'TESTE4', 41),
(40, '2021-04-19', '2022-04-19', '15.6', '78907', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 9),
(41, '2021-04-19', '2022-04-19', '21.8', '7567567', 'teste1', 'teste2', 'nao', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste', 'teste4', 9),
(42, '2019-04-23', '2020-04-23', '3.43', '23456', 'teste1', 'testee2', 'sim', 'sim', 'nao', 'nao', 'veiculo ok', 'teste3', 23, 'teste5', 'teste4', 42),
(43, '2021-04-12', '2022-04-12', '3.4', '34567', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 23, 'teste5', 'teste4', 42),
(44, '2019-10-23', '2020-10-23', '2.5', '45678', 'teste1', 'teste2', 'sim', 'sim', 'nao', 'sim', 'ok', 'teste3', 23, 'teste5', 'teste4', 43),
(45, '2020-04-12', '2021-04-12', '2.5', '55678', 'teste1', 'teste2', 'sim', 'nao', 'sim', 'sim', 'ok', 'teste3', 23, 'teste5', 'teste4', 43),
(46, '2021-04-23', '2022-04-23', '2.5', '65789', 'teste1', 'teste2', 'sim', NULL, NULL, NULL, 'ok', 'teste3', 23, 'teste5', 'teste4', 43),
(47, '2021-04-23', '2022-04-23', '3.6', '87900', 'teste1', 'teste2', 'nao', 'nao', 'sim', 'sim', 'ok', 'teste3', 22, 'teste5', 'teste4', 39),
(48, '2020-04-23', '2021-04-20', '5.9', '45678', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 44),
(49, '2021-04-23', '2022-04-23', '5.8', '56798', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 44),
(50, '2020-04-20', '2021-04-20', '', '45679', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 45),
(51, '2021-04-23', '2022-04-23', '3.2', '4343443', 'teste2', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 45),
(52, '2020-04-15', '2021-04-15', '2.5', '23456', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 46),
(53, '2021-04-23', '2022-04-23', '2.5', '33456', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 46),
(54, '2020-07-01', '2021-07-01', '2.5', '45678', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 47),
(55, '2021-07-23', '2022-07-23', '2.8', '55678', 'teste1', 'teste2', 'sim', 'sim', 'sim', 'sim', 'ok', 'teste3', 5, 'teste5', 'teste4', 47);

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
(1, 'ggg4444', 'Carro', 'verde', 'Gol', 'Fiat', '', NULL, NULL, 2),
(2, 'nbh3456', 'Carro', 'vermelho', 'Gol', 'Volkswagen', '', NULL, NULL, 1),
(3, 'MYI1864', 'Carro', 'azul', 'uno', 'Fiat', '', NULL, NULL, 5),
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
(22, 'IJW-6650', 'Carro', 'branco', 'Onix', 'Chevrolet', '1987-11-17', NULL, NULL, 16),
(23, 'IXA5022', 'Carro', 'branco', 'Corsa', 'Chevrolet', '2000-12-18', NULL, NULL, 17),
(24, 'IUL2584', 'Moto', 'preto', 'Uno', 'Fiat', '', NULL, NULL, 17),
(25, 'INW6909', 'Caminhão', 'branco', '1114', 'Mercedes-Benz', '', NULL, NULL, 5),
(26, 'IKP5990', 'Moto', 'cinsa', 'Uno', 'Chevrolet', '', NULL, NULL, 18),
(27, 'IRN4937', 'Carro', 'branco', 'Gol', 'Volskswagen', '', NULL, NULL, 18),
(28, 'ITP8282', 'Moto', 'azul', '750 Virago', 'yamaha 750', '', NULL, NULL, 5),
(29, 'IWB7956', 'Moto', 'azul', 'Biz 100', 'honda biz', '', NULL, NULL, 5),
(30, 'isr1762', 'Carro', 'branco', 'Onix', 'Chevrolet', '', NULL, NULL, 19),
(31, 'JPJ-6627', 'Caminhão', 'marron', '1114', 'Mercedes-Benz', '', NULL, NULL, 20),
(32, 'CTJ-9810', 'Moto', 'vermelho', '750 Virago', 'yamaha 750', '', NULL, NULL, 20),
(33, 'HTW0184', 'Moto', 'vermelho', '750 Virago', 'yamaha 750', '', NULL, NULL, 21),
(34, 'NES9023', 'Caminhão', 'branco', 'FH-420', 'Mercedes-Benz', '', NULL, NULL, 21),
(35, 'LVF-3523', 'Caminhão', 'branco', 'FH-420', 'Mercedes-Benz', '', NULL, NULL, 5),
(36, 'NEL-9024', 'Moto', 'vermelho', '750 Virago', 'yamaha 750', '', NULL, NULL, 5),
(37, 'MSO-3443', 'Carro', 'cinsa', 'Uno', 'Fiat', '', NULL, NULL, 5),
(38, 'MZS4077', 'Caminhão', 'branco', 'FH-420', 'Mercedes-Benz', '', NULL, NULL, 5),
(39, 'NEU-9051', 'Carro', 'verde', 'Gol', 'Volskswagen', '', NULL, NULL, 22),
(40, 'KHK-7416', 'Carro', 'Branco', 'Onix', 'Chevrolet', '2021-04-16', NULL, NULL, 5),
(41, 'LWZ6402', 'Moto', 'BRANCO', 'Onix', 'Chevrolet', '', NULL, NULL, 19),
(42, 'JSV6700', 'Carro', 'branco', 'Uno', 'Fiat', '', NULL, NULL, 23),
(43, 'GPQ8163', 'Moto', 'azul', '750 Virago', 'yamaha 750', '', NULL, NULL, 23),
(44, 'JVR6668', 'Caminhão', 'branco', 'FH-420', 'Mercedes-Benz', '', NULL, NULL, 5),
(45, 'MVF4878', 'Moto', 'BRANCO', '750 Virago', 'yamaha 750', '', NULL, NULL, 5),
(46, 'HRG8494', 'Carro', 'azul', 'Onix', 'Chevrolet', '', NULL, NULL, 5),
(47, 'NEQ8335', 'Carro', 'vermelho', 'Gol', 'Volskswagen', '', NULL, NULL, 5);

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
  MODIFY `codcliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `cod_servicos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `cod_veiculo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
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
