-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2017 at 08:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmweek`
--

-- --------------------------------------------------------

--
-- Table structure for table `bm_users`
--

CREATE TABLE `bm_users` (
  `id` char(36) NOT NULL,
  `type` varchar(10) NOT NULL,
  `title` char(6) DEFAULT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bm_users`
--

INSERT INTO `bm_users` (`id`, `type`, `title`, `firstname`, `lastname`, `emailid`, `phone`, `password`, `address`, `city`, `state`, `country`, `zipcode`) VALUES
('075a56f1-7522-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'Vineer', 'sdsdsd', 'ssdsdsds@gdgd.dfd', '34343434343', 'f9384a4929844c34c100a41f34c0a5c3', NULL, NULL, NULL, NULL, NULL),
('30305283-7524-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'sdfsdfsdf', 'sdfsdfsf', 'sdffgffhj@dfgdfgd.dffd', '34343453', '0e461af5186ba92d56fae067ba749a48', NULL, NULL, NULL, NULL, NULL),
('3078ab24-7522-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'dfdfdfdf', 'dfdfdfdfd', 'dfdfdfdfd@gfgfg.gf', '45454545454', 'a70a265793c10302729b243a9e73e4e9', NULL, NULL, NULL, NULL, NULL),
('31a0f239-7523-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'fdfsfgdfgd', 'sfdsdfsdf', 'rterfv@fdgd.fghfg', '54545645', 'd5bda26a637c30e2682ce7676ea16621', NULL, NULL, NULL, NULL, NULL),
('577b879e-7515-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'retrtete', 'erwerw', 'werwerw@gdghd.dfgdf', '54564644564', 'e09ecae84434829570ec4a0302366f4e', NULL, NULL, NULL, NULL, NULL),
('63b3471f-74f3-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'jkkjgkj', 'hjghgj', 'jkjgkjgk@hjhgj.gjhgj', '68686878687', '04f3b05a0715acb0c015be7032acfa03', NULL, NULL, NULL, NULL, NULL),
('7977d617-7524-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'fsfsfsdf', 'sdfsdfsd', 'sdfsdfsf@rtyr.asda', '76543434', '5c7d0c90cf9e0ce560956179e8e82e7d', NULL, NULL, NULL, NULL, NULL),
('7be0441a-7515-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'tertertet', 'rterte', 'dfgdgd@ghfhf.dfsfs', '3434343434', '0b695362a1326b9cfdbb163e1763151b', NULL, NULL, NULL, NULL, NULL),
('7c535d2e-7537-11e7-b112-fcf8aee943ea', 'PROVIDER', NULL, 'abc', 'xyz', 'abc@xyz.com', '9876543210', 'b24331b1a138cde62aa1f679164fc62f', NULL, NULL, NULL, NULL, NULL),
('7faf81cc-7522-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'ddfdfdfgdf', 'dfgdfgdfg', 'dfgdfgdgdgd@ghgf.ghff', '24253464564', '8912c005e9606cf4eeb7d7a808bece4b', NULL, NULL, NULL, NULL, NULL),
('9a33528e-7515-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'dfgdgd', 'dfgdgdg', 'dfdgfdgdg@dghd.gf', '45445454', '0b695362a1326b9cfdbb163e1763151b', NULL, NULL, NULL, NULL, NULL),
('c4ca4238a0b923820dcc509a6f75849b', 'PROVIDER', 'Mr.', 'Vineet', 'Mishra', 'vineetm616@gmail.com', '9582431132', '4db6057bd17915c7f83ba00789c48fdb', '514, 8th Cross Road', 'Bangalore', 'Karnatka', 'India', '560100'),
('ddc55b21-7522-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'gdfgdgdg', 'dfdgdfgd@dfddgdf.sdfsdfsd', 'dfsdfsdf@hfhghf.fsfdfs', '44545453453', '262c5cdc249c68aff33c147beacf5f6e', NULL, NULL, NULL, NULL, NULL),
('ec9fd810-74f0-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'Vineet', 'Mishra', 'vntmshra2@gmail.com', '2343234565', 'b4451172eac72b12e3397b24547c0625', NULL, NULL, NULL, NULL, NULL),
('f0d62b9d-74f3-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'rgdfgd', 'dhfgh', 'hfghfghf@hfg.gh', '4545454545', 'f4842bd99e95e124560dd2c93350cd2c', NULL, NULL, NULL, NULL, NULL),
('f30c2561-7522-11e7-bc55-fcf8aee943ea', 'PROVIDER', NULL, 'ssdsdsd', 'dsdsdsds', 'sdsdsds@fgdfgd.sfsfds', '343434343434', 'cff666caf386f88116f5087e7abb0235', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bm_users`
--
ALTER TABLE `bm_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `phone` (`phone`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
