-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 11:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savedent`
--

-- --------------------------------------------------------

--
-- Table structure for table `assetscategory`
--

CREATE TABLE `assetscategory` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assetscategory`
--

INSERT INTO `assetscategory` (`id`, `categoryname`) VALUES
(1, 'Computer Accessories'),
(2, 'Machines');

-- --------------------------------------------------------

--
-- Table structure for table `assetsrecords`
--

CREATE TABLE `assetsrecords` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `modelno` varchar(256) NOT NULL,
  `company` varchar(256) NOT NULL,
  `serialno` varchar(256) NOT NULL,
  `tagno` varchar(128) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `checkedin` date NOT NULL,
  `warrantyperiod` varchar(56) NOT NULL,
  `checkedout` date NOT NULL,
  `location` varchar(128) NOT NULL,
  `department` varchar(128) NOT NULL,
  `manageby` varchar(128) NOT NULL,
  `purchaseno` varchar(128) NOT NULL,
  `purchasedate` date NOT NULL,
  `purchaseprice` float NOT NULL,
  `vendorname` varchar(128) NOT NULL,
  `entrydate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assetsrecords`
--

INSERT INTO `assetsrecords` (`id`, `name`, `modelno`, `company`, `serialno`, `tagno`, `categoryid`, `checkedin`, `warrantyperiod`, `checkedout`, `location`, `department`, `manageby`, `purchaseno`, `purchasedate`, `purchaseprice`, `vendorname`, `entrydate`) VALUES
(1, 'Monitor', '19in', 'Samsung', 'slafj0-90da8f90', 'ds87f9sd7f', 1, '2017-05-26', '2 Years', '0000-00-00', 'HR Room', 'Admin', 'Habib', '89s76a9f7d', '2017-05-16', 15000, 'CSL', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patientrecords`
--

CREATE TABLE `patientrecords` (
  `id` int(11) NOT NULL,
  `visitingdate` date NOT NULL,
  `reffno` varchar(28) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `dateofbirth` date NOT NULL,
  `occupation` varchar(128) NOT NULL,
  `contactno` varchar(56) NOT NULL,
  `email` varchar(56) NOT NULL,
  `area` varchar(128) NOT NULL,
  `clinicalfindings` text NOT NULL,
  `medicalfindings` text NOT NULL,
  `dentalhistory` text NOT NULL,
  `investigationnote` text NOT NULL,
  `diagnosistreatmentplan` text NOT NULL,
  `treatmentnote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientrecords`
--

INSERT INTO `patientrecords` (`id`, `visitingdate`, `reffno`, `fullname`, `dateofbirth`, `occupation`, `contactno`, `email`, `area`, `clinicalfindings`, `medicalfindings`, `dentalhistory`, `investigationnote`, `diagnosistreatmentplan`, `treatmentnote`) VALUES
(1, '2017-05-01', '5163131', 'Ahmed Akter', '2008-05-14', 'Std', '01712203145', 'ahmed.akter@ngenitltd.com', 'Dhaka', '<h1 style="font-style: inherit; font-variant: inherit; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 500; font-stretch: inherit; font-size: 32px; line-height: 42px; font-family: &quot;Gotham Book&quot;; vertical-align: baseline; width: 267.109px;">\r\n	Print service providers: less work for better results!</h1>\r\n', '<h1 style="font-style: inherit; font-variant: inherit; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 500; font-stretch: inherit; font-size: 32px; line-height: 42px; font-family: &quot;Gotham Book&quot;; vertical-align: baseline; width: 267.109px;">\r\n	Print service providers: less work for better results!</h1>\r\n', '<h1 style="font-style: inherit; font-variant: inherit; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 500; font-stretch: inherit; font-size: 32px; line-height: 42px; font-family: &quot;Gotham Book&quot;; vertical-align: baseline; width: 267.109px;">\r\n	Print service providers: less work for better results!</h1>\r\n', '<h1 style="font-style: inherit; font-variant: inherit; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 500; font-stretch: inherit; font-size: 32px; line-height: 42px; font-family: &quot;Gotham Book&quot;; vertical-align: baseline; width: 267.109px;">\r\n	Print service providers: less work for better results!</h1>\r\n', '<h1 style="font-style: inherit; font-variant: inherit; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 500; font-stretch: inherit; font-size: 32px; line-height: 42px; font-family: &quot;Gotham Book&quot;; vertical-align: baseline; width: 267.109px;">\r\n	Print service providers: less work for better results!</h1>\r\n', '<h1 style="font-style: inherit; font-variant: inherit; box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-weight: 500; font-stretch: inherit; font-size: 32px; line-height: 42px; font-family: &quot;Gotham Book&quot;; vertical-align: baseline; width: 267.109px;">\r\n	Print service providers: less work for better results!</h1>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', NULL, NULL, NULL, NULL, 1268889823, 1494933775, 1, 'Master', 'Administrator', 'AA Planetica', '01712203145'),
(2, '::1', 'ahmed', '$2y$08$PlyWki33cf3mSY4LxuGIH.DRTXT7m5Sw0JTbe0AvSPX95mGgVTPYu', NULL, 'ahmedakter@gmail.com', NULL, NULL, NULL, NULL, 1448094905, NULL, 1, 'Ahmed', 'Akter', 'AA Planetica', '01712203145');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(9, 1, 1),
(10, 1, 2),
(8, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assetscategory`
--
ALTER TABLE `assetscategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assetsrecords`
--
ALTER TABLE `assetsrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientrecords`
--
ALTER TABLE `patientrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assetscategory`
--
ALTER TABLE `assetscategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `assetsrecords`
--
ALTER TABLE `assetsrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patientrecords`
--
ALTER TABLE `patientrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
