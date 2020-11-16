-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 09:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_food`
--
CREATE DATABASE IF NOT EXISTS `db_food` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_food`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `C_ID` int(15) NOT NULL,
  `C_Name` varchar(25) NOT NULL,
  `Contact_Number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`C_ID`, `C_Name`, `Contact_Number`) VALUES
(1, 'Abdul', 17458695),
(123, 'Asd', 4564);

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `E_ID` int(15) NOT NULL,
  `E_Name` varchar(25) NOT NULL,
  `Assigned_Table` int(10) NOT NULL,
  `Designation` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`E_ID`, `E_Name`, `Assigned_Table`, `Designation`) VALUES
(1, 'Sumaya', 1, 'Waiter');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `M_ID` int(15) NOT NULL,
  `M_Name` varchar(25) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`M_ID`, `M_Name`, `Type`, `Price`) VALUES
(1, ' French Fries', 'Appetizers ', 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`E_ID`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`M_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
