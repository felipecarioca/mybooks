-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Dez-2019 às 23:37
-- Versão do servidor: 10.1.39-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybooks`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `paginas` int(8) DEFAULT NULL,
  `capa` varchar(256) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `lido` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `paginas`, `capa`, `id_usuario`, `lido`) VALUES
(1, 'Harry Potter e a Pedra Filosofal', 125, 'http://statics.livrariacultura.net.br/products/capas_lg/935/370935.jpg', 1, 0),
(2, 'Harry Potter e a Câmara Secreta', 987, 'https://images-na.ssl-images-amazon.com/images/I/51rJ3wNX4ZL._SX327_BO1,204,203,200_.jpg', 1, 0),
(23, 'Harry Potter e o Prisioneiro de Askaban', 465, 'https://images-na.ssl-images-amazon.com/images/I/51le1i4HkkL._SX330_BO1,204,203,200_.jpg', NULL, 0),
(24, 'Harry Potter e o Cálice de Fogo', 987, 'https://images-na.ssl-images-amazon.com/images/I/51IA2UEqA-L._SX332_BO1,204,203,200_.jpg', NULL, 0),
(25, 'Harry Potter e a Ordem da Fênix', 654, 'https://images-na.ssl-images-amazon.com/images/I/41UL%2BAkyeuL._SX338_BO1,204,203,200_.jpg', NULL, 0),
(26, 'Harry Potter e o Enígma do Príncipe', 552, 'https://i2.wp.com/www.cinemadebuteco.com.br/wp-content/uploads/2016/11/capa-harry-potter-e-o-enigma-do-principe.jpg?fit=946%2C1388&ssl=1', NULL, 0),
(27, 'Harry Potter e as Relíquias da Morte', 822, 'https://http2.mlstatic.com/harry-potter-e-as-reliquias-da-morte-7-capa-comum-D_NQ_NP_678019-MLB27819651018_072018-F.jpg', NULL, 0),
(28, 'Harry Potter e o Cálice de Fogo', 535, 'http://books.google.com/books/content?id=ZDgQCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 1),
(29, 'Um Pouco Mais Sobre Harry Potter', 82, 'http://books.google.com/books/content?id=z_JRBQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(30, 'Harry Potter e a Ordem da Fênix', 703, 'http://books.google.com/books/content?id=9TcQCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 1),
(31, 'O Senhor dos Anéis', 1232, 'http://books.google.com/books/content?id=kNBJDwAAQBAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', NULL, 1),
(32, 'Romeu e Julieta', 64, 'http://books.google.com/books/content?id=f7Y627Df4MoC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(33, 'ANIMAIS FANTÁSTICOS E ONDE HABITAM: O ROTEIRO ORIGINAL', 304, 'http://books.google.com/books/content?id=4GGMDgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(34, 'Pai Rico, Pai Pobre - Edição de 20 anos atualizada e ampliada', 336, 'http://books.google.com/books/content?id=rBdiDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(36, 'O dia em que Felipe sumiu', 88, 'http://books.google.com/books/content?id=3XwrDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(37, 'Felipe Calderón', 113, 'http://books.google.com/books/content?id=gkMFzTS1OxcC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(38, 'O mundo segundo Felipe Neto', 128, 'http://books.google.com/books/content?id=gvurDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(39, 'Historia de Los Protestantes Españoles Y de Su Persecucion Por Felipe II.', 460, 'http://books.google.com/books/content?id=o35bexY_6McC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(40, 'Felipe Neto - A Vida Por Trás Das Câmeras', 64, 'http://books.google.com/books/content?id=Y9hwDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(41, 'The Town of San Felipe and Colonial Cacao Economies', 189, 'http://books.google.com/books/content?id=zC0LAAAAIAAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(42, 'Como Star Wars conquistou o universo', 616, 'http://books.google.com/books/content?id=3ulYDQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(43, 'Star Wars e a Filosofia', 448, 'http://books.google.com/books/content?id=W3jQCgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(44, 'Star Wars: Phasma', 432, 'http://books.google.com/books/content?id=eSKtDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(45, 'Star Wars: perseguição ao Jedi', 480, 'http://books.google.com/books/content?id=gMBDDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(46, 'EGW Ed. 163 - Star Wars Battlefront', 84, 'http://books.google.com/books/content?id=MKShDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(47, 'Star Wars: a Resistência Renasce', 368, 'http://books.google.com/books/content?id=ILa9DwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(48, 'Finding the Force of the Star Wars Franchise', 308, 'http://books.google.com/books/content?id=PB57P_dOF7EC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(50, 'Lunabean\'s Star Wars', NULL, 'http://books.google.com/books/content?id=dVss9oEHqQoC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(51, 'Lunabean\'s Unofficial \"Lego Star Wars\" Walkthrough and Strategy Guide', NULL, 'http://books.google.com/books/content?id=z9CjkiB8BTAC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(52, 'Black Feat', 294, 'http://books.google.com/books/content?id=65DtCgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(53, 'O teste', 320, 'http://books.google.com/books/content?id=hYm4AwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(54, 'Livro Como Passar no Teste de Proficiência da ICAO', 112, 'http://books.google.com/books/content?id=x2olDAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(55, 'Teste de Software', 304, 'http://books.google.com/books/content?id=I2a2BAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(56, 'Freud E O Teste de Realidade', 162, 'http://books.google.com/books/content?id=JEbPokrIDbsC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(57, 'Descortinando o teste psicológico', 156, 'http://books.google.com/books/content?id=P2Fb5P4UyggC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(58, 'Teste de Rorscharch: atlas e dicionário', 227, 'http://books.google.com/books/content?id=-oABBW8brsIC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(59, 'Teste', 85, 'http://books.google.com/books/content?id=jApRBQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(60, 'Goose', 256, 'http://books.google.com/books/content?id=BukRBgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(61, 'The Trial of Mother Goose', 56, 'http://books.google.com/books/content?id=r2xjDBYDyjEC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(62, 'The Hawaiian Goose', 184, 'http://books.google.com/books/content?id=5iPqStIw9LIC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(63, 'The Goose in Indian Literature and Art', 74, 'http://books.google.com/books/content?id=PMsUAAAAIAAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(64, 'In Search of the Canada Goose', 149, 'http://books.google.com/books/content?id=-ApZAAAAYAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', NULL, 0),
(65, 'The Golden Goose', 49, 'http://books.google.com/books/content?id=lPWHQlqLowoC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(66, 'Goose Production', 146, 'http://books.google.com/books/content?id=LqXjJn1wdGcC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(67, 'The Goose That Laid the Golden Eggs', 24, 'http://books.google.com/books/content?id=IlxIBnFslXIC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(68, 'Lionel Messi', NULL, 'http://books.google.com/books/content?id=Eh8RXEwYRvcC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(69, 'Lionel Messi', 32, 'http://books.google.com/books/content?id=0vEuCgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0),
(70, 'João quer ser o Messi', 1000, 'http://books.google.com/books/content?id=bz-lDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(8) NOT NULL,
  `email` varchar(32) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `nome` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `nome`) VALUES
(1, 'felipe.lfpm@gmail.com', '1234', 'Felipe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
