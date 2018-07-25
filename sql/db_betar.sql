-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 10:10 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_betar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signature`
--

CREATE TABLE `admin_signature` (
  `id` int(11) NOT NULL,
  `admin_signature_sig` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_signature`
--

INSERT INTO `admin_signature` (`id`, `admin_signature_sig`) VALUES
(1, '85195-sign.png');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fatherName` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `presentAddress` varchar(200) NOT NULL,
  `Nid` varchar(200) NOT NULL,
  `note` varchar(255) NOT NULL,
  `musictype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `fatherName`, `age`, `occupation`, `address`, `presentAddress`, `Nid`, `note`, `musictype`) VALUES
(1, 'sf', 'dfdf', 0, 'fd', 'fdfdf', 'dfd', '134234', 'df', '1,2,');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `id` int(11) NOT NULL,
  `fb_url` varchar(255) NOT NULL,
  `feed_con_num` varchar(255) NOT NULL,
  `mail_add` varchar(255) NOT NULL,
  `cn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `fb_url`, `feed_con_num`, `mail_add`, `cn`) VALUES
(1, 'https://www.facebook.com/Imtiaj.Uddin.Joy', '01734080525', 'Ahmedimtiaj91@gmail.com', '01734080524');

-- --------------------------------------------------------

--
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `serial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id`, `name`, `designation`, `email`, `mobile`, `image`, `status`, `serial`) VALUES
(368, 'à¦®à§‹. à¦œà¦¾à¦•à¦¿à¦°à§à¦² à¦‡à¦¸à¦²à¦¾à¦®  3', '1', 'gdgs@g.com', '', '04062018222512download.png', 0, 5),
(369, 'dfd 2', '2', 'shakil1360@yahoo.com', '', '07062018192003home9.jpg', 0, 1),
(370, 'dfd  1', '1', 'shakil1360@yahoo.com', '', '07062018192019home9.jpg', 0, 2),
(371, 'dfd 4', '1', 'shakil1360@yahoo.com', '', '07062018192028123.png', 0, 4),
(372, 'dfd 5', '2', 'shakil1360@yahoo.com', '', '070620181920371.jpg', 0, 3),
(373, 'i', '2', 'shakil1360@yahoo.com', '21312', '2407201819212129792669_171252810357035_2534578922855596032_n.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gellary`
--

CREATE TABLE `gellary` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gellary`
--

INSERT INTO `gellary` (`id`, `title`, `image`) VALUES
(2, '', '24072018183101Donald-Trumps-face-will-feature-on-Israeli-coin-marking-70th-anniversary-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `local_director`
--

CREATE TABLE `local_director` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `entry_date` datetime NOT NULL,
  `image` varchar(255) NOT NULL,
  `privious` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `decription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `local_director`
--

INSERT INTO `local_director` (`id`, `name`, `entry_date`, `image`, `privious`, `mobile`, `email`, `decription`) VALUES
(1, 'à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®', '2018-12-12 00:00:00', 'uploads/15062018115238Faqrul.jpg', 'sylhet', '12242363463', 'shakil.neub@gmail.com', 'à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®à¦®à§‹. à¦«à¦–à¦°à§à¦² à¦†à¦²à¦®');

-- --------------------------------------------------------

--
-- Table structure for table `prf_admin`
--

CREATE TABLE `prf_admin` (
  `id` int(11) NOT NULL,
  `prf_admn_un` varchar(40) NOT NULL,
  `prf_admn_pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prf_admin`
--

INSERT INTO `prf_admin` (`id`, `prf_admn_un`, `prf_admn_pass`) VALUES
(1, 'joy', '1234'),
(2, 'shakil', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `prf_artist`
--

CREATE TABLE `prf_artist` (
  `id` int(11) NOT NULL,
  `prf_fst_name` varchar(150) DEFAULT NULL,
  `prf_lst_name` varchar(150) DEFAULT NULL,
  `prf_mob_num` varchar(255) DEFAULT NULL,
  `prf_pic` text,
  `prf_add` varchar(300) DEFAULT NULL,
  `prf_grade` varchar(10) DEFAULT NULL,
  `prf_genre` varchar(100) DEFAULT NULL,
  `prf_status_active_dactive` int(11) DEFAULT NULL,
  `prf_un` varchar(255) DEFAULT NULL,
  `prf_pass` varchar(255) DEFAULT NULL,
  `prf_artist_seen` int(11) DEFAULT NULL,
  `prf_honour` varchar(255) DEFAULT NULL,
  `prf_code` bigint(255) DEFAULT NULL,
  `sig_file` text NOT NULL,
  `sig_type` text NOT NULL,
  `sig_size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prf_artist`
--

INSERT INTO `prf_artist` (`id`, `prf_fst_name`, `prf_lst_name`, `prf_mob_num`, `prf_pic`, `prf_add`, `prf_grade`, `prf_genre`, `prf_status_active_dactive`, `prf_un`, `prf_pass`, `prf_artist_seen`, `prf_honour`, `prf_code`, `sig_file`, `sig_type`, `sig_size`) VALUES
(27, 'shakil', 'ahmed', '01292883994', NULL, 'north east', 'A', '112', 1, 'shakil', '123456', NULL, '12', 1, '', '', ''),
(28, 'à¦ªà§à¦°à§€à¦¤à¦®', 'à¦ªà§à¦°à§€à¦¤à¦®', '01711164942', NULL, 'zindabazer', NULL, NULL, 2, 'pritom', '123456', NULL, NULL, 2, '', '', ''),
(29, 'q', 'q', '017877117272', NULL, 'srdfds', NULL, NULL, 0, 'joys', '123456', NULL, NULL, 3, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_admn`
--

CREATE TABLE `schedule_admn` (
  `id` int(11) NOT NULL,
  `schedule_admn_prf_id` int(11) NOT NULL,
  `schedule_admn_recding_time` time NOT NULL,
  `schedule_admn_telecst_time` time NOT NULL,
  `schedule_admn_prog_duration` varchar(20) NOT NULL,
  `schedule_admn_grd` varchar(40) NOT NULL,
  `schedule_admn_shomanie` varchar(200) NOT NULL,
  `schedule_admn_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_prf`
--

CREATE TABLE `schedule_prf` (
  `id` int(11) NOT NULL,
  `schedule_prf_id` int(11) NOT NULL,
  `schedule_prf_recording_time` time NOT NULL,
  `schedule_prf_telecst_time` time NOT NULL,
  `schedule_prf_prg_duration` varchar(40) NOT NULL,
  `schedule_prf_status` int(11) NOT NULL,
  `schedule_hon` varchar(255) NOT NULL,
  `schedule_seen` int(11) NOT NULL,
  `schedule_agree_cancel` int(11) NOT NULL,
  `schedule_invitation_date` date NOT NULL,
  `schedule_agree_date` date NOT NULL,
  `schedule_mohora` varchar(255) NOT NULL,
  `schedule_recording_date` date NOT NULL,
  `schedule_agreement_time` time NOT NULL,
  `schedule_telecast_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_prf`
--

INSERT INTO `schedule_prf` (`id`, `schedule_prf_id`, `schedule_prf_recording_time`, `schedule_prf_telecst_time`, `schedule_prf_prg_duration`, `schedule_prf_status`, `schedule_hon`, `schedule_seen`, `schedule_agree_cancel`, `schedule_invitation_date`, `schedule_agree_date`, `schedule_mohora`, `schedule_recording_date`, `schedule_agreement_time`, `schedule_telecast_date`) VALUES
(51, 2, '14:22:00', '14:22:00', '22', 0, '22', 0, 0, '2018-07-24', '0000-00-00', '22', '0022-02-22', '00:00:00', '0022-02-22'),
(52, 2, '15:33:00', '15:32:00', '3', 0, '33', 0, 0, '2018-07-24', '0000-00-00', '33', '0333-03-31', '00:00:00', '0033-03-31'),
(53, 1, '11:11:00', '11:11:00', '12', 0, '12', 0, 0, '2018-07-25', '0000-00-00', '111', '0001-11-11', '00:00:00', '0011-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_signature`
--
ALTER TABLE `admin_signature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gellary`
--
ALTER TABLE `gellary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `local_director`
--
ALTER TABLE `local_director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prf_admin`
--
ALTER TABLE `prf_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prf_artist`
--
ALTER TABLE `prf_artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_admn`
--
ALTER TABLE `schedule_admn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_prf`
--
ALTER TABLE `schedule_prf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_signature`
--
ALTER TABLE `admin_signature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=374;

--
-- AUTO_INCREMENT for table `gellary`
--
ALTER TABLE `gellary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `local_director`
--
ALTER TABLE `local_director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prf_admin`
--
ALTER TABLE `prf_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prf_artist`
--
ALTER TABLE `prf_artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `schedule_admn`
--
ALTER TABLE `schedule_admn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_prf`
--
ALTER TABLE `schedule_prf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
