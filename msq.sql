-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 11:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poragmsq`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(3, 'porag', 'ab.rhaman77@gmail.com', 'i want to go.');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `email`, `comments`, `file`) VALUES
(10, 'shama', 'shama@gmail.com', 'ssss', 'borang-pengeluaran-transkrip-awal-19.1.21.pdf'),
(11, 'Sagor', 'sagor@gmail.com', 'nothing', 'governance_framework-15.5.17.pdf'),
(13, 'Abdur Rhaman', 'abrhaman97@gmail.com', 'i have done donation', 'Donation Reciept.pdf'),
(14, 'Md abdur rhaman', 'rhamanabdur519@gmail.com', 'i did payment 200 taka', 'Donation Reciept.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `eventdt` datetime NOT NULL,
  `description` varchar(255) NOT NULL,
  `volunteer` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `eventdt`, `description`, `volunteer`) VALUES
(14, 'IALSA', '2022-09-13 16:00:00', 'PLEASE COME', 10),
(15, 'Jalsssa', '2022-01-28 16:00:00', 'PLEASE COME', 20),
(16, 'Prograh', '2022-01-05 04:04:00', 'please join with use', 10),
(17, 'Islamic Hadis', '2022-01-05 03:04:00', 'please join our program', 10);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `aname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `bname`, `aname`, `category`, `file`) VALUES
(5, 'অর্থনীতিতে রাসুল সাঃ এর দশ দফা ', 'প্রফেসর শাহ মুহাম্মদ হাবীবুর রহমান', 'ইসলামি জীবন দশা', 'অর্থনীতিতে রাসুল সাঃ এর দশ দফা – প্রফেসর শাহ মুহাম্মদ হাবীবুর রহমান.pdf'),
(6, 'সহীহ হাদিসে কুদসী ', 'আবু আব্দুল্লাহ মুস্তফা আল আদাভী', 'হাদিস', 'সহীহ হাদিসে কুদসী – আবু আব্দুল্লাহ মুস্তফা আল আদাভী.pdf'),
(7, 'আল কুরআন বাংলা অনুবাদ আরবীসহ ', 'মাওলানা মুহাম্মদ মূসা', 'আল কুরআন', 'আল কুরআন বাংলা অনুবাদ আরবীসহ – মাওলানা মুহাম্মদ মূসা.pdf'),
(8, 'নির্বাচিত হাদীস ', 'মুজাফ্ফর বিন মুহসিন', 'হাদীস', 'নির্বাচিত হাদীস – মুজাফ্ফর বিন মুহসিন.pdf'),
(9, 'Dr jakir nayak bani', 'Dr Jakit nayak', 'Hadis', 'ডা জাকির নায়েকের লেকচার সমগ্র.pdf'),
(10, 'Hadis and quran', 'Dr mukter mossoin', 'Hadis', 'ডা জাকির নায়েকের লেকচার সমগ্র.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `name`, `email`, `question`, `answer`) VALUES
(8, 'Abdur Rhaman', 'abrhaman97@gmail.com', 'the proper way to do solat ?', 'will let u know later'),
(9, 'Md abdur rhaman', 'rhamanabdur519@gmail.com', 'how are u imam?\r\n', 'Imfine alhumdulliah\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `phone`, `address`, `code`, `status`) VALUES
(11, 'Sagor', 'alimdsagor963@gmail.com', '$2y$10$jFdu5rMh7CeUbHDJxzuozOpPKfoPaMRJqp6sA.e9sec8AiuZ2a9kC', '1236547897', 'lal', 0, 'verified'),
(15, 'Abdur Rhaman', 'ab.rhaman77@gmail.com', '$2y$10$tJ0CN8kFRvx2Fpm3YvdLV.QBaeDlBTcCg9EIVRHSx71nJbddCmSua', '+8801236547896', 'bilmaria', 0, 'verified'),
(17, 'Shama', 'abushamaomi@gmail.com', '$2y$10$TZS2hyuFyZ6NnPy.mBFEIOE/DN80Yry0qNC82R00kLFazZi4yxH6.', '+8801236547896', 'bilmaria', 0, 'verified'),
(21, 'ABDUR RHAMAN', 'abrhaman97@gmail.com', '$2y$10$.GlMLEseiHCS7v7NBxKPQ./NySCzSKvh0p/JFiBx/PeBwAK.KlkxK', '+8801236547825', 'Rajshahi', 0, 'verified'),
(22, 'ABDUR RHAMAN', 'rhamanabdur519@gmail.com', '$2y$10$kWRcleWxzAg5.F8TcBgO2eA./bBVPkOXerxFvtxqvUwWVC/04J0B.', '+8801236547825', 'Rajshahi', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `email`, `phone`) VALUES
(17, 'harun khan', 'harun@gmail.com', '+8801576585458'),
(18, 'Abdur Rhaman', 'abrhaman97@gmail.com', '+88014756956685'),
(19, 'Md abdur rhaman', 'rhamanabdur519@gmail.com', '+8801236547825');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
