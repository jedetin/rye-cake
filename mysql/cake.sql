-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 06:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `id` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `product` tinytext NOT NULL,
  `consult` varchar(11) NOT NULL,
  `orderstr` varchar(240) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`id`, `phone`, `email`, `product`, `consult`, `orderstr`, `time`) VALUES
('1408-025822-0E71', '9956129630', 'cawepah513@noobf.com', 'CRG', 'jee', '{\"R\":\"1231\",\"M\":\"123\",\"RQ\":\"GJ\",\"CQ\":\"OPEN\",\"GQ\":\"M\",\"pwd\":null}', '2021-08-14 09:58:10'),
('1408-070415-39E8', '9876543210', 'contact@colpare.com', 'CRG', 'jee', '{\"R\":\"1254\",\"M\":\"251\",\"RQ\":\"RJ\",\"CQ\":\"SC\",\"GQ\":\"F\",\"pwd\":null}', '2021-08-14 13:34:15'),
('202107192687', '7346129630', 'tifocen451@eyeremind.com', 'CVR', '101', '{\"url\":\"https:\\/\\/play.google.com\\/store\\/\"}', '2021-07-19 16:50:22'),
('202107197BFE', '7956129630', 'cawepah513@noobf.com', 'CON', '100', '{\"opt\":\"1\",\"date\":\"2021-07-21\",\"time\":\"15:05\"}', '2021-07-19 16:38:16'),
('20210719C5F7', '7956129630', 'cawepah513@noobf.com', 'CVR', '101', '{\"url\":\"https:\\/\\/twitter.com\\/ourvadodara\"}', '2021-07-19 16:30:20'),
('20210722BE3A', '9956129630', 'tifocen451@eyeremind.com', 'CVR', '101', '{\"url\":\"https:\\/\\/colpare.com\\/sd\\/status\\/1414450863217725440\"}', '2021-07-22 16:54:25'),
('20210722F5E2', '9956129630', 'tifocen451@eyeremind.com', 'CVR', '101', '{\"url\":\"https:\\/\\/www.sharekhan.com\\/\"}', '2021-07-22 17:18:30'),
('202107231848', '9166479980', 'jeedee213@gmail.com', 'CON', '100', '{\"opt\":\"2\",\"date\":\"2021-07-25\",\"time\":\"15:10\"}', '2021-07-23 09:38:47'),
('20210723B84C', '9956129630', 'fewos48159@seek4wap.com', 'CRG', 'CLAT', '{\"R\":\"82451\",\"M\":\"97\",\"P\":\"92.44\",\"RQ\":\"GJ\",\"CQ\":\"GEN\",\"GQ\":\"M\",\"isPwd\":null}', '2021-07-24 08:37:36'),
('20210723D709', '9956129630', 'cawepah513@noobf.com', 'CON', '100', '{\"opt\":\"1\",\"date\":\"2021-07-27\",\"time\":\"16:33\"}', '2021-07-23 10:03:56'),
('2807-114954-FBD', '7956129630', 'cawepah513@noobf.com', 'CRG', 'clat', '{\"R\":\"3142\",\"M\":\"30.25\",\"RQ\":\"KL\",\"CQ\":\"OBC\",\"GQ\":\"M\",\"pwd\":null}', '2021-08-07 16:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `height` int(255) NOT NULL,
  `width` int(255) NOT NULL,
  `lefts` varchar(255) NOT NULL,
  `top` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `height`, `width`, `lefts`, `top`) VALUES
(1, 'Screenshot 2022-03-13 at 11.33.31 PM.png', 12, 12, '0', 0),
(2, 'bytefly.jpg', 100, 100, '50', 50),
(5, '19381552.jpg', 500, 500, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `times` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user`, `times`) VALUES
(1, 'test@test.com', '$2y$10$hlQr.cSQ1slVm/EBV21/H.6/W53SwGfao2ANG1q8Kuv0MQjOCvodO', 'test', '2022-04-10 13:19:51'),
(4, 'admin@test.com', '$2y$10$hlQr.cSQ1slVm/EBV21/H.6/W53SwGfao2ANG1q8Kuv0MQjOCvodO', 'admin', '2022-04-10 08:42:29'),
(10, '1test@test.com', '$2y$10$cWYu3.tRM4zkQ31do0DZUuIOlxCHjftY9HwC8IFkX/KXlJfAi3RLe', '1test', '2022-04-10 18:08:00'),
(11, '2test@gmail.com', '$2y$10$cWYu3.tRM4zkQ31do0DZUuIOlxCHjftY9HwC8IFkX/KXlJfAi3RLe', '2test', '2022-04-10 18:17:29'),
(13, 'test1@test.com', '$2y$10$1T8xuM3Uiqpwo/QQYlStOu1LyFG4hwp.ZXks8pRdfrgo.9G5dNqPu', 'test', '2022-04-17 07:05:56'),
(14, 'test2@test.com', '$2y$10$d/g3ckf9NbLRLRbT3uOKhe02JluqopgYhUTpT81k1aZ.ODnuPwV/C', 'user', '2022-04-17 07:07:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
