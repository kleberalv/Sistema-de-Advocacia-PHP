-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Nov-2018 às 04:14
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetoadvocacia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `audiencia`
--

CREATE TABLE `audiencia` (
  `id` int(11) NOT NULL,
  `nomeclie` varchar(100) NOT NULL,
  `telefonecli` varchar(20) NOT NULL,
  `nomeadv` varchar(100) NOT NULL,
  `telefoneadv` varchar(20) NOT NULL,
  `motaud` varchar(50) NOT NULL,
  `dataaud` date NOT NULL,
  `nomejuiz` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `audiencia`
--

INSERT INTO `audiencia` (`id`, `nomeclie`, `telefonecli`, `nomeadv`, `telefoneadv`, `motaud`, `dataaud`, `nomejuiz`) VALUES
(1, 'Simone Freita', '61 98442-9054', 'Dr. Marcos Lima', '61 99635-4512', 'Direito TributÃ¡ria', '2018-11-09', 'Dr. Reginaldo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `proces` varchar(50) NOT NULL,
  `datanasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sexo`, `cpf`, `tel`, `email`, `proces`, `datanasc`) VALUES
(1, 'Lucas Silva', 'm', '075.659.845-78', '61 98446-5238', 'lucassilva@gmail.com', 'Direito Civil', '1984-06-20'),
(2, 'Simone Freita', 'f', '082.324.695-74', '61 98442-9054', 'simonefreita@outlook.com', 'Direito TributÃ¡ria', '1988-07-20'),
(3, 'Rafael Pereira', 'm', '066.256.984-95', '61 98775-6525', 'rafaelpereira@gmail.com', 'Outros', '1990-05-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `area` varchar(50) NOT NULL,
  `admi` date NOT NULL,
  `oab` int(5) NOT NULL,
  `datanasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `sexo`, `cpf`, `tel`, `email`, `area`, `admi`, `oab`, `datanasc`) VALUES
(1, 'Dr. Kleber Alves', 'm', '070.641.329-74', '61 99127-2501', 'kleberjuniorr63@gmail.com', 'Direito Penal', '2012-06-12', 19684, '1999-01-27'),
(2, 'Dr. Isadora Rios', 'f', '075.658.415-98', '61 98449-6563', 'isadorarios@gmail.com', 'FamÃ­lia e sucessÃµes', '2013-06-17', 16985, '1997-06-17'),
(3, 'Dr. Marcos Lima', 'm', '065.496.874-85', '61 99635-4512', 'marcoslima@gmail.com', 'Direito TributÃ¡ria', '2014-06-17', 12965, '1999-09-27'),
(4, 'Dr. Carlos Eduardo', 'm', '054.415.956-78', '61 98465-2514', 'cadueduardo@yahoo.com.br', 'Direito Trabalhista', '2018-11-05', 10205, '2000-11-29'),
(5, 'Dr. Ivan LeÃ£o', 'm', '075.234.878-67', '61 98786-9098', 'ivanleao@hotmail.com', 'Direito Penal', '2002-11-11', 24806, '1958-04-15'),
(6, 'Dr. JÃºlio LeÃ£o', 'm', '034.125.796-85', '61 99565-4548', 'julioleao@gmail.com', 'Direito Administrativo', '2009-06-24', 40756, '1973-08-15'),
(7, 'Dr. Jaeder Caetano', 'm', '047.659.874-58', '61 98574-6932', 'jaedercaetano@outlook.com', 'Direito Trabalhista', '2008-08-22', 41060, '1988-09-19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reuniao`
--

CREATE TABLE `reuniao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `motivoa` varchar(50) NOT NULL,
  `da` date NOT NULL,
  `mensagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `reuniao`
--

INSERT INTO `reuniao` (`id`, `nome`, `sexo`, `tel`, `email`, `motivoa`, `da`, `mensagem`) VALUES
(1, 'Maria do Socorro', 'f', '61 99845-6366', 'mariadosocorro@gmail.com', 'Direito Administrativo', '2018-11-12', 'Gostaria de colocar uma empresa na justiÃ§a.'),
(2, 'Eliane Pereira', 'f', '61 99663-8495', 'elianepereira@hotmail.com', 'FamÃ­lia e sucessÃµes', '2018-11-30', 'Gostaria de me divorciar.'),
(3, 'Pedro Guilherme', 'm', '61 99552-3684', 'pedroguilherme@yahoo.com', 'Direito Penal', '2018-11-28', 'Gostaria de incriminar meu vizinho.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audiencia`
--
ALTER TABLE `audiencia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reuniao`
--
ALTER TABLE `reuniao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audiencia`
--
ALTER TABLE `audiencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reuniao`
--
ALTER TABLE `reuniao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
