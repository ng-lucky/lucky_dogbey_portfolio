-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 09:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lucky_dogbey`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `thumbnail`) VALUES
(1, 'Push Aid Africa (PAAF) Website', 'PAAF is an NGO organization that focuses in educating youth and adolescent on health issues. Website located here https://pushaidafrica.org/', './assets/images/project-3.jpg'),
(2, 'KudiGo StoreFront 360', 'KudiGo StoreFront 360 is a web component of the KudiGo StoreFront application designed for retailers to help them manage their business operations and get intelligent insight into their business operations. Visit https://storefront.kudigo.com/ to sign up on StoreFront 360', './assets/images/project-2.png'),
(3, 'Knowledge Access Power (KAP) Backend', 'All you need to know about adolescent reproductive health. Visit https://play.google.com/store/apps/details?id=com.knowledge_access_power.app to download for Android, and https://apps.apple.com/us/app/knowledge-and-access-power/id1623868494 for IOS', './assets/images/project-8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
