-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 12:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(256) NOT NULL,
  `a_text` text NOT NULL,
  `a_actor` varchar(256) NOT NULL,
  `a_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`a_id`, `a_title`, `a_text`, `a_actor`, `a_date`) VALUES
(1, 'A flying jatt', 'Jatt is a reluctant superhero who fights crime and protects people. He meets his match in the evil Raka, who he must vanquish to save the day.', 'Tiger shroff', '2016-08-25 00:00:00'),
(2, 'A Gentleman', 'Gaurav, a simple hard working guy for a white collar job visits Mumbai for a meeting where his doppelganger is about to bring chaos in his life.', 'Sidharth Malhotra', '2017-08-25 00:00:00'),
(3, 'Aa dekhen zara', 'A photographer has nothing going for him, until he inherits a camera that has the ability to predict the future. In the process, he gains dangerous enemies who wants his camera for illicit goals.', ' Neil Nitin Mukesh', '2009-03-27 00:00:00'),
(4, 'Beauty and the Beast ', 'A selfish prince is cursed to become a monster for the rest of his life, unless he learns to fall in love with a beautiful young woman he keeps prisoner.', ' Emma Watson', '2017-03-17 00:00:00'),
(5, 'Aaja nachle', 'Dias dance teacher is dying. She returns to the town where she learnt to live and dance and most importantly to save the endangered Ajanta theatre.', 'Madhuri Dixit', '2017-11-30 00:00:00'),
(6, 'Batman v Superman: Dawn of Justice', 'Fearing that the actions of Superman are left unchecked, Batman takes on the Man of Steel, while the world wrestles with what kind of a hero it really needs.', 'Ben Affleck', '2016-03-25 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
