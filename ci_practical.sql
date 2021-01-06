-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 12:18 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_practical`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE IF NOT EXISTS `tbl_event` (
  `ev_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ev_title` varchar(1000) NOT NULL,
  `ev_start_dt` date NOT NULL,
  `ev_end_dt` date NOT NULL,
  `ev_recurr` varchar(50) NOT NULL,
  `ev_re_a` varchar(100) NOT NULL,
  `ev_re_b` varchar(100) NOT NULL,
  `ev_re_c` varchar(100) NOT NULL,
  `ev_re_d` varchar(100) NOT NULL,
  `ev_re_e` varchar(100) NOT NULL,
  PRIMARY KEY (`ev_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`ev_id`, `ev_title`, `ev_start_dt`, `ev_end_dt`, `ev_recurr`, `ev_re_a`, `ev_re_b`, `ev_re_c`, `ev_re_d`, `ev_re_e`) VALUES
(7, 'Test Event 1', '2021-01-01', '2021-01-06', 'REPEAT', 'Every', 'Week', 'First', 'Sun', 'Month');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
