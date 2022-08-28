-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 09:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muzeu`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titlu` longtext NOT NULL,
  `subtitluri` longtext NOT NULL,
  `txt` longtext NOT NULL,
  `poze` longtext NOT NULL,
  `cover` longtext NOT NULL,
  `data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `titlu`, `subtitluri`, `txt`, `poze`, `cover`, `data`) VALUES
(2, 'doamne ajuta', 'consum curent an pulea; Vr sa dorm cam 3 ani', 'ma pis pe el bac; vr bani', '[\"https:\\/\\/res.cloudinary.com\\/thobor\\/image\\/upload\\/v1661713949\\/muzeu\\/wew4juozkrx44hcvretx.jpg\",\"https:\\/\\/res.cloudinary.com\\/thobor\\/image\\/upload\\/v1661713951\\/muzeu\\/bntyfvfengwnaf6pdbha.jpg\",\"https:\\/\\/res.cloudinary.com\\/thobor\\/image\\/upload\\/v1661713952\\/muzeu\\/ftsphi3e0nd6agv8xey7.jpg\",\"https:\\/\\/res.cloudinary.com\\/thobor\\/image\\/upload\\/v1661713953\\/muzeu\\/rtwwevn19xf8rr4xmwue.jpg\",\"https:\\/\\/res.cloudinary.com\\/thobor\\/image\\/upload\\/v1661713955\\/muzeu\\/frnkhnlezqonakfp6vpc.jpg\",\"https:\\/\\/res.cloudinary.com\\/thobor\\/image\\/upload\\/v1661713956\\/muzeu\\/ot8mb81ot1lfv0oztx9b.jpg\"]', 'https://res.cloudinary.com/thobor/image/upload/v1661713960/muzeu/nptr04rwprjyt9nrsqfk.jpg', '2022-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `titlu` longtext NOT NULL,
  `subtitluri` longtext NOT NULL,
  `txt` longtext NOT NULL,
  `poze` longtext NOT NULL,
  `an` int(4) NOT NULL,
  `cover` longtext NOT NULL,
  `data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `titlu`, `subtitluri`, `txt`, `poze`, `an`, `cover`, `data`) VALUES
(1, 'primu', 'sper sa mearga; amin si doamne ajuta', 'atat ii trb daca nu merge; fac laptop tableta', '[\"https:\\/\\/res.cloudinary.com\\/thobor\\/image\\/upload\\/v1661715764\\/muzeu\\/hjdtqbcybkc7muv8d5fp.jpg\",\"https:\\/\\/res.cloudinary.com\\/thobor\\/image\\/upload\\/v1661715768\\/muzeu\\/rv7czah37tvjygrjzjvl.jpg\"]', 2016, 'https://res.cloudinary.com/thobor/image/upload/v1661715771/muzeu/oo0lobutjonrshtatweb.jpg', '2022-08-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
