-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2020 at 07:55 PM
-- Server version: 10.1.37-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `ad_id` varchar(10) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_pswd` varchar(50) NOT NULL,
  `ad_eml` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`ad_id`, `ad_name`, `ad_pswd`, `ad_eml`) VALUES
('admin', 'Jeffrey Aboh', 'admin', 'jeffrey@myethion.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_status`
--

CREATE TABLE `t_status` (
  `s_id` varchar(50) NOT NULL,
  `s_stat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_status`
--

INSERT INTO `t_status` (`s_id`, `s_stat`) VALUES
('AICOHS00001', 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `s_detid` varchar(15) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `s_phn1` varchar(100) NOT NULL,
  `s_phn2` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_occ` varchar(100) NOT NULL,
  `f_phn` varchar(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_occ` varchar(100) NOT NULL,
  `m_phn` varchar(100) NOT NULL,
  `s_iop` varchar(100) NOT NULL,
  `s_sex` varchar(6) NOT NULL,
  `s_cadr` varchar(100) NOT NULL,
  `s_cst` varchar(100) NOT NULL,
  `s_cpin` int(6) NOT NULL,
  `s_cmob` varchar(100) NOT NULL,
  `s_padr` varchar(100) NOT NULL,
  `s_pst` varchar(100) NOT NULL,
  `s_ppin` int(6) NOT NULL,
  `s_pmob` varchar(100) NOT NULL,
  `s_ruc` varchar(100) NOT NULL,
  `s_natn` varchar(100) NOT NULL,
  `s_relg` varchar(100) DEFAULT NULL,
  `s_catg` varchar(100) NOT NULL,
  `s_mainsxam` varchar(100) NOT NULL,
  `s_mainsrank` varchar(100) NOT NULL,
  `s_mainsroll` varchar(100) NOT NULL,
  `s_mainsbrnch` varchar(100) NOT NULL,
  `s_branch` varchar(100) NOT NULL,
  `s_college` varchar(100) NOT NULL,
  `s_center` varchar(100) NOT NULL,
  `s_crtype` varchar(100) NOT NULL,
  `s_pcm` varchar(100) NOT NULL,
  `s_tenbrd` varchar(100) NOT NULL,
  `s_tenyop` varchar(100) NOT NULL,
  `s_tentotmark` varchar(100) NOT NULL,
  `s_tenmarkob` varchar(100) NOT NULL,
  `s_tendiv` varchar(100) NOT NULL,
  `s_tenprcmark` varchar(100) NOT NULL,
  `s_twlbrd` varchar(100) NOT NULL,
  `s_twlyop` varchar(100) NOT NULL,
  `s_twltotmark` varchar(100) NOT NULL,
  `s_twlmarkob` varchar(100) NOT NULL,
  `s_twldiv` varchar(100) NOT NULL,
  `s_twlprcmark` varchar(100) NOT NULL,
  `s_moi` varchar(100) NOT NULL,
  `s_pay` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`s_detid`, `s_id`, `s_phn1`, `s_phn2`, `f_name`, `f_occ`, `f_phn`, `m_name`, `m_occ`, `m_phn`, `s_iop`, `s_sex`, `s_cadr`, `s_cst`, `s_cpin`, `s_cmob`, `s_padr`, `s_pst`, `s_ppin`, `s_pmob`, `s_ruc`, `s_natn`, `s_relg`, `s_catg`, `s_mainsxam`, `s_mainsrank`, `s_mainsroll`, `s_mainsbrnch`, `s_branch`, `s_college`, `s_center`, `s_crtype`, `s_pcm`, `s_tenbrd`, `s_tenyop`, `s_tentotmark`, `s_tenmarkob`, `s_tendiv`, `s_tenprcmark`, `s_twlbrd`, `s_twlyop`, `s_twltotmark`, `s_twlmarkob`, `s_twldiv`, `s_twlprcmark`, `s_moi`, `s_pay`) VALUES
('DE00000001', 'AICOHS00001', '09053448854', '', 'Ika South', 'Joyce Aboh', '08130308220', 'jeffrey@myethion.com', 'Community Health', '3534232', '483348JA', 'Male', '41, Wuye', 'Abuja', 900246, '', '41, Wuye', 'Abuja', 900246, '', '', 'Nigerian', 'Delta', '', '', 'Dental Technology', 'Single', 'Christian', 'SCHOOL OF DENTAL TECHNOLOGY', 'SCHOOL OF COMMUNITY HEALTH & PREVENTIVE MEDICINE', '', '', '205', 'Danbo Schools', 'September', '2008', 'August', '2014', 'School Satificate', 'Omega College', 'September', '2015', 'August', '2019', 'WAEC', '1 Examination Passed', '2 Years');

-- --------------------------------------------------------

--
-- Table structure for table `t_userdoc`
--

CREATE TABLE `t_userdoc` (
  `s_id` varchar(10) NOT NULL,
  `s_pic` varchar(200) NOT NULL,
  `s_tenmarkpic` varchar(200) NOT NULL,
  `s_tencerpic` varchar(200) NOT NULL,
  `s_twdmarkpic` varchar(200) NOT NULL,
  `s_twdcerpic` varchar(200) NOT NULL,
  `s_idprfpic` varchar(200) NOT NULL,
  `s_sigpic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_usermark`
--

CREATE TABLE `t_usermark` (
  `s_id` varchar(50) NOT NULL,
  `s_omr` varchar(50) NOT NULL,
  `s_mark` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_user_data`
--

CREATE TABLE `t_user_data` (
  `s_id` varchar(12) NOT NULL,
  `s_pwd` varchar(15) NOT NULL,
  `s_dob` date DEFAULT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_mob` varchar(15) DEFAULT NULL,
  `s_signupdate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user_data`
--

INSERT INTO `t_user_data` (`s_id`, `s_pwd`, `s_dob`, `s_name`, `s_email`, `s_mob`, `s_signupdate`) VALUES
('AICOHS00001', 'ReRCGiq0', '1999-04-14', 'Jeffrey Aboh', 'mc@myethion.com', '09053448854', '2019-10-04 10:34:44.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `t_status`
--
ALTER TABLE `t_status`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`s_detid`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_userdoc`
--
ALTER TABLE `t_userdoc`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_usermark`
--
ALTER TABLE `t_usermark`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `t_user_data`
--
ALTER TABLE `t_user_data`
  ADD PRIMARY KEY (`s_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_status`
--
ALTER TABLE `t_status`
  ADD CONSTRAINT `t_status_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_userdoc`
--
ALTER TABLE `t_userdoc`
  ADD CONSTRAINT `t_userdoc_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

--
-- Constraints for table `t_usermark`
--
ALTER TABLE `t_usermark`
  ADD CONSTRAINT `t_usermark_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `t_user_data` (`s_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
