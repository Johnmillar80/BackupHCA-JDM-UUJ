-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 07:17 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_chat_anonymous`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'johnmillar2018', 'johnmillar@gmail.com', '527bd5b5d689e2c32ae974c6229ff785', '2018-04-01 16:21:48'),
(2, 'Jane1', 'jane@hotmail.co.uk', '3a18aacd193d5be8f39a443d5d0eb220', '2018-04-02 14:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `calendarsystem`
--

CREATE TABLE `calendarsystem` (
  `id` int(11) UNSIGNED NOT NULL,
  `unique_id` varchar(50) NOT NULL,
  `item` varchar(20) NOT NULL,
  `start_day` int(11) DEFAULT NULL,
  `end_day` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `canceled` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendarsystem`
--

INSERT INTO `calendarsystem` (`id`, `unique_id`, `item`, `start_day`, `end_day`, `start_time`, `end_time`, `canceled`) VALUES
(4, '1', 'MentalHealth', 1522706400, 1522706400, 64800, 66600, 1),
(5, '16', 'FinancialHealth', 1524002400, 1524002400, 39600, 41400, 1),
(6, '09248', 'MentalHealth', 1522620000, 1522620000, 39600, 41400, 0),
(7, '877897987987', 'MentalHealth', 1524175200, 1524175200, 50400, 52200, 0),
(8, 'xKeCxHO1', 'EmotionalHealth', 1522792800, 1522792800, 36000, 37800, 0),
(9, 'fQZtJwH5', 'FinancialHealth', 1523570400, 1523570400, 36000, 43200, 1),
(10, '1abGaqOu', 'FinancialHealth', 1523570400, 1523570400, 0, 3600, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(32) NOT NULL,
  `text` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatroom`
--

INSERT INTO `chatroom` (`id`, `time`, `username`, `text`) VALUES
(1, '2018-03-16 12:02:14', 'sTIbApct', 'Hello my name is john'),
(2, '2018-03-16 12:06:58', 'CXurB4SQ', 'Hello I am 22'),
(3, '2018-03-16 12:10:40', 'eZ2C5yrC', 'Hello'),
(4, '2018-03-16 12:58:06', 'k4pc4n4w', 'hello i am k4pc4n4w'),
(5, '2018-03-22 10:58:35', 'vwnm4O4', 'hello'),
(6, '2018-03-31 11:09:28', 'e4HDR3IR', 'pdoiapowri'),
(7, '2018-03-31 11:26:39', '3b2WgZ3K', 'hello'),
(8, '2018-03-31 11:57:25', 'zclkas', 'oajsdp'),
(9, '2018-04-04 15:38:30', '9VsZlc6T', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `councillors`
--

CREATE TABLE `councillors` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `address` varchar(80) NOT NULL,
  `university` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `employer` varchar(50) NOT NULL,
  `nhs_employee_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `councillors`
--

INSERT INTO `councillors` (`id`, `username`, `email`, `password`, `trn_date`, `address`, `university`, `qualification`, `employer`, `nhs_employee_code`) VALUES
(1, 'gerry1', 'gerry1@gmail.com', '6daf00c7886933595f39114392dfe0c2', '2018-03-16 12:52:37', '202 moy armagh', 'Queens Belfast', '2.1', 'NHS', '000000006664'),
(2, 'AnnaMulvenna', 'annam@gmail.com', '232d3b5d0779786f53d8be9bfe18f80e', '2018-03-16 13:56:09', '5 lisburn road belfast', 'Queens Belfast', '1st Class Honours', 'NHS Craigavon', '000000033434'),
(3, 'johnmillar2018', 'johnmillar80@gmail.com', '527bd5b5d689e2c32ae974c6229ff785', '2018-03-16 14:00:26', '166 Road, Benburb', 'Ulster University', '2.1', 'NHS Craigavon', '000000002339'),
(4, 'johnmillar2018', 'johnmillar80@gmail.com', '527bd5b5d689e2c32ae974c6229ff785', '2018-03-22 12:04:12', '147 Maydow pomeroy', 'Queens Belfast', '2.1', 'NHS Craigavon', '0000000022273'),
(5, 'john', 'johnmillar80@NHS.co.uk', '527bd5b5d689e2c32ae974c6229ff785', '2018-03-22 12:05:52', 'aajd', '2.1', 'sadsdf', 'ffff', '000000002233'),
(6, 'John1', 'JohnMillar50@hotmail.co.uk', 'e06ce282ec5c0f9701ec03d10690b2af', '2018-03-24 13:03:12', '134 heloo lane', 'Queens Belfast', '1st Class Honours', 'NHS Craigavon', '00000000223323'),
(7, 'Jane1', 'janes@gmail.com', '3a18aacd193d5be8f39a443d5d0eb220', '2018-03-31 13:52:11', 'bristol', 'Queens Belfast', '2.1', 'NHS Bristol', '0082329392492'),
(8, 'gerry1', 'gerry1@gmail.com', '6daf00c7886933595f39114392dfe0c2', '2018-04-01 15:28:01', 'gerry13 rd tyrone', 'Queens Belfast', '1st Class Honours', 'NHS Craigavon', '340294-0294'),
(9, 'johnmillar2018', 'johnmillar80@NHS.co.uk', '527bd5b5d689e2c32ae974c6229ff785', '2018-04-01 15:38:09', 'johnroad street', 'ksd', 'asdasdsdasa', 'asdasd', '2344'),
(10, 'EmmaHurson123', 'ehurson@nhs.com', '37a5802b4de92f167baca25a80f60a94', '2018-04-03 17:48:11', 'moy road armagh', 'Queens Belfast', '1st Class Honours', 'NHS Craigavon', '1-9103133283'),
(11, 'JohnMillar99', 'John12345@nhs.com', '527bd5b5d689e2c32ae974c6229ff785', '2018-04-04 16:52:57', '74328 Moy Armagh', 'uuj', '2.1', 'nhs moy', '092749823948');

-- --------------------------------------------------------

--
-- Table structure for table `webchat_lines`
--

CREATE TABLE `webchat_lines` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(16) NOT NULL,
  `gravatar` varchar(32) NOT NULL,
  `text` varchar(255) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webchat_lines`
--

INSERT INTO `webchat_lines` (`id`, `author`, `gravatar`, `text`, `ts`) VALUES
(35, 'hello', '4ebed972469d8d9d31f3b1c869bd8d3d', 'hello', '2018-04-04 17:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `webchat_users`
--

CREATE TABLE `webchat_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(16) NOT NULL,
  `gravatar` varchar(32) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webchat_users`
--

INSERT INTO `webchat_users` (`id`, `name`, `gravatar`, `last_activity`) VALUES
(14, 'hello', '4ebed972469d8d9d31f3b1c869bd8d3d', '2018-04-04 17:08:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendarsystem`
--
ALTER TABLE `calendarsystem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `councillors`
--
ALTER TABLE `councillors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webchat_lines`
--
ALTER TABLE `webchat_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ts` (`ts`);

--
-- Indexes for table `webchat_users`
--
ALTER TABLE `webchat_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `last_activity` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `calendarsystem`
--
ALTER TABLE `calendarsystem`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `councillors`
--
ALTER TABLE `councillors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `webchat_lines`
--
ALTER TABLE `webchat_lines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `webchat_users`
--
ALTER TABLE `webchat_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
