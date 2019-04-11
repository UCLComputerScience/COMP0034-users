-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 01, 2019 at 12:23 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--
-- Database: `comp0034_forms`
--
CREATE DATABASE IF NOT EXISTS `comp0034_forms` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `comp0034_forms`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
                         `addressid` int(11) NOT NULL,
                         `number` varchar(8) NOT NULL,
                         `street` varchar(150) NOT NULL,
                         `city` varchar(100) NOT NULL,
                         `postcode` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`addressid`, `number`, `street`, `city`, `postcode`) VALUES
(1, '45', 'The Street', 'Town', 'TT1 1TT'),
(2, '4', 'The Road', 'Town', 'TT1 1TR');

-- --------------------------------------------------------

--
-- Table structure for table `address_user`
--

CREATE TABLE `address_user` (
                              `addressid` int(11) NOT NULL,
                              `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address_user`
--

INSERT INTO `address_user` (`addressid`, `userid`) VALUES
(2, 13),
(1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
                      `userid` int(11) NOT NULL,
                      `firstname` varchar(100) NOT NULL,
                      `lastname` varchar(100) NOT NULL,
                      `email` varchar(120) NOT NULL,
                      `password` varchar(255) NOT NULL COMMENT 'Will be hashed before being stored'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `email`, `password`) VALUES
(13, 'John', 'Doe', 'j.doe@doe.com', '$2y$10$nn9byRH5Fh1ynctL28SeNexOKlryIanJwOc4ssDfpUaMwXciedQC6'),
(14, 'Jane', 'Doe', 'ja.doe@doe.com', '$2y$10$dzIYtmXu40rvc0WmPVu71eiJNu/nGaAjYEUdJ5p42Ba4xqgL4GP3G'),
(15, 'Claire', 'Doe', 'c.doe@doe.com', '$2y$10$B2zIzFTiVV1T/9UTcVftweBsWFUDPYz/RXmE.z2T9/f8s2WiJU7v.'),
(16, 'Ian', 'Doe', 'i.doe@doe.com', '$2y$10$Fvv8Y20CrYtCXcZXgWpLSeHKoAyLBY0wpFK7wtNKJaehtQjQKHwuS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressid`);

--
-- Indexes for table `address_user`
--
ALTER TABLE `address_user`
  ADD KEY `addressed` (`addressid`) USING BTREE,
  ADD KEY `userid` (`addressid`) USING BTREE,
  ADD KEY `user_userid` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_user`
--
ALTER TABLE `address_user`
  ADD CONSTRAINT `address_address_id` FOREIGN KEY (`addressid`) REFERENCES `address` (`addressid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_userid` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

-- Add user for the database
CREATE USER 'forms'@'localhost' IDENTIFIED BY 'forms';
GRANT ALL PRIVILEGES ON comp0034_forms . * TO 'forms'@'localhost';
FLUSH PRIVILEGES;